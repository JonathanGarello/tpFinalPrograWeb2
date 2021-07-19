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
        $email = "";
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["username"])
            && isset($_POST["email"]) && isset($_POST["contra"]) && isset($_POST["confirmaPassword"]) ) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["contra"];
            $confirmaPassword = $_POST["confirmaPassword"];
            $codigo = md5(rand(0,1000));
            $validar = "no";
            if($password == $confirmaPassword){
                $data = $this->model->obtenerUsuariosPorUsername($username);
                if ($data == null) {
                    $this->model->registrarUsuario($nombre, $apellido, $username, $password, $codigo, $email, $validar);
                    $data = $this->model->obtenerUsuariosPorUsername($username);
                    if ($data != null) {
                        $this->enviarEmail($email, $codigo, $nombre);
                        $datos["exito"] = $nombre;
                        echo $this->renderer->render("view/registro-exitoso.php", $datos);
                    }else{
                        $datos["datos"] = "El usuario no se pudo registrar";
                        echo $this->renderer->render("view/registro.php", $datos);
                    }
                } else {
                    $datos["datos"] = "User name existente en otro usuario";
                    echo $this->renderer->render("view/registro.php", $datos);
                }
            } else {
                $datos["datos"] = "Las claves no coinciden";
                echo $this->renderer->render("view/registro.php", $datos);
            }
        }
    }

    private function enviarEmail($email, $codigo,$nombre)
    {
        $to = $email;
        $url = '<a href="localhost/login/validarCuenta/codigo='. $codigo . '">enlace</a>';
        $subject = 'Validacion de email';
        $message = $nombre . ' gracias por registrarte!'
                   . 'Su cuenta ha sido creada, para activarla haga clic en este ' . $url . '.';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        mail($to, $subject, $message, $headers);
    }
}