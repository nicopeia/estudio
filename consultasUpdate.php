<?php  


include "conexion.php";
   




       
 $consulta = $conexion->query("SELECT * FROM novedades_1 ORDER BY fecha DESC ");

      
 $consulta->execute();
 return $consulta;
 $consulta->close();    
         
 ?>          
            