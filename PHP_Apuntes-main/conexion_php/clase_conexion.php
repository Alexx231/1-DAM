<?php

class Conexion {

    private $servidor = "localhost";

    private $usuario = "root";

    private $clave = "";

    private $bdd = "";

    protected $conexion;

    public function __construct(){
        $this -> conexion = new mysqli($this -> servidor, $this -> usuario, $this -> clave, $this -> bdd);
        if($this -> conexion -> connect_error){
            die("Error de conexión: " . $this -> conexion -> connect_error);
        }
        $this -> conexion -> set_charset("UTF8");
        echo "Conexión exitosa".PHP_EOL;
    }

    public function conexion(){
        return $this -> conexion;
    }
}







?>