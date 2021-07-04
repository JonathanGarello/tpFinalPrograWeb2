<?php
require_once("helper/Renderer.php");
include_once("helper/Database.php");
include_once("helper/Config.php");
require_once('third-party/mustache/src/Mustache/Autoloader.php');


class ModuleInitializer
{
    private $renderer;
    private $config;
    private $database;

    public function __construct()
    {
        $this->renderer = new Renderer('view/partial');
        $this->config = new Config("config/config.ini");
        $this->database = Database::createDatabaseFromConfig($this->config);
    }

    public function createLoginController()
    {
        
        include_once("controller/LoginController.php");
        include_once("model/UsuariosModel.php");
        $model = new UsuariosModel($this->database);
        return new LoginController($this->renderer,$model);
    }

    public function createRegistrarController()
    {

        include_once("controller/RegistrarController.php");
        include_once("model/UsuariosModel.php");
        $model = new UsuariosModel($this->database);
        return new RegistrarController($this->renderer,$model);
    }

    public function createPrincipalController()
    {

        include_once("controller/PrincipalController.php");
        include_once("model/UsuariosModel.php");
        $model = new UsuariosModel($this->database);
        return new PrincipalController($this->renderer,$model);
    }

    public function createDefaultController()
    {
        return $this->createLoginController();
    }

}