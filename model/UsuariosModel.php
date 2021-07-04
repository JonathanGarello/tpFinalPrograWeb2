<?php

class UsuariosModel{

    private $connexion;

    public function __construct($database){
        $this->connexion = $database;
    }

    public function obtenerUsuarios(){
        return $this->connexion->query("SELECT * FROM usuarios");
    }
    public function obtenerUsuariosPorId($id){
        return $this->connexion->query("SELECT * FROM usuarios WHERE id=$id");
    }
    public function obtenerUsuariosPorusername($username){
        return $this->connexion->query("SELECT * FROM usuarios WHERE username= '$username'");
    }
    public function validarLogin($username,$password){
        return $this->connexion->query("SELECT * FROM usuarios WHERE username = '$username' AND contra = '$password'");
    }
    public function obtenerRolDelUsuario($username)
    {
        return $this->connexion->query("SELECT rol FROM usuarios WHERE username = '$username'");
    }
    public function registrarUsuario($nombre, $apellido, $username,$password){
        $this->connexion->query2("INSERT INTO usuarios (nombre, apellido, username, contra, rol) VALUES ('$nombre', '$apellido', '$username', '$password', 'null')");
    }
    public function obtenerUsuariosConRolNull(){
        return $this->connexion->query("SELECT * FROM usuarios WHERE rol= 'null'");
    }
    public function darRol($id,$nombre,$apellido,$username,$contra,$rol){
        $this->connexion->query2("UPDATE usuarios SET nombre='$nombre',apellido='$apellido',username='$username', contra='$contra', rol='$rol' WHERE id='$id'");
    }
}