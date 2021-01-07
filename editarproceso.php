
<?php 

session_start();

include 'conexion.php';
         
if(!isset($_POST['oculto'])){
    header('Location:panel.php');
}

$id2 = $_POST['id2'];
$titulo = $_POST['txttitulo'];
$subtitulo = $_POST['txtsubtitulo'];

$sentencia = $conexion->prepare("UPDATE novedades_1 SET titulo =? , subtitulo =?  WHERE id =?; ");

$resultado=  $sentencia->execute([$titulo,$subtitulo,$id2]);



if($resultado === true){
    header("Location:update.php");
}else{
    echo 'ERROR EN LA BASE DE DATOS NO SE PUDO MODIFICAR';
}



 
                  
                
?>
