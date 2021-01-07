<?php

$server = 'sql100.epizy.com';
$usuario = 'epiz_27605834';
$pass = '6CNpDnkJB0WJM9';
$database = 'mylconsultores';


try {

$conexion= new PDO ("mysql:host=$server;dbname=$database;",$usuario, $pass);
$conexion->exec("SET CHARACTER SET utf8");


} catch (PDOException $e) {
die('fallo la conexion: ' .$e->getMessage());
echo'no hay conexion a base de datos';
}




 ?>