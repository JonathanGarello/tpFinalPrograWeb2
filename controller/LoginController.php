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
            $username = $_POST["Name"];
            $password = $_POST["Password"];
            $data = $this->model->obtenerRolDelUsuario($username);
            $Datos["error"] ="Usuario Inexistente";
            $Datos["usuario"] =$username;
            $login = $this->model->validarLogin($username , $password);
            if($login!=null) {
                if ($data["rol"] == 'admin') {
                    session_start();
                    echo $this->renderer->render("view/principal.php",$Datos);
                }

                if ($data["rol"] == 'chofer') {

                }

                if ($data["rol"] == 'supervisor') {

                }

                if ($data["rol"] == 'encargado') {

                }
            }else{
                echo $this->renderer->render("view/login.php",$Datos);
            }

        }

        public function logout()
        {
            session_destroy();
            Header("Location: ../view/login.php");
        }

        public function validarRegistro(){
            $nombre = $_POST['nombre'];
            $apellido  = $_POST['apellido'];
            $username = $_POST['username'];
            $password  = $_POST['contra'];
            $confirmaPassword  = $_POST['confirmaPassword'];
            if($password == $confirmaPassword){
                $data = $this->model->obtenerUsuariosPorusername($username);
                if($data == null){
                    $this->model->registrarUsuario("a", "s", "ame","hola");
                    $model['mensaje'] = $nombre . $apellido.$username.$password;
                    echo $this->renderer->render( "view/login.php", $model);
                }else {
                    $model['error2'] = "Usuario existente";
                }
            }else {
                $model['error2'] = "Las claves no coinciden";
                echo $this->renderer->render("view/login.php", $model);
            }
        }

    }