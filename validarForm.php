<?php 
// validar formulario  servidor



if(isset($_POST['submit'])){
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];
  $telefono= $_POST['telefono'];


  if(isset($_POST['submit'])){


    if(empty( $nombre ) || empty($email ) || empty($mensaje) || empty($telefono)){
        echo ' <div class="alert alert-danger" role="alert">
        * Debe completar todos los campos.
      </div> ';
    }
    else{
        if(!empty($nombre ) && !empty($email ) &&  !empty($mensaje) &&  !empty($telefono)){ 
        if(!empty($email) || !empty($nombre)){ 
        if(strlen($nombre)> 2 && strlen($nombre)<30 && preg_match('/^[^0-9][a-zA-Z0-9\_\.]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
        
        echo'<div id="alerta" class="alert alert-success " role="alert" script="alerta();" >
        Mensaje enviado con exito. Un representante se pondra en contacto a la brevedad!
       </div>'; 

           
    }else{
        echo'<div id="alerta" class="alert alert-danger " role="alert" >
        algunos de los datos ingresados son incorrectos.Verifique y vuelva a intentarlo!
       </div>'; 
    }
 
    }
}
}


   
}
}


// guardar en base de datos

 

if(isset($nombre) && isset($email) &&   isset($telefono)  && isset($mensaje)  ){  

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    
    
    if(empty( $nombre ) || empty($email ) || empty($telefono) || empty($mensaje)){
        echo ' <div class="alert alert-danger" role="alert">
        * Debe completar todos los campos.
      </div> ';
    }else{
        if(strlen($nombre)> 2 && strlen($nombre)<30 && preg_match('/^[^0-9][a-zA-Z0-9\_\.]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"])){
            
            
            $consulta = $conexion->prepare("INSERT INTO formulario_contacto(nombre, email,telefono, mensaje)VALUES(:nombre, :email, :telefono, :mensaje)");

            $consulta->bindParam(':nombre', $nombre);
            $consulta->bindParam(':email', $email);
            $consulta->bindParam(':telefono', $telefono);
            $consulta->bindParam(':mensaje', $mensaje);
           
            
            
            
            
            $consulta->execute();
          
    
      
          
        }

}
}

?>