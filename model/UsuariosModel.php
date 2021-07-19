<?php

class UsuariosModel{

    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function obtenerUsuarios(){
        return $this->connexion->queryRow("SELECT * FROM usuarios");
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
    public function registrarUsuario($nombre, $apellido, $username,$password, $enlace, $email){
        $this->connexion->queryExecute("INSERT INTO usuarios (nombre, apellido, username, contra, rol, enlace, email)
        VALUES ('$nombre', '$apellido', '$username', '$password', 'null', '$enlace', '$email')");
    }
    public function obtenerUsuariosConRolNull(){
        return $this->connexion->queryTable("SELECT * FROM usuarios WHERE rol= 'null'");
    }
    public function darRol($id,$nombre,$apellido,$username,$contra,$rol){
        $this->connexion->queryExecute("UPDATE usuarios SET nombre='$nombre',apellido='$apellido',username='$username', contra='$contra', rol='$rol' WHERE id='$id'");
    }
}