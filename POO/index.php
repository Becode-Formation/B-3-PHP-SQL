<?php

class Connexion{
    private $dbname = "mysql:host=mysqldb;dbname=Games;charset=utf8";
    private $user = "root";
    private $pwd = "root";
    function __construct(){
        $this->dbname = $dbname;
        $this->user = $user;
        $this->pwd = $pwd;
        try {
            $dt = new PDO($dbname, $user, $pwd);
        } catch(Exception $e) {
            echo "Error :".$e->getMessage();
        }
    }

    function countTable($request){
        $query = $request . ' * FROM Versus_Games';
        $select = $dt->query($query);
    }
}

$versus = new Connexion();
$versus->countTable("SELECT COUNT");


?>