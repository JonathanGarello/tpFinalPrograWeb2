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
            $data= array();
            if (isset($_POST["loginNombre"])) {
                $data = $this->model->obtenerRolDelUsuario($_POST["loginNombre"]);
            }
            $login = $this->model->validarLogin($username, $password);
            if ($login != null) {
                if ($data["rol"] == 'admin') {
                    session_start();
                    $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosConRolNull();
                    echo $this->renderer->render("view/principal.php", $usuariosSinRol);
                }

                if ($data["rol"] == 'chofer') {

                }

                if ($data["rol"] == 'supervisor') {

                }

                if ($data["rol"] == 'encargado') {

                }
                if ($data["rol"] == 'null') {
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
    }