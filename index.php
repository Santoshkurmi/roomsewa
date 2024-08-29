<?php
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;


error_reporting(1);
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './vendor/autoload.php';

require_once './app/routes/routes.php';



Router::startRouting();