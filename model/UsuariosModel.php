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


}