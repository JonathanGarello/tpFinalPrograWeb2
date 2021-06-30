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
           $data["usuarios"] = $this->model->obtenerUsuarios();
            echo $this->renderer->render("view/login.php",$data);
        }

        public function login()
        {

            $username = isset( $_POST["Name"]);
            $password= isset( $_POST["Password"]);
            $rol="";
            $data["error"] = "Password o UserName Incorrectos";
            $usuarios = $this->model->logIn($username,$password);
            $usuariosCompleto = $this->model->obtenerUsuarios();
            foreach ($usuariosCompleto as $value){
                if($value["username"]=="admin") {
                    $rol = $value["rol"];
                }
            }
            $count = count($usuariosCompleto);
            if($count > 0){
                session_start();
                echo $this->renderer->render("view/principal.php",$data);
            }else{
                echo $this->renderer->render("view/login.php",$data);
            }


        }

        function logout()
        {
            session_destroy();
            echo $this->renderer->render("view/login.php");

        }

        function register(){
            $nombre = isset( $_POST["Nombre"]);
            $apellido= isset( $_POST["Apellido"]);
            $username = isset( $_POST["name"]);
            $password= isset( $_POST["password"]);
            $repassword= isset( $_POST["ConfirmaPassword"]);

            if($password == $repassword){
                $this->model->register($nombre);
                $resultado["resultado"]= "usuario registrado ".$username;
                echo $this->renderer->render("view/login.php",$resultado);
            }else{
                $resultado["resultado"]="password diferentes";
                echo $this->renderer->render("view/login.php",$resultado);
            }
        }
    }