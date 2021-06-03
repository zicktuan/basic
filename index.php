<?php
include 'config/config.php';
include 'app/core/Database.php';
include 'app/models/BaseModel.php';
include 'app/controllers/BaseController.php';

$controllerUrl = $_REQUEST['controller'];
$parseController = explode( '-', $controllerUrl );

$controllerName = ucfirst(( strtolower( $parseController[1] ) ?? '') .'Controller');

$actionName     = strtolower($_REQUEST['action'] ?? 'index');

if ( $parseController[0] == 'admin' ) {
    require "app/controllers/Backend/${controllerName}.php";
} else {
    require "app/controllers/${controllerName}.php";
}

$controllerObj = new $controllerName;
$controllerObj->$actionName();