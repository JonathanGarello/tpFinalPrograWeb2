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

    public function validarProforma()
    {
        $proforma = array();
        if (isset($_POST["numero"], $_POST["fecha"])) {

            $numero = $_POST["numero"];
            $fecha = $_POST["fecha"];

            $this->model->guardarProforma($numero, $fecha);
        }
        if (isset($_POST["denominacion"], $_POST["cuit"], $_POST["telefono"], $_POST["email"]
            , $_POST["contacto1"], $_POST["contacto2"])) {

            $denominacion = $_POST["denominacion"];
            $cuit = $_POST["cuit"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $contacto1 = $_POST["contacto1"];
            $contacto2 = $_POST["contacto2"];

            $this->model->guardarCliente($denominacion, $cuit, $telefono, $email, $contacto1, $contacto2);
        }

        if (isset($_POST["origen"], $_POST["destino"], $_POST["fechaCarga"], $_POST["eta"])) {

            $origen = $_POST["origen"];
            $destino = $_POST["destino"];
            $fechaCarga = $_POST["fechaCarga"];
            $eta = $_POST["eta"];

            $this->model->guardarViaje($origen, $destino, $fechaCarga, $eta);
        }

        if (isset($_POST["tipo"], $_POST["pesoNeto"], $_POST["hazard"], $_POST["reefer"], $_POST["imoClass"]
            , $_POST["temperatura"], $_POST["imoSclass"])) {

            $tipo = $_POST["tipo"];
            $pesoNeto = $_POST["pesoNeto"];
            $hazard = $_POST["hazard"];
            $reefer = $_POST["reefer"];
            $imoClass = $_POST["imoClass"];
            $temperatura = $_POST["temperatura"];
            $imoSclass = $_POST["imoSclass"];

            $this->model->guardarCarga($tipo, $pesoNeto, $hazard, $reefer, $imoClass, $temperatura, $imoSclass);
        }

        if (isset($_POST["realKm"], $_POST["estimadoKm"], $_POST["realCombustible"], $_POST["estimadoCombustible"]
            , $_POST["realEtd"], $_POST["estimadoEtd"], $_POST["realEta"], $_POST["estimadoEta"], $_POST["realViaticos"]
            , $_POST["estimadoViaticos"], $_POST["realPeajes"], $_POST["estimadoPeajes"], $_POST["realExtras"]
            , $_POST["estimadoExtras"], $_POST["realHazard"], $_POST["estimadoHazard"], $_POST["realReefer"], $_POST["estimadoReefeer"]
            , $_POST["realFree"], $_POST["estimadoFree"], $_POST["realTotal"], $_POST["estimadototal"])) {

            $realKm = $_POST["realKm"];
            $estimadoKm = $_POST["estimadoKm"];
            $realCombustible = $_POST["realCombustible"];
            $estimadoCombustible = $_POST["estimadoCombustible"];
            $realEtd = $_POST["realEtd"];
            $estimadoEtd = $_POST["estimadoEtd"];
            $realEta = $_POST["realEta"];
            $estimadoEta = $_POST["estimadoEta"];
            $realViaticos = $_POST["realViaticos"];
            $estimadoViaticos = $_POST["estimadoViaticos"];
            $realPeajes = $_POST["realPeajes"];
            $estimadoPeajes = $_POST["estimadoPeajes"];
            $realExtras = $_POST["realExtras"];
            $estimadoExtras = $_POST["estimadoExtras"];
            $realHazard = $_POST["realHazard"];
            $estimadoHazard = $_POST["estimadoHazard"];
            $realReefer = $_POST["realReefer"];
            $estimadoReefeer = $_POST["estimadoReefeer"];
            $realFree = $_POST["realFree"];
            $estimadoFree = $_POST["estimadoFree"];
            $realTotal = $_POST["realTotal"];
            $estimadototal = $_POST["estimadototal"];

            $this->model->guardarCosteo($realKm, $estimadoKm, $realCombustible, $estimadoCombustible, $realEtd, $estimadoEtd, $realEta, $estimadoEta,
                $realViaticos, $estimadoViaticos, $realPeajes, $estimadoPeajes, $realExtras, $estimadoExtras, $realHazard, $estimadoHazard,
                $realReefer, $estimadoReefeer, $realFree, $estimadoFree, $realTotal, $estimadototal);
        }

        if (isset($_POST["choferAsignado"])) {

            $choferAsignado = $_POST["choferAsignado"];

            $this->model->guardarPersonal($choferAsignado);
        }
        $proforma["exito"] = "La proforma se cargo con exito.";
        echo $this->renderer->render("view/proforma.php", $proforma);
    }
}