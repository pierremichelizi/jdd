<?php
require_once("../core/base.php");


define("BASE_PATH", dirname(__DIR__));
define("DOMAINE", (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]");
define("BASE_PUBLIC_DIR", sanitizeFilename(BASE_PATH."/public"));

Core\App::start();