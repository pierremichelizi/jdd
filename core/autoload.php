<?php

spl_autoload_register(function ($class) {
     
    $path = explode("\\", $class);
    $path[1]=$path[0]==="App"&&$path[1]==="App" && count($path)==2 ? "app":$path[1];
    $basePath =  dirname(__DIR__). DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, ["src", ...array_slice($path, 1)]).".php"; 
    if ($path[0] === "App" && file_exists($basePath)) {
        require_once($basePath);
    }
});
