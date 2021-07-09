<?php


class ProformaController
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
        echo $this->renderer->render("view/proforma.php");
    }

    public function validarProforma(){
        $proforma = array();
        if(isset($_POST["numero"], $_POST["fecha"])){
            $numero = $_POST["numero"];
            $fecha = $_POST["fecha"];
            $this->model->guardarProforma($numero, $fecha);
        if(isset($_POST["denominacion"], $_POST["cuit"], $_POST["telefono"], $_POST["email"], $_POST["contacto1"], $_POST["contacto2"])){
            $denominacion = $_POST["denominacion"];
            $cuit = $_POST["cuit"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $contacto1 = $_POST["contacto1"];
            $contacto2 = $_POST["contacto2"];
            $this->model->guardarCliente($denominacion, $cuit, $telefono, $email, $contacto1, $contacto2);
        }

        if(isset($_POST["origen"], $_POST["destino"], $_POST["fechaCarga"], $_POST["eta"])){
            $origen = $_POST["origen"];
            $destino = $_POST["destino"];
            $fechaCarga = $_POST["fechaCarga"];
            $eta = $_POST["eta"];
            $this->model->guardarViaje($origen, $destino, $fechaCarga, $eta);
        }
        echo $this->renderer->render("view/login.php", $proforma);
    }
}