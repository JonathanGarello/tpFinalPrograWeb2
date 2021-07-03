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
            $data = $this->model->obtenerRolDelUsuario('admin');
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

        function logout()
        {
            session_destroy();
            Header("Location: ../view/login.php");
        }

    }