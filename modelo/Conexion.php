<?php
class Conexion{
    private $servidor = "localhost";
    private $bd = "gymtonic";
    private $puerto = "3306";
    private $charset = "utf8";
    private $usuario = "root";  
    private $contrasena = "";
    public $pdo = null;
    private $atributos = array(PDO::ATTR_CASE => PDO::CASE_LOWER,PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING,PDO::ATTR_DEFFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    function  constructor(){
    $this->pdo = new PDO("mysql:dbname={$this->db};host={$servidor};port={$this->puerto};charset={$this->charset}",$this->usuario,$this->contrasena,$this->atributos);    
    }
}
?>