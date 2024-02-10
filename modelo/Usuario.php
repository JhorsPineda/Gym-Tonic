<?php
include_once 'Conexion.php';
class Usuario{
    var $objetos;
    public function __construct(){
        $db = new Conexion();
        $this->acceso = $db->pdo;
    }
    function login($user,$pass){
        $sql = "SELECT * FROM usuario inner join usuario = :user AND pass = :pass";
        $query = $this->acceso->prepare($sql);
        $query->execute(array(':user'=>$user,':pass'=>$pass));
        $this->objetos = $query->fetchall();
        return $this->objetos;
    }
}