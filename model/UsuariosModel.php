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
        return $this->connexion->query("SELECT * FROM usuarios WHERE id = $id ");
    }
    public function logIn($username,$password){
        return $this->connexion->query("SELECT * FROM usuarios WHERE username = $username AND contra = $password");
    }
    public function register($nombre){
        $this->connexion->query("INSERT INTO usuarios VALUES($nombre)");
    }


}