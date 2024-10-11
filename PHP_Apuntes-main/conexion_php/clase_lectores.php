<?php

require_once ('clase_conexion.php');

class Lectores {
    private $bdd;

    private $cursor;

    public function __construct(){
        $this -> bdd = new Conexion();
        $this -> cursor = $this -> bdd -> conexion();
    }

    public function get_lectores(){
        $resultado = $this->cursor -> query ("SELECT * FROM lectores"); 

        if($resultado -> num_rows > 0){
            $lectores = array();
            while ($lector = $resultado -> fetch_assoc()){  //fetch_assoc() devuelve los datos de una base de datos y los convierete en un array iterable
                $lectores[] = $lector;
            }
            return $lectores;
        }
    }
}






?>