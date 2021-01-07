<?php 

    $destino= "n.peianovich@gmail.com";
     $nombre = $_POST["nombre"];
     $email = $_POST["email"];
     $telefono = $_POST["telefono"];
     $mensaje = $_POST["mensaje"];
     $mail= mail($destino,$email, $nombre,$telefono, $mensaje);
      if($mail){
          echo 'EL MENSAJE SE ENVIO CON EXITO';
      }else{
          echo 'HUBO UN ERROR';
      
    }




 ?>