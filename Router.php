<?php

class Router{
    public function executeActionFromController($moduleInitializer, $module, $action){
        $controller = $this->createControllerFrom($moduleInitializer, $module);
        $this->executeActionFrom($controller, $action);
    }

    private function createControllerFrom($moduleInitializer,$module){
        $controllerName = $this->createControllerNameFromModule($module);
        $validController = method_exists($moduleInitializer, $controllerName) ? $controllerName : "createDefaultController";
        $controller = call_user_func(array($moduleInitializer, $validController));
        return $controller;
    }

    private function createControllerNameFromModule($module){
        return "create" . ucfirst($module) . "Controller";
    }

    private function executeActionFrom($controller, $action){
        $validAction = method_exists($controller, $action) ? $action : "index";
        call_user_func(array($controller, $validAction));
    }
}