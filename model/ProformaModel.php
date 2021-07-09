<?php


class ProformaModel
{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function guardarProforma($numero, $fecha){
        $this->connexion->queryExecute("INSERT INTO proforma (numero, fecha) VALUES ('$numero', '$fecha')");
    }

    public function guardarCliente($denominacion, $cuit, $telefono, $email, $contacto1, $contacto2){
            $this->connexion->queryExecute("INSERT INTO cliente (denominacion, cuit, telefono, email, contacto1, contacto2) 
                                            VALUES ('$denominacion', '$cuit', '$telefono', '$email', '$contacto1', '$contacto2')");
    }

    public function guardarViaje($origen, $destino, $fechaCarga, $eta){
        $this->connexion->queryExecute("INSERT INTO viaje (origen, destino, fechaCarga, eta) 
                                            VALUES ('$origen', '$destino', '$fechaCarga', '$eta')");
    }

    public function guardarCarga($tipo, $pesoNeto, $hazard, $reefer, $imoClass, $temperatura, $imoSclass){
        $this->connexion->queryExecute("INSERT INTO carga (tipo, pesoNeto, hazard, reefer, imoClass, temperatura, imoSclass) 
                                            VALUES ('$tipo', '$pesoNeto', '$hazard', '$reefer','$imoClass', '$temperatura', '$imoSclass')");
    }

    public function guardarCosteo($realKm, $estimadoKm, $realCombustible, $estimadoCombustible, $realEtd, $estimadoEtd, $realEta, $estimadoEta,
                                  $realViaticos, $estimadoViaticos, $realPeajes, $estimadoPeajes, $realExtras, $estimadoExtras, $realHazard, $estimadoHazard,
                                  $realReefer, $estimadoReefeer, $realFree, $estimadoFree, $realTotal, $estimadototal){
        $this->connexion->queryExecute("INSERT INTO costeo (realKm, estimadoKm, realCombustible, estimadoCombustible, realEtd, estimadoEtd,
                                        realEta, estimadoEta, realViaticos, estimadoViaticos, realPeajes, estimadoPeajes, realExtras, estimadoExtras,
                                        realHazard, estimadoHazard, realReefer, estimadoReefeer, realFree, estimadoFree, realTotal, estimadototal) 
                                            VALUES ('$realKm', '$estimadoKm', '$realCombustible', '$estimadoCombustible', '$realEtd', '$estimadoEtd', '$realEta', '$estimadoEta',
                                            '$realViaticos', '$estimadoViaticos', '$realPeajes', '$estimadoPeajes', '$realExtras', '$estimadoExtras', '$realHazard', '$estimadoHazard',
                                            '$realReefer', '$estimadoReefeer', '$realFree', '$estimadoFree', '$realTotal', '$estimadototal')");
    }

    public function guardarPersonal($choferAsignado){
        $this->connexion->queryExecute("INSERT INTO personal (choferAsignado) 
                                            VALUES ($choferAsignado)");
    }
}