<?php

class UsuariosModel{

    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function obtenerUsuarios(){
        return $this->connexion->queryRow("SELECT * FROM usuarios");
    }
    public function obtenerViajes(){
        return $this->connexion->queryTable("SELECT * FROM viaje");
    }
    public function obtenerViajePorIdDeChofer($id){
        return $this->connexion->queryTable("SELECT * FROM viaje WHERE idchofer=$id");
    }
    public function obtenerUsuariosPorId($id){
        return $this->connexion->queryRow("SELECT * FROM usuarios WHERE id=$id");
    }
    public function obtenerUsuariosPorUsername($username){
        return $this->connexion->queryRow("SELECT * FROM usuarios WHERE username= '$username'");
    }
    public function validarLogin($username,$password){
        return $this->connexion->queryRow("SELECT * FROM usuarios WHERE username = '$username' AND contra = '$password'");
    }
    public function obtenerRolDelUsuario($username)
    {
        return $this->connexion->queryRow("SELECT rol FROM usuarios WHERE username = '$username'");
    }
    public function obtenerIdDelUsuario($username)
    {
        return $this->connexion->queryRow("SELECT id FROM usuarios WHERE username = '$username'");
    }
    public function registrarUsuario($nombre, $apellido, $username,$password, $codigo, $email){
        $this->connexion->queryExecute("INSERT INTO usuarios (nombre, apellido, username, contra, rol, codigo, email) VALUES ('$nombre', '$apellido', '$username', '$password', 'null', '$codigo', '$email')");
    }
    public function obtenerUsuariosConRolNull(){
        return $this->connexion->queryTable("SELECT * FROM usuarios WHERE rol= 'null'");
    }
    public function obtenerUsuariosConRolChofer(){
        return $this->connexion->queryTable("SELECT * FROM usuarios WHERE rol= 'chofer'");
    }
    public function darRol($id,$nombre,$apellido,$username,$contra,$rol){
        $this->connexion->queryExecute("UPDATE usuarios SET nombre='$nombre',apellido='$apellido',username='$username', contra='$contra', rol='$rol' WHERE id='$id'");
    }
    public function obtenerViajePorId($id){
        return $this->connexion->queryRow("SELECT * FROM viaje WHERE id=$id");
    }
    public function obtenerViajePorIdChofer($id){
        return $this->connexion->queryRow("SELECT * FROM viaje WHERE idchofer= '$id'");
    }
    public function CrearViaje($ori,$des,$id){
        $this->connexion->queryExecute("INSERT INTO viaje (origen, destino, idchofer,realTotal,realFree,realReefer,realHazard,realPeajes,realViaticos,realEta,realEtd,realCombustible,realKm) VALUES ('$ori', '$des', '$id',0,0,0,0,0,0,0,0,0,0)");
    }
    public function CargarCostos($realCombustible,$realPeajes, $realTotal,$realKm,$realViaticos,$id){
        $this->connexion->queryExecute("UPDATE viaje SET realTotal='$realTotal', realPeajes='$realPeajes',realViaticos='$realViaticos', realCombustible='$realCombustible', realKm='$realKm' WHERE id='$id'");
    }

    public function ObteberUserNamePorCodigo($codigo)
    {
        return $this->connexion->queryRow("SELECT username FROM usuarios WHERE codigo = '$codigo'");
    }

    public function actualizarValidarPorCodigo($codigo, $validar){
        $this->connexion->queryExecute("UPDATE usuarios SET validar ='$validar' WHERE codigo='$codigo'");
    }

    public function obtenerValidarPorUsername($username)
    {
        return $this->connexion->queryRow("SELECT validar FROM usuarios WHERE username = '$username'");
    }

}