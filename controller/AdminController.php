<?php

class AdminController
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
        echo $this->renderer->render("view/admin.php", $data);
    }
    public function verRoles(){
        $id = $_GET["id"];
        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosPorId($id);
        echo $this->renderer->render("view/rol.php", $usuariosSinRol);
    }
    public function darRol(){
        $id = $_POST["id"];
        $rol =  $_POST["language"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $username = $_POST["username"];
        $password = $_POST["contra"];
        $darRoles = $this->model->darRol($id,$nombre,$apellido,$username,$password,$rol);
        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosConRolNull();
        echo $this->renderer->render("view/admin.php",$usuariosSinRol);
    }

    public function viajes(){
        $usuariosSinRol["usuarios"] = $this->model->obtenerUsuariosConRolChofer();
        echo $this->renderer->render("view/viaje.php",$usuariosSinRol);
    }

    public function proforma(){
        $prof["prof"] = $this->model->obtenerViajes();
        echo $this->renderer->render("view/listaProforma.php", $prof);
    }
    public function asignarViaje(){
        $id["id"] = $_GET["id"];

        echo $this->renderer->render("view/cargarDatosViaje.php",$id);

    }

    public function crearViajes(){
        $id = $_POST["id"];
        $ori = $_POST["origen"];
        $des =  $_POST["destino"];
        $this->model->CrearViaje($ori,$des,$id);

        echo $this->renderer->render("view/admin.php");
    }

    public function cargas(){
        $id = $_GET["id"];
        $data["viaje"] = $this->model->obtenerViajePorId($id);
        echo $this->renderer->render("view/proforma.php",$data);
    }

    public function cargarDatos(){
        $id["id"] = $_GET["id"];
        echo $this->renderer->render("view/choferViaje.php",$id);
    }

    public function carga(){
        $id = $_POST["id"];
        $lat = $_POST["lat"];
        $lng = $_POST["lon"];
        $realCombustible = $_POST["carga"];
        $lugar = $_POST["lugar"];
        $realPeajes = $_POST["cantidad"];
        $realTotal = $_POST["importe"];
        $realKm = $_POST["kilometros"];
        $realViaticos = $_POST["varios"];

        if($this->model->CargarCostos($realCombustible,$realPeajes, $realTotal,$realKm,$realViaticos,$id)){
            echo $this->renderer->render("view/chofer.php");
        }
       echo $this->renderer->render("view/chofer.php");

    }

}