<?php

class Database{

    private $connexion;

    public function __construct($servername, $username, $password, $dbname){
        $this->connexion  = mysqli_connect($servername, $username, $password, $dbname)
                or die("Connection failed: " . mysqli_connect_error());
    }

    public function queryRow($sql){
        $result=mysqli_query($this->connexion,$sql);
        if($result == true){
            return mysqli_fetch_array($result,MYSQLI_ASSOC);
        }else{
            return "error";
        }
    }
    public function queryTable($sql){
        $result=mysqli_query($this->connexion,$sql);
        if($result == true){
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }else{
            return "error";
        }
    }
    public function queryExecute($sql){
        mysqli_query($this->connexion,$sql);

    }
    public function __destruct(){
        mysqli_close($this->connexion);
    }

    public static function createDatabaseFromConfig(Config $config){
        return new Database(
            $config->get( "database","servername"),
            $config->get("database","username"),
            $config->get("database","password"),
            $config->get("database","dbname")
        );
    }
}