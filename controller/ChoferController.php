<?php


class ChoferController
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
    public function cargar(){
        if (isset($_POST["carga"])) {
            if (isset($_POST["lugar"]))
                if (isset($_POST["cantidad"]))
                    if (isset($_POST["importe"]))
                        if (isset($_POST["kilometros"]))
                            if (isset($_POST["varios"])){
                                $carga = $_POST["carga"];
                                $lugar = $_POST["lugar"];
                                $cantidad = $_POST["cantidad"];
                                $importe = $_POST["importe"];
                                $kilometros = $_POST["kilometros"];
                                $varios = $_POST["varios"];
                                $this->model->cargarDatos($carga,$lugar,$cantidad,$importe,$kilometros,$varios);
                                $data["exito"] = "exito al enviar";
                                echo $this->renderer->render("view/chofer.php", $data);
                            }
        }


    }
}