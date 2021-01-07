
<?php 

session_start();

include 'conexion.php';
         

if(!isset($_GET['id'])){
    exit();
};


$url = header("Location:update.php");



$codigo =$_GET['id'];

$sentencia = $conexion->prepare("DELETE FROM novedades_1  WHERE id =?; ");

$resultado=  $sentencia->execute([$codigo]);


 
  


 
                  
                
?>