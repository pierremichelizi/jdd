<?php

namespace Core;

use Translation;

$config = require_once("../config/db.php");
$env = require_once("../config/env.php");
$default = require_once("../config/default.php");

ini_set ('display_errors', intval($env["ENV"]=="DEV")); 
ini_set ('display_startup_errors', intval($env["ENV"]=="DEV")); 
if($env["ENV"]=="DEV"){
    error_reporting (E_ALL); 
}



require_once("session.php");
require_once("utils.php");
require_once("translation.php");
require_once("db.php");
require_once("router.php");
require_once("autoload.php");

require_once("../vendor/autoload.php");


//Load twig
$twigLoader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($twigLoader, [
    'cache' =>  $env["ENV"] === "DEV" ?  false : "../tmp/twig",
    'autoescape' => false
]);

$translationFilter = new  \Twig\TwigFilter('trans', function ($key, array $array = []) {
    return trans($key, $array[0] ?? [],  $array[1] ?? true, $array[2] ?? null, $array[3] ?? null, $array[3] ?? true, $array[4] ?? true);
}, ['is_variadic' => true]);

$jsonDecode = new  \Twig\TwigFilter('json_decode', function ($key) {
    return json_decode($key);
});

$decode = new  \Twig\TwigFilter('decode', function ($key) {
    return htmlspecialchars_decode($key);
});


$translationFunction = new \Twig\TwigFunction('t', 'trans');
$jsonDecodeFunc = new \Twig\TwigFunction('json_decode', 'json_decode');
$twig->addGlobal("csrf_token", session()->getState()->getCsrfToken());
$twig->addGlobal("isLogged", !!(session()->getState()->getUser()));
$twig->addGlobal("user", (session()->getState()->getUser()));
if(!empty($_POST)) $twig->addGlobal("formdata",$_POST);
$domaine=(empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
$actual_link = "$_SERVER[REQUEST_URI]";
$twig->addGlobal("current_url", "/".trim($actual_link, "/") );
$twig->addFilter($translationFilter);
$twig->addFilter($jsonDecode);
$twig->addFilter($decode);
$twig->addFunction($translationFunction);
$twig->addFunction($jsonDecodeFunc);







class App
{
    private static $appMetadata = [
        "current_route_meta" => null
    ];

    static function getRouteMetadata()
    {
        self::$appMetadata["current_route_meta"] = self::$appMetadata["current_route_meta"] ?? Router::resolve();
        return self::$appMetadata["current_route_meta"];
    }

    static function fixParams()
    {
        $_POST = [
            ...($_POST ?? []),
            ...(json_decode(file_get_contents("php://input"), true) ?? [])
        ];
    }
    public static function start()
    {
        //Start Session
        session();
        //Init database
        DB::init();
        //fix
        self::fixParams();
        $routeMetadata = self::getRouteMetadata();
        $params = [];
        if ($routeMetadata) {
            //Check authentication
            if (!empty($routeMetadata["__router_config"]["__authentication"])) {
                $obj=$routeMetadata["__router_config"]["__authentication"];
                
                if (!$obj->authorize(session()->getState()->getUser())) {
                    http_response_code(403);
                    header("Content-Type: text/html");
                    die("No access");
                }
            }

            foreach ($routeMetadata["__router_config"]["__controller"]["__construct"]["__params"] ?? [] as $param) {
                self::hanldeParam($param, $routeMetadata, $params);
            }
            $reflection = new \ReflectionClass($routeMetadata["__router_config"]["__controller"]["__path"]);
            $controllerInstance = $reflection->newInstance(...$params);

            foreach ($routeMetadata["__router_config"]["__params"] as $param) {
                self::hanldeParam($param, $routeMetadata, $params);
            }

            $result = call_user_func_array([$controllerInstance, $routeMetadata["__router_config"]["__method"]], $params);
            if (isset($result["__response_status"])) {
                Response::setHttpResponseCode($result["__response_status"]);
            }
            if (isset($result["__twig_template"])) {
                (new Response())->renderHTMLContent($result["__twig_template"]);
            } else if ($result) {
                (new Response())->renderJSON($result);
            } else {
                http_response_code(200);
                header("Content-Type: text/html");
                die("No Response provided");
            }
        }
        http_response_code(200);
        header("Content-Type: text/html");
        die("No route defined");
    }

    static function hanldeParam($param, $routeMetadata, &$params){
        if (isset($param["__inject_class"]) ) {
            $params[] = $param["__inject_class"]->getValue($routeMetadata);
        }
        if (isset($param["__param"]) ) {
            $params[] = $param["__param"]->getValue($routeMetadata);
        }
    }
}

abstract class Controller
{
    public function render(string $path, array $args = [], $status = 200)
    {
        global $twig, $env;
        $pageData=$twig->load($path)->render([
            ...$args,
            "lang"=>Translation::getLanguage(),
            "flash"=>session()->getState()->getFlash()
        ]);
        return [
            "__twig_template" => Translation::translateHtml($pageData),
            "__response_status" => $status
        ];
    }

    public function uploadFileTo($name, $filesData, &$errors, $acceptedTypes=["image/jpeg", "image/jpg", "image/png"], $destinationDir="/uploads", $maxSizeMb=2){
       
        $filesData[$name]=empty($filesData[$name]) ? []:$filesData[$name];
        if($filesData["size"]<= ($maxSizeMb * 1024 * 1024)){
            if(in_array($filesData["type"], $acceptedTypes)){
                $basepath=dirname(__DIR__).DIRECTORY_SEPARATOR."public".DIRECTORY_SEPARATOR.$destinationDir;
                $extension=strtolower(pathinfo($filesData["name"],PATHINFO_EXTENSION));
                $destinationDir=preg_replace(["/(\/)+/", "/[\\\]+/"], "/",preg_replace(["/(\/)+/", "/[\\\]+/"], "/", $basepath));
                $filename=time().".".$extension;
                $fullname=$destinationDir."/".$filename;
                if(!move_uploaded_file($filesData["tmp_name"], $fullname)){
                    $errors[$name]=empty($errors[$name]) ? []:$errors[$name];
                    $errors[$name][]=t("Téléversement de fichier a échoué");
                    return false;
                }else{
                    return $filename;
                }
            }else{
                $errors[$name]=empty($errors[$name]) ? []:$errors[$name];
                $errors[$name][]=t("Les type de fichiers acceptés sont ".implode(",", $acceptedTypes).'.') ;
            }
        }else{
            $errors[$name]=empty($errors[$name]) ? []:$errors[$name];
            $errors[$name][]=t("L'image ne peut pas dépasser ".$maxSizeMb."Mb") ;
        }
        return false;
    }
}
