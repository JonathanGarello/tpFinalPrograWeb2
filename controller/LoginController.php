<?php
    class LoginController
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
            echo $this->renderer->render("view/login.php");
        }

        public function login()
        {
            $username = "";
            $password = "";
            if (isset($_POST["loginNombre"])) {
                if (isset($_POST["loginPassword"])) {
                    $username = $_POST["loginNombre"];
                    $password = $_POST["loginPassword"];
                }
            }
            $data = $this->model->obtenerRolDelUsuario($_POST["loginNombre"]);
            $Datos["usuario"] = $_POST["loginNombre"];
            $login = $this->model->validarLogin($username, $password);
            if ($login != null) {
                if ($data["rol"] == 'admin') {
                    session_start();
                    echo $this->renderer->render("view/principal.php", $Datos);
                }

                if ($data["rol"] == 'chofer') {

                }

                if ($data["rol"] == 'supervisor') {

                }

                if ($data["rol"] == 'encargado') {

                }
                if ($data["rol"] == null) {
                    $Datos["error2"] = "Usuario Sin Rol";
                    echo $this->renderer->render("view/login.php", $Datos);
                }
            } else {
                $Datos["error"] = "Usuario Inexistente";
                echo $this->renderer->render("view/login.php", $Datos);
            }

        }

        public function logout()
        {
            session_destroy();
            Header("Location: ../view/login.php");
        }

        public function validarRegistro()
        {
            $nombre = "";
            $apellido = "";
            $username = "";
            $password = "";
            $confirmaPassword = "";
            if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["username"])) {
                if (isset($_POST["contra"]) && isset($_POST["confirmaPassword"])) {
                    $nombre = $_POST["nombre"];
                    $apellido = $_POST["apellido"];
                    $username = $_POST["username"];
                    $password = $_POST["contra"];
                    $confirmaPassword = $_POST["confirmaPassword"];
                }
            }
            $data = $this->model->obtenerUsuariosPorusername($username);
            if($password == $confirmaPassword && $data == null){
                $model["datos"] =  "Usuario Registrado";
                $ingreso=$this->model->registrarUsuario($nombre, $apellido,$username,$password);
            }else{
                $model["datos"] =  "Falla de Registro";
            }
            echo $this->renderer->render("view/login.php", $model);
        }
    }