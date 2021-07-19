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
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["username"])
            && isset($_POST["email"]) && isset($_POST["contra"]) && isset($_POST["confirmaPassword"]) ) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $username = $_POST["username"];
            $password = $_POST["contra"];
            $confirmaPassword = $_POST["confirmaPassword"];
            $enlace = md5(rand(0,1000));
            $email = $_POST["email"];
            if ($password == $confirmaPassword) {
                $data = $this->model->obtenerUsuariosPorUsername($username);
                if ($data == null) {
                    $this->model->registrarUsuario($nombre, $apellido, $username, $password, $enlace, $email);
                    $data = $this->model->obtenerUsuariosPorUsername($username);
                    if ($data != null) {
                        $this->enviarEmail($email, $enlace, $nombre);
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

    public function enviarEmail($email, $enlace,$nombre)
    {
        $to      = $email; // Send email to our user
        $subject = 'Signup | Verification'; // Give the email a subject
        $message = '
 
                Thanks for signing up!
                Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
                 
                ------------------------
                Username: '. $nombre .'
                ------------------------
                 
                Please click this link to activate your account:
                localhost/registrar/validarCuenta?enlace='.$enlace; // Our message above including the link
        mail($to, $subject, $message); // Send our email
    }
}