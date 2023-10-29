<?php
use Google\Cloud\Translate\V2\TranslateClient;
/**
 * NOTES:
 * 1-@Globals
 * Les fichiers de langues du dossiers globals sont chargé par défaut dans le systeme quelque soit le lien ou la page que l'on veut afficher
 * Tous les fichies dans les fichiers doivent avoir le nom de la langue concernés quelque soit le chemin pour atteindre le fichier (sous dossier)
 * - Recommendation
 * Le dossier global peut etre utilisé pour enrégister les flash
 * 
 */

define("SUPPORTED_LANGUAGES", ["fr", "en"]);
define("DEFAULT_LANGUAGE", "fr");

class Translation
{

    private static $configs = [
        "contexts" => [
            "page" => '%page%',
            "flash" => '%flash%',
            "mail" => '%mail%'
        ],
        "globals_dir" => "@globals"
    ];

    //Current Language
    private static $language = "fr";

    //Current Page File
    private static $currentUrlFile;

    private static array $translations = [];

    /**
     * Change current language of file
     * @param string $language  current language
     */
    static function setLanguage(string $language)
    {
        self::$language = $language;
        $_SESSION["langue"]=self::$language ;
    }

    static function getConfigs()
    {
        return self::$configs;
    }

    static function getContexts()
    {
        return self::$configs["contexts"];
    }

    static function getLanguage()
    {
        return self::$language;
    }

    static function getCurrentUrlFile()
    {
        return self::$currentUrlFile;
    }

    static function getTranslations()
    {
        return self::$translations;
    }

    static function setCurrentUrlFile(string $url)
    {
        self::$currentUrlFile = $url;
    }
    /**
     * Load current url file and define language form session
     */
    static function init()
    {
        $lang = $_SESSION["langue"] ?? self::$language;
        $_SESSION["langue"] = in_array($lang, SUPPORTED_LANGUAGES) ? $lang : DEFAULT_LANGUAGE;
        self::setLanguage($_SESSION["langue"]);
        self::loadUrl();
    }

    static function addContext(string $key, string $value)
    {
        self::$configs["contexts"][$key] = $value;
    }

    private static function loadGlobals()
    {
        $globalDirPath = dirname(__DIR__) . "/i18n/" . self::$configs["globals_dir"];
        if (file_exists($globalDirPath) && !empty($files = scandir($globalDirPath))) {
            $contents = [];
            foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($globalDirPath, \RecursiveDirectoryIterator::SKIP_DOTS)) as $file) {
                if ($file->getFilename() === self::$language . ".php" || $file->getFilename() === self::$language . ".json") {
                    $content = self::loadFileContent($file->getPathname(), false);

                    if (!empty($content)) $contents = [
                        ...$contents,
                        ...$content
                    ];
                }
            }

            if (!empty($contents)) return $contents;
        }
        return null;
    }

    static function resetToCurrentIndex()
    {
        self::$currentUrlFile = null;
        return self::getCurrentTransFilePathFromURL();
    }

    /**
     * @param string $url  Http URL or Translation page uri
     * @return string Translation file location path
     */
    private static function parseUrlToTransFile(string $url): string
    {
        return implode("/", array_slice(explode("/", trim(str_replace((empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://" . $_SERVER['SERVER_NAME'], "", $url), "/")), 0, 2));
    }

    /**
     * @param string $url  Http URL or Translation page uri
     * @return array translation file content
     */
    private static function loadUrl(?string $url = null)
    {
        $translationFilePath = empty($url) ? self::getCurrentTransFilePathFromURL() :  self::parseUrlToTransFile($url);
        return self::loadFileContent($translationFilePath);
    }


    /**
     * Parse content base on context from the most globals to the most specific
     */
    private static function parseContent(array $content = null, string $from = null, $includeGlobalContext = true, $includeGlobals = true)
    {
        $contextContent = empty($from) || empty($content) ? null :  $content[self::$configs["contexts"][$from]];
        $contextContent = empty($contextContent) ? [] : $contextContent;
        $globalContents = empty($includeGlobals) ? null : self::loadGlobals();
        $globalContents = empty($globalContents) ? [] : $globalContents;
        $defaultContent = empty($content) ? [] : $content;
        if (empty($includeGlobalContext)) {
            return [
                ...$globalContents,
                ...$contextContent

            ];
        } else {
            foreach (self::$configs["contexts"] as $key => $value) {
                unset($defaultContent[self::$configs["contexts"][$key]]);
            }
            return [
                ...$globalContents, // @globaldir file contents 
                ...$defaultContent, //Context globals content
                ...$contextContent
            ];
        }
    }



    static function getContent(?string $url = null, ?string $context = null, $includeGlobalContext = true, $includeGlobals = true,)
    {
        return self::parseContent(self::loadUrl($url), $context, $includeGlobalContext, $includeGlobals);
    }

    static function setContent($key, $value){
        $filedata = file_exists(dirname(__DIR__)."/i18n/@globals/".self::$language.".json") ? json_decode(file_get_contents(dirname(__DIR__)."/i18n/@globals/".self::$language.".json"), true) : [];
        $filedata[$key]=$value;
        file_put_contents(dirname(__DIR__)."/i18n/@globals/".self::$language.".json", json_encode($filedata, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
    }

    /**
     * Load Translation file content 
     * @param string $filePath  file path
     * @return array Translation file content
     */
    private static function loadFileContent(string $filePath, bool $uriRelativePath = true)
    {
        $langFile = $uriRelativePath ? dirname(__DIR__) . "/lang/" . $filePath . "/" . self::$language . '.php' : $filePath;
        if (empty(self::$translations[$langFile])) {
            if (file_exists($langFile)) {
                self::$translations[$langFile] = strpos($langFile, ".json")!==false?json_decode(file_get_contents($langFile), true) : require($langFile);
            } else {
                //trigger_error("Failed to load translation file located at " . $langFile . " Check if translation file exits.");
            }
        }
        return self::$translations[$langFile] ?? null;
    }

    /**
     * Determine current URL lo
     * @param string $url  Http URL or Translation page uri
     * @return string Current translation file based on the URL 
     */
    private static function  getCurrentTransFilePathFromURL(): string
    {

        if (empty(self::$currentUrlFile)) {
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
            $uri = trim(parse_url($actual_link, PHP_URL_PATH), "/");
            $urlPath = empty($uri) ? "home" : $uri;
            self::$currentUrlFile = $urlPath;
            return Translation::parseUrlToTransFile($urlPath);
        }
        return self::$currentUrlFile;
    }

    public static function getLangDir(){
        $dirPath=dirname(__DIR__)."/i18n/".self::getCurrentUrlFile();
        if (!is_dir($dirPath)) mkdir($dirPath, 0777, true);
        return $dirPath;
    }

    public static function extractLangContent($html){
        $doc = new \DOMDocument();
        $doc->loadHTML($html);
        $xpath = new \DOMXPath($doc);
        $textData = [];
        $jsonData=[];
        //SaveContent file to translation file
        $nodes = $xpath->query('//text()[not(ancestor::script) and not(ancestor::style) and not(ancestor::svg)]');

        foreach ($nodes as $node) {

            $text = trim($node->nodeValue);
            if (!empty($text)) {
                //Real text key
                $textData[] = $text;
                $jsonData[$text]=$text;
            }
        }
        
        return $jsonData;
    }

    public static function extractContent($html){
        $pathDir=self::getLangDir();
        $defaultLangFile =  $pathDir."/".DEFAULT_LANGUAGE.".json";
        $defaultLanContents=self::extractLangContent($html);
        file_put_contents($defaultLangFile, json_encode($defaultLanContents, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE));

        $targetFileContent =[];
        if(DEFAULT_LANGUAGE!=self::$language){
            $targetLangFile =  $pathDir."/".self::$language.".json";
            $targetFileContent=[];
            if(file_exists($targetLangFile)){
                $targetFileContent = json_decode(file_get_contents($targetLangFile), true);
            }
            $newTranslates=false;
            foreach($defaultLanContents as $key=>$value){
                if (empty($targetFileContent[$key])){
                    $newTranslates=true;
                    $targetFileContent[$key]=self::translateWithGoogle($value);
                }
            }
            if($newTranslates){
                file_put_contents($pathDir."/".self::$language.".json", json_encode($targetFileContent, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES));
            }
            
        
        }else{
            $targetFileContent=$defaultLanContents;
        }
        return str_replace(array_keys($targetFileContent),array_values($targetFileContent), $html);
        

    }

    public static function translateHtml($html){
        return self::translateWithGoogle($html);
    }

    static function translateWithGoogle($text){
        if (self::$language==DEFAULT_LANGUAGE ) return $text;
        $translate = new TranslateClient([
            'key' => 'AIzaSyDez8oOpzwGM9EceyYKIcTrsiv7vmMwFAs'
        ]);

        $translatedValue = $translate->translate($text, [
            'source' => DEFAULT_LANGUAGE,
            'target' => self::$language,
            'format'=>"html"
        ]);

        return $translatedValue["text"];

    }


    /*static function translateWithGoogle($data){
        

        $translate = new TranslateClient([
            'key' => 'AIzaSyDez8oOpzwGM9EceyYKIcTrsiv7vmMwFAs'
        ]);

        $translatedValue = DEFAULT_LANGUAGE==self::$language ?["text"=>implode($separators, $data)]:  $translate->translate(implode($separators, array_values($data)), [
            'source' => DEFAULT_LANGUAGE,
            'target' => self::$language,
            'format'=>"html"
        ]);
        $result=explode($separators, $translatedValue["text"]);
        
        return array_combine(array_keys($data), $result);

    }*/
}

function trans(string $key, array $params = [], bool $allowScript=false,?string $url = null, string $context = null, ?bool $includeGlobalContext = true, ?bool $includeGlobals = true)
{
    
    $contextContent = Translation::getContent($url, $context, $includeGlobalContext, $includeGlobals);
    $keyVal = array_reduce(explode(".", $key), function ($prev, $cur) use ($contextContent, $key) {
        $data = $prev ?? $contextContent;
        if (isset($cur) && isset($data) && is_array($data)) {
            return $data[$cur] ??  $key;
        }
        return $data;
    });
    
    $keyContent = $keyVal ?? $key;
    if (empty($keyVal)){
        Translation::setContent($key, $keyContent);
    }
    $keyContent = $allowScript ?$keyContent : htmlspecialchars($keyContent);
    
    $paramIndex = 0;
    
    if (\count($params) && strpos($keyContent, "}}") !== false) {
        $translationKeys =  array_filter(array_map(function ($value) {
            $arr = explode("{{", $value);
            return $arr[count($arr) - 1];
        }, explode("}}", $keyContent)), fn ($x) => !empty($x));
        foreach ($params as $paramKey => $value) {
            if ((is_int($paramKey) && isset($translationKeys[$paramIndex])) || is_string($paramKey)) {
                $keyContent = str_replace("{{" . (is_int($paramKey) ? $translationKeys[$paramIndex] :  $paramKey) . "}}", $value, $keyContent);
            }
            $paramIndex++;
        }
    }

    return $keyContent;
}

function t(string $key){
    return Translation::translateWithGoogle($key);
}





//Test Methods
trait Translation_HTTP_Methods
{
    public function pu_test_trans()
    {
        $this->useCases();
        die();
        echo "<pre>";
        Translation::setLanguage("fr");
        var_dump(Translation::getContent("test/pu_test_trans"));
        Translation::setLanguage("en");
        var_dump(Translation::getContent("test/pu_test_trans"));
        echo "</pre>";
        die();
    }

    /**
     * Ajouter une context de traduction
     * L'ajout d'un context permet d'organiser le contenu de la page 
     */
    public function useCases()
    {
        var_dump(t("Pierre {{name}} {{Michel}}", ["Agbla","Michel2"]));
        echo "<pre>";
        //**Initialize Translation  default language is fr
        Translation::init();
        //Data should be available in url file or in @globals
        var_dump(t("simple")); //language is fr here

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        //**Change Languague
        Translation::setLanguage("en");
        //show only en data
        var_dump(t("simple")); //language is en here

        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        //** Change Current page file 
        Translation::setCurrentUrlFile("test/auth");
        var_dump(t("salut")); //language is en 
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        //** Reset index
        Translation::resetToCurrentIndex();
        var_dump(t("salut"), Translation::getCurrentUrlFile()); //Not avalailable at this index language is en .
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        //** Change Current page file  dynamically
        var_dump(t("salut", [], "test/auth"),  Translation::getCurrentUrlFile()); //language is en
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";

        //** Use Page Contexts
        //Use default page context
        Translation::setLanguage("fr");
        var_dump(t("salut", [], "test/auth", "page"));
        Translation::addContext("alert", "%alert%");
        var_dump(t("salut", ["John"], "test/auth", "alert"));
        var_dump(t("error.danger", ["John"], "test/auth", "alert"));
        echo "</pre>";


        Translation::setCurrentUrlFile("client/login");
        var_dump(t(":name vous salut ", ["site_title"=>"IZICHANGE"]));
        t("emailFieldLabel", ["Abakou"]);
        t("Pierre {{name}}", ["Agbla"]);
        die();
    }
}

Translation::init();


