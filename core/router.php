<?php

namespace Core;

require_once("decorators.php");

class Router
{
    static private $path;
    static private $method;
    static private $routesMetadata;


    static function navigate()
    {
    }

    static function redirect($to,$flash=[],  $permanent = true)
    {
        session()->getState()->setFlash([...$flash, "target"=>$to]);
        header('Location: ' . $to, true, $permanent ? 301 : 302);
        exit();
    }

    static function resolve()
    {
        self::resolvePath();
        self::$routesMetadata = self::$routesMetadata ??  self::getRoutesScheme();
        return self::resolveUrlRoute(self::$routesMetadata);
    }

    private static function resolvePath()
    {
        self::$path = self::$path ?? $_SERVER["REQUEST_URI"];
        self::$method = $_SERVER["REQUEST_METHOD"];
    }

    static private function resolveUrlRoute(array $routerSchema)
    {

        $userRoute = self::$path;

        $userRoutePath = trim(explode("?", $userRoute)[0], "/");

        foreach ($routerSchema as $controllerRoute => $routeData) {
            $routeArr = explode("<>", $controllerRoute);
            if (!in_array(self::$method, explode(",", $routeArr[1]))) continue;
            $route = $routeArr[0];
            $data = explode("{", trim($route, "/"));
            $regexRoute = "";
            $params = [];
            $parameters = [];
            foreach ($data as $d) {
                $subpath = $d;
                if (($pos = strpos($d, "}")) !== false) {
                    $pathFinded = substr($d, 0, $pos);
                    $optional = is_integer(strpos($pathFinded, "?"));
                    $pathFinded = str_replace("?", "", $pathFinded);
                    $params[] =  str_replace("?", "", substr($pathFinded, 0, $pos));

                    $subpath = ($optional ? "((/([%a-zA-Z\-\_\s0-9\@\.\#]+))?)" : "([%a-zA-Z\-\_\s0-9\@\.\#]+)") . substr($subpath, $pos + 1);
                    if ($optional && $regexRoute[strlen($regexRoute) - 1] === "/") {
                        $regexRoute = substr($regexRoute, 0, strlen($regexRoute) - 1);
                    }
                    $regexRoute .= $subpath;
                } else {
                    $regexRoute .= $d;
                }
            }
            $regexRoute = preg_replace("/(\/)+/", "\/", $regexRoute);

            $matches = [];
            if (!preg_match("/^" . $regexRoute . "$/i", trim($userRoutePath, "/"), $matches)) {
                continue;
            }
            foreach ($params as $key => $p) {
                $parameters[$p] = trim($matches[$key + 1], "/");
            }
            return [
                "url" => $userRoute,
                "route" => $userRoutePath,
                "matching_route" => $route,
                "params" => $parameters,
                "__router_config" => $routeData
            ];
        }
    }


    private static function getRoutesScheme()
    {


        $namespacedPath = "App\\Controllers\\";
        $routeConfigs = [];


        $files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(dirname(__DIR__) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "Controllers", \RecursiveDirectoryIterator::SKIP_DOTS));
        foreach ($files as $file) {
            if (!in_array($file->getFilename(), [".", ".."]) && strpos($file->getFilename(), "Controller") != false) {
                $routeConfig = self::getRouteScheme("App\\" . str_replace(["/", "\\"], "\\", substr($file->getPath(), strpos($file->getPath(), "Controllers"))) . "\\" . str_replace(".php", "", $file->getFilename()));
                $routeConfigs = [
                    ...$routeConfigs,
                    ...$routeConfig
                ];
            }
        }
        return $routeConfigs;
    }

    private static function getRouteScheme(string $path)
    {
        $reflector = new \ReflectionClass($path);
        $attributes = $reflector->getAttributes();
        $methods = $reflector->getMethods(\ReflectionMethod::IS_PUBLIC);
        $configs = [];
        $construct = [];
        
        foreach ($attributes as $a) {
            $exectAfterRoutes=[];
            $instance = $a->newInstance();
            foreach ($methods as $routeMethods) {
                $methodAttributes = $routeMethods->getAttributes();
                $routesKeys = [];
                $methodName = $routeMethods->getName();
                if ((\count($methodAttributes) && substr($methodName, 0, 2) !== "__") || $methodName === "__construct") {
                    $params = [];
                    $parameters = $routeMethods->getParameters();
                    foreach ($parameters as $param) {
                        $paramAttributes = $param->getAttributes();
                        $params["{$param->getName()}"] = [
                            "__inject_class" => null,
                            "__http_param" => null,
                            "__type" => $param->getType()?->getName()
                        ];
                        foreach ($paramAttributes as $attribute) {
                            $newInstance = $attribute->newInstance();
                            $classUsed = $attribute->getName();

                            if ($classUsed == Inject::class) {
                                $params["{$param->getName()}"]['__inject_class'] = $newInstance;
                            } else if ($classUsed == Param::class) {
                                $paramName=($newInstance->getName()) ? $newInstance->getName() : $param->getName();
                                $newInstance->setName($paramName);
                                $params["{$param->getName()}"]['__param'] = $newInstance;
                            } else {
                            }
                        }
                    }
                    if ($methodName === "__construct") {
                        $construct = [
                            "__params" => $params
                        ];
                    }
                }
                $authorizedRoles = [];
                $authorizations=[];
                if ($instance instanceof Route) {
                    $basepath = trim($instance->getPath(), "/");
                    
                    foreach ($methodAttributes as $methodAttr) {
                        $methodAttrInstance = $methodAttr->newInstance();
                        $classAllowedMethods = $instance->getAllowedMethods();
                        if ($methodAttrInstance instanceof Route) {
                            $basepath = trim($basepath . "/" . trim($methodAttrInstance->getPath(), "/"), "/");
                            $funcAllowedMethods = $methodAttr->getName() !== Route::class || (\count($methodAttr->getArguments()) == 2) ? $methodAttrInstance->getAllowedMethods() : $classAllowedMethods;
                            $acceptedMethods = array_filter($funcAllowedMethods, function ($value) use ($classAllowedMethods, $path, $routeMethods) {
                                $inarray = in_array($value, $classAllowedMethods);
                                if (!$inarray) trigger_error($value . " method is not supported on " . $path . ":{$routeMethods->getName()}. Supported Methods are " . implode(",", $classAllowedMethods));
                                return $inarray;
                            });
                            $routepath =  $basepath . "<>" . implode(",", $acceptedMethods);
                            $routesKeys[] = $routepath;
                            $configs[$routepath] = [
                                "__controller" => [
                                    "__path" => $path,
                                    "__construct" => $construct
                                ],
                                "__method" => $routeMethods->getName(),
                                "__http_methods" => $acceptedMethods,
                                "__params" => $params,
                                "__authentication" => false
                            ];
                        } else if ($methodAttrInstance instanceof Auth  || $methodAttrInstance instanceof NoAuth) {
                            $authorizations = $methodAttrInstance;
                        }
                    }
                    if (!empty($authorizations) && !empty($routesKeys)) {
                        foreach ($routesKeys as $route) {
                            if (isset($configs[$route])) {
                                $configs[$route]["__authentication"] = $authorizations;
                            }
                        }
                    }
                }
            }

            if($instance instanceof Authorization){
                $exectAfterRoutes[]=$instance;
            }

            foreach($exectAfterRoutes as $v){
                if($v instanceof Authorization){
                    foreach ($configs as $route=>$data) {
                        $configs[$route]["__authentication"] = empty($configs[$route]["__authentication"]) ? $v : $configs[$route]["__authentication"];
                    }
                }
            }
            
        }

        return $configs;
    }
}






class Response
{
    private static $HTTP_RESPONSE_CODE = null;
    static function setHttpResponseCode(int $code)
    {
        self::$HTTP_RESPONSE_CODE = $code;
    }
    function __construct(private string|null $path = null, private $params = [])
    {
        if ($path) {
            $this->path = str_replace(".php", "", $this->path);
            $this->render();
        }
    }



    function render()
    {

        ob_start();
        $params = $this->params;
        require(dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates" . DIRECTORY_SEPARATOR . $this->path . ".php");
        $viewContent = ob_get_clean();
        \Translation::init($this->path);
        $this->renderHTMLContent($viewContent);
    }

    function renderJSON($json)
    {
        http_response_code(self::$HTTP_RESPONSE_CODE ?? 200);
        header("Content-Type:application/json;charset=utf-8");
        die(json_encode($json));
    }


    function renderHTMLContent(string $viewContent)
    {
        http_response_code(self::$HTTP_RESPONSE_CODE ?? 200);
        header("Content-Type:text/html;charset=utf-8");
        echo $viewContent;
        die();
    }
}
