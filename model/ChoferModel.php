<?php
class ChoferModel{
    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function obtenerUsuariosChofer(){
        return $this->connexion->queryRow("SELECT * FROM usuarios WHERE rol='chofer'");
    }
    public function obtenerChoferPorId($id){
        return $this->connexion->queryRow("SELECT * FROM usuarios WHERE $id = '$id' AND rol = 'chofer'");
    }
    public function cargarDatos($carga,$lugar,$cantidad,$importe,$kilometros,$varios){
        $this->connexion->queryExecute("INSERT INTO gastosChofer (carga, lugar, cantidad, importe, kilometros, varios) VALUES ('$carga', '$lugar', '$cantidad', '$importe', '$kilometros','$varios')");
    }

}