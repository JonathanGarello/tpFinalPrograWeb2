<?php

class PrincipalController
{
    private $renderer;
    private $model;

    public function __construct($renderer, $model)
    {
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index()
    {
        $data["usuarios"] = $this->model->obtenerUsuarios();
        echo $this->renderer->render("view/principal.php", $data);
    }
    public function verRoles(){
        $id = $_GET["id"];
        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosPorId($id);
        echo $this->renderer->render("view/rol.php", $usuariosSinRol);
    }
    public function darRol(){
        $id = $_POST["id"];
        $rol =  $_POST["language"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $username = $_POST["username"];
        $password = $_POST["contra"];
        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosConRolNull();
        $darRoles = $this->model->darRol($id,$nombre,$apellido,$username,$password,$rol);
        echo $this->renderer->render("view/principal.php",$usuariosSinRol);
    }
}