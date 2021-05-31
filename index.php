<?php
include 'config/config.php';
include 'app/core/Database.php';
include 'app/models/BaseModel.php';
include 'app/controllers/BaseController.php';


$controllerName = ucfirst(( strtolower($_REQUEST['controller']) ?? '') .'Controller');

$actionName     = strtolower($_REQUEST['action'] ?? 'index');

require "app/controllers/${controllerName}.php";

$controllerObj = new $controllerName;
$controllerObj->$actionName();