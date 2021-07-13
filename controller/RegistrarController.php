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
        if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["username"]) &&
            isset($_POST["contra"]) && isset($_POST["confirmaPassword"]) && isset($_POST["email"])) {
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $username = $_POST["username"];
            $password = $_POST["contra"];
            $confirmaPassword = $_POST["confirmaPassword"];
            $idConfirmacion = generarIdDeConfirmacion(20);
            $email = isset($_POST["apellido"]);
        }else{
            $datos["datos"] =  "Completa todos los campos del registro";
        }
        $data = $this->model->obtenerUsuariosPorUsername($username);
        if($password == $confirmaPassword){
            if($data == null){
                $datos["exito"] =  "Usuario Registrado, ";
                $this->model->registrarUsuario($nombre, $apellido,$username,$password,$idConfirmacion,$email);
                $this->enviarEmail($email, $idConfirmacion);
            }else{
                $datos["datos"] =  "User name existente en otro usuario";
            }
        }else{
            $datos["datos"] =  "Las claves no coinciden";
        }
        echo $this->renderer->render("view/registro.php", $datos);
    }

    public function generarIdDeConfirmacion($longitud)
    {
        $semilla = array();
        $semilla[] = array(‘a’, ’e’, ’i’, ’o’, ’u’);
        $semilla[] = array(‘b’, ’c’, ’d’, ’f’, ’g’, ’h’, ’j’, ’k’, ’l’, ’m’, ’n’, ’p’, ’q’, ’r’, ’s’, ’t’, ’v’, ’w’, ’x’, ’y’, ’z’);
        $semilla[] = array(‘0′, ’1′, ’2′, ’3′, ’4′, ’5′, ’6′, ’7′, ’8′, ’9’);
        $semilla[] = array(‘A’, ’E’, ’I’, ’O’, ’U’);
        $semilla[] = array(‘B’, ’C’, ’D’, ’F’, ’G’, ’H’, ’J’, ’K’, ’L’, ’M’, ’N’, ’P’, ’Q’, ’R’, ’S’, ’T’, ’V’, ’W’, ’X’, ’Y’, ’Z’);
        $semilla[] = array(‘0′, ’1′, ’2′, ’3′, ’4′, ’5′, ’6′, ’7′, ’8′, ’9’);

        for ($bucle=0; $bucle < $longitud; $bucle++)
        {
            $valor = mt_rand(0, count($semilla)-1);
            $posicion = mt_rand(0,count($semilla[$valor])-1);
            $clave .= $semilla[$valor][$posicion];
        }
        return $clave;
    }

    public function enviarEmail($email,$idConfirmacion){

        $message = "Válida tu email haciendo click <a href='login/activarCuenta/id={{id}}'>aquí</a>" ;

        mail($email, 'Validación', $message);

    }
}