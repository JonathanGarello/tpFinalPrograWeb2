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

        public function validarCuenta(){
            $codigo = $_GET["codigo"];
            $datos = $this->model->ObteberUserNamePorCodigo($codigo);

            if($datos != null){
                $validar = "si";
                $this->model->actualizarValidarPorCodigo($codigo, $validar);
                $datos ["username"] = $datos;
                echo $this->renderer->render("view/email.php", $datos);
            }
            else{
                $datos["error"] = "Código invalido";
                echo $this->renderer->render("view/email.php", $datos);
            }
        }

        public function procesarLogin()
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
            $data1= array();
            if (isset($_POST["loginNombre"])) {
                $data = $this->model->obtenerRolDelUsuario($_POST["loginNombre"]);
            }
            $login = $this->model->validarLogin($username, $password);
            if ($login != null) {
                $data1 = $this->model->obtenerValidarPorUsername($username);
                if($data1["validar"] == "si"){
                    if ($data["rol"] == 'admin') {
                        session_start();
                        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosConRolNull();
                        echo $this->renderer->render("view/admin.php", $usuariosSinRol);
                    }

                    if ($data["rol"] == 'chofer') {
                        $idChofer = $this->model->obtenerIdDelUsuario($_POST["loginNombre"]);
                        $datas["activos"] = $this->model->obtenerViajePorIdDeChofer($idChofer["id"]);
                        echo $this->renderer->render("view/chofer.php",$datas);
                    }

                    if ($data["rol"] == 'supervisor') {
                        session_start();
                        echo $this->renderer->render("view/supervisor.php");
                    }

                    if ($data["rol"] == 'encargado') {

                    }
                    if ($data["rol"] == 'null') {
                        $Datos["error2"] = "Usuario Sin Rol";
                        echo $this->renderer->render("view/login.php", $Datos);
                    }
                }
                else {
                    $Datos["error"] = "Cuenta no validada";
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
            Header("Location:../");
        }
    }