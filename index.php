<?php
require_once("ModuleInitializer.php");
require_once("Router.php");


$module = isset($_GET["module"]) ? $_GET["module"] : "login";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$moduleInitializer = new ModuleInitializer();
Router::executeActionFromController($moduleInitializer, $module, $action);