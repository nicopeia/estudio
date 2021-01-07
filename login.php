<?php  
session_start();
include 'conexion.php';


if(isset($_SESSION['usuario'])) {
    header('Location:panel.php');
  
  }                  


 


?>  
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>M&L CONSULTORES</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body class="bg-light h-100">
    <div class="container border border-color-dark mt-5 bg-dark text-white py-3">
    <h2 class="text-center ">M&L CONSULTORES</h2>
</div>
   

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="img/user.png" >
                </div>
                <h3 class="text-center text-white">LOGIN</h3>
                <form class="col-12" action="panel.php" method="post">
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control log" placeholder="Nombre de usuario" name="usuario">
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control log" placeholder="Contrasena" name="pass">
                    </div>
                    <button  type="submit" class="btn btn-primary login"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                   
                </form>
             
             
		      
            </div>
        </div>
    </div>
</body>
</html>
