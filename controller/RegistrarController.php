<?php


class RegistrarController
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
        echo $this->renderer->render("view/registro.php");
    }

    public function validarRegistro()
    {
        $nombre = "";
        $apellido = "";
        $username = "";
        $password = "";
        $confirmaPassword = "";
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["username"]) &&
            isset($_POST["contra"]) && isset($_POST["confirmaPassword"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $username = $_POST["username"];
            $password = $_POST["contra"];
            $confirmaPassword = $_POST["confirmaPassword"];
        }else{
            $datos["datos"] =  "Completa todos los campos del registro";
        }
        $data = $this->model->obtenerUsuariosPorUsername($username);
        if($password == $confirmaPassword){
            if($data == null){
                $datos["exito"] =  "Usuario Registrado, ";
                $this->model->registrarUsuario($nombre, $apellido,$username,$password);
            }else{
                $datos["datos"] =  "User name existente en otro usuario";
            }
        }else{
            $datos["datos"] =  "Las claves no coinciden";
        }
        echo $this->renderer->render("view/registro.php", $datos);
    }
}