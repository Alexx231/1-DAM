<?php

require_once ('clase_conexion.php');
require_once ('clase_lectores.php');

$db = new Conexion();

$cursor = $db -> conexion();

$lectores = new Lectores();
$lista_lectores = $lectores -> get_lectores();
echo "<pre>";
print_r($lista_lectores);
echo "</pre>";









?>