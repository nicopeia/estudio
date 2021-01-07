<?php  


include "conexion.php";
   



   if(isset($_POST['guardar'])) {

        $titulo = $_POST['titulo'];
        $subtitulo = $_POST['subtitulo'];


        if(isset($_POST['titulo'])   && isset($_POST['subtitulo'])  ){
           $consulta_insert= $conexion->prepare("INSERT INTO novedades_1(titulo, subtitulo) VALUES(:titulo, :subtitulo) ");
           $consulta_insert->execute(array( ':titulo'=>$titulo,':subtitulo'=>$subtitulo));
           
           header("Location:update.php");
        }else{
           echo "se produjo un error no se guardo el parrafo";
        }
   }

       
 $consulta = $conexion->query("SELECT * FROM novedades_1 ORDER BY fecha DESC LIMIT 4");

         
 $consulta->execute();
 return $consulta;
 $consulta->close();    



         
 ?>          
            
            
           
          
            