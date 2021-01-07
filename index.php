<?php 


  include 'conexion.php';
  include 'consultas.php';                   
  session_start();



  if(isset($_SESSION['usuario'])) {
      header('Location:panel.php');
    
    }                  
                
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ESTUDIO CONTABLE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <!-- Bootstrap CSS -->

  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;800&display=swap" rel="stylesheet">
  <!-- Ionic Icons  fontawesome-->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <script src="main.js"></script>

  <!-- GOOGLE FONTS FUENTES -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Castoro&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>




    </head>
    <body>

        <header>
<!-- menu de navegacion -->
<nav  class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
    <a  class="navbar-brand"><img  id="logo" src="img/logo1png.png"  alt="logo"><span class="spanlogo">M&L <small>consultores</small> </span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="icon ion-md-menu"></i>
    </button>

    <div  class="collapse navbar-collapse" id="navbarCollapse">

      <ul  class="navbar-nav ml-auto">

        <li class="nav-item mr-3">
          <a class="nav-link" href="#skill-sec">QUIENES SOMOS</a>

        </li>
        <li class="nav-item dropdown mr-3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            SERVICIOS
          </a>
        <ul style="color:rgb(7, 6, 6) ;" class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="impuestos.php">IMPUESTOS</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="auditoria.php">AUDITORIA</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="outsourcing.php">OUTSOURCING</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="pymes.php">PYMES</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="previsional.php">PREVISIONAL</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="laboral.php">LABORAL</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="otroservicios.php">OTROS SERVICIOS</a></li>

          </ul>
        </li>
        <li  class="nav-item mr-3">
          <a class="nav-link" href="#industrias">INDUSTRIAS</a>
          <div class="line"></div>
        </li>
        <li  class="nav-item mr-3">
          <a class="nav-link " href="#novedades">NOVEDADES</a>
        </li>

        <li class="nav-item mr-3">
          <a class="nav-link " href="#clientes">CLIENTES</a>
        </li>

        <li class="nav-item mr-3">
          <a class="nav-link" href="#fondoForm">CONTACTO</a>
        </li>



        <li id="fab" class="nav-item mr-3 mt-1">
          <span class="text-dark"><i style="font-style: 9px; cursor: pointer;" class="fab fa-linkedin-in icono"></i></span>
        </li>
      </div>
      </ul>





    </div>
  </nav>

<!-- fin menu de navegacion -->

  <!-- INICIO DE SLIDER DE IMAGENES  -->


    <div id="myCarousel" class="carousel slide mt-5 " data-ride="carousel" style="">
      <ol class="carousel-indicators " >
        <li data-target="#myCarousel" data-slide-to="0" class="active " style="border-radius: 50%;height: 12px;width: 12px; "></li>
        <li data-target="#myCarousel" data-slide-to="1" style="border-radius: 50%;height: 12px;width: 12px;"></li>
        <li data-target="#myCarousel" data-slide-to="2" style="border-radius: 50%;height: 12px;width: 12px; "></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active ">

          <img id="fotoSlider" class=" img-fluid img-responsive "  width="100%" height="100%"   alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" >

          <div class="container">
            <div class="carousel-caption">
           
           
                   
              <h1 class="titulo text-left text-dark animate__animated  animate__bounceInUp ml-1 mt-5">M&L</h1>
              <p class="titulo text-left animate__animated  animate__bounceInUp">| Estudio Contable Auditoría  y Outsourcing | </p>
              <p class="text-left animate__animated  animate__bounceInUp"><button  class="btn btn-primary "><a href="#skill-sec"></a>VER MÁS</button></p>
              <?php  include 'validarForm.php';
                           include 'conexion.php';
                           
                           
                    ?>
            </div>
          </div>


      </div>



        <div class="carousel-item">
            <img id="fotoSlider1" class="bd-placeholder-img  img-fluid img-responsive w-100" width="100%" height="100%"   alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"  >

          <div class="container ">
            <div class="carousel-caption text-left">
              <h1 class="display-2 mb-3 animate__animated  animate__bounceInLeft" style="text-shadow: 3px 3px 3px rgb(0, 0, 0);color:white;"  >Estudio Contable</h1>
               <h3 style="text-shadow: 3px 3px 3px rgb(0, 0, 0);border-color:black;letter-spacing:3px;" class="animate__animated  animate__bounceInLeft">Nos Especializamos en </h3>
              <h3 style=" text-shadow: 3px 3px 3px rgb(0, 0, 0);border-color:black;letter-spacing:3px;" class="animate__animated  animate__bounceInLeft">Impuestos - Auditoría -  Consultoría - Pymes y más servicios.</h3>

            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img id="fotoSlider2" class="bd-placeholder-img  img-fluid img-responsive " width="100%" height="100%"   alt="" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"  >

          <div class="container">



            <div id="parrafoslidertres" class="carousel-caption text-right">
              <h1 class="display-2 mb-5 animate__animated  animate__bounceInUp" style="text-shadow: 3px 3px 3px rgb(0, 0, 0);">Servicios de Auditoría</h1>
              <h3  style="text-shadow: 3px 3px 3px rgb(0, 0, 0);"class="mb-5 animate__animated  animate__bounceInUp" >| Nuestro recorrido y experiencia en diversas áreas |</h3>





            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" >
        <span  class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
        <span  class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </header>


  <section id="datos" class="bg-light">
    <div class="container py-3">




        <div class="row">
        <div class="col-md-6 py-3 text-white text-center">
     <p  class="text-dark titulonos text-center"><i class="far fa-edit"></i> <u class=""> <strong>SOBRE</strong></u> NOSOTROS</p>
          <hr>

          <span class="text-left text-muted">Contamos con un equipo de profesionales especializados en cada línea de negocios que entiende la problemática de cada sector.</span>
<div class="py-4">


     <p class="text-dark "><i style="color:#2549FF" class="fas fa-check mr-3"></i> Impuestos, Auditoría, Consultoría, Servicios</p>
       <p class="text-dark "><i style="color:#2549FF" class="fas fa-check mr-3"></i>orientados al asesoramiento de nuestros clientes</p>
         <p class="text-dark "><i style="color:#2549FF" class="fas fa-check mr-3"></i>análisis e implementación de nuevos proyectos</p>
           <p class="text-dark "><i style="color:#2549FF" class="fas fa-check mr-3"></i>asesoramiento en los aspectos económicos y financieros</p>

</div>



        </div>
      
        <div  class="col-md-6 mt-5 ">


      




            <img id="fotoNosotros"  src="./img/contadores.jpg" class="img fluid img-responsive " width="100%">


        



    </div>

      




  </div>
    </div>

    </section>

    <section  id="skill-sec" >
      <div class="overlayseparador py-3 display-3" >
        <h1  class="text-white text-center  display-5">Quiénes Somos</h1>
        <div class=" text-center">
          <a href="quienessomos.php" class="text-center"><button class="btn btn-primary lead">LEER MÁS</button></a>
        </div>
        <div class="container " >

            <div class="row " >

              <div class="col-md-6 col-xs-12 col-sm-12">

                <div class="row ">

                  <div class="col-md-12 col-xs-12 col-sm-12" >
                        <div id="item1" class="item bg-primary">
                          <img style="height: 40px;"; src="img/lightbulb.png" class="img-fluid img-responsive" alt="">

                        </div>
                  <div id="item2" class="item">
                    <h5 >trayectoria</h5>
                    <p>integrado con un  equipo altamente capacitado,  que garantiza una excelente resultado de nuestros servicios.</p>
                        </div>

                      </div>

                    <div class="row">
                      <div class="col-md-12 col-xs-12 col-sm-12 ">
                        <div id="item3" class="item bg-white border-primary">
                          <img style="height: 40px; " src="img/bussiness-man.png" class="img-fluid img-responsive" alt="" >

                        </div>
                  <div id="item2" class="item">
                    <h5 >Tres Socios</h5>
                   <p>Conducen y líderan el equipo de trabajo, interviniendo  en cada uno de nuestros servicios.</p>

                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-xs-12 col-sm-12">
                        <div id="item1" class="item bg-primary">
                          <img style="height: 40px;"; src="img/calendario.png" class="img-fluid img-responsive" alt="">

                        </div>
                  <div id="item2" class="item">
                    <h5 >Experiencia</h5>
                   <p>Somos un equipo de  profesionales especializado en Impuestos, Auditoría, Consultoría,Pymes y más.</p>

                        </div>

                      </div>
                    </div>

                    </div>
              </div>
              <div class="col md-6 col-sm-6 col-xs-6 py-5  text-right">
              <img src="img/estudioc1.jpg" alt="" class="img-fluid img-responsive" height="100%" width="100%" >

              </div>
            </div>
            </div>




      </div>

     </section>
<section>


<div class="container py-4">


<div class="row">
  <div class="col-md-12">


    <div class="">
    <h3 class="text-center lead py-3">Seguinos en Linked<i style="font-style: 9px; cursor: pointer; color: #2549FF;" class="fab fa-linkedin-in icono"><a href="https://www.linkedin.com"></a></i></h3>   
  </div>


  </div>
</div>
</div>



</section>
<section  class="servicios" >

  <div class="overlayServicios   pb-4" >


   <div class="container ">
    <div class="text-center mb-5"><img  id="logo" src="img/logo2.png"  alt="logo" class="text-center img-fluid img-responsive">
     <h2 class="text-center text-white display-5"> Servicios </h2>

     <a href="servicios.php"> <button class="btn btn-primary mt-2">LEER MÁS</button></a>

   </div>
   <div class="row">


   <div id="cardServicio" class="col-md-3 ">
     <div class="card cuadro mb-3 "  >
       <div class="card-header bg-white  text-dark   text-center  lead   text-dark">Impuestos</div>
       <div class="card-body text-white">

         <p class="card-text text-center mt-4 "><img style="height: 60px;" src="img/portapapeles.png" class="img-fluid img-responsive" alt=""></p>
       </div>

     </div>
   </div>
   <div id="cardServicio" class="col-md-3">
     <div class="card cuadro mb-3">
       <div class="card-header    bg-white  text-dark  text-center lead">Previsional</div>
       <div class="card-body text-white">

         <p class="card-text text-center mt-4"><img style="height: 60px;" src="img/medico.png" class="img-fluid img-responsive" alt=""></p>
       </div>

     </div>
   </div>
   <div id="cardServicio" class="col-md-3">
     <div class="card cuadro mb-3">
       <div class="card-header   bg-white  text-dark  text-center lead">Auditoría</div>
       <div class="card-body text-white">

         <p class="card-text text-center mt-4"><img style="height: 60px;" src="img/auditoria.png" class="img-fluid img-responsive" alt=""></p>
       </div>


     </div>
   </div>

   <div id="cardServicio"  class="col-md-3">
     <div class="card cuadro mb-3">
       <div  class="card-header   bg-white  text-dark  text-center lead">Pymes</div>
       <div class="card-body text-white">

         <p class="card-text text-center mt-4"><img style="height: 60px;" src="img/grafico.png" alt="" class="img-fluid img-responsive"></p>
       </div>

     </div>
   </div>





   </div>



   </div>


  </div>


   </section>

   <section id="datos" class="bg-white">
    <div id="industrias" class="container mt-4">






     <div class="row">


     <div  class="col-md-3 col-sm-3 col-xs-2">
       <div class="card cuadro  "  >
         <div class=" bg-white  text-dark   text-center mt-3  text-dark">Retail</div>
         <div class="card-body ">

        <a href="#"> <p class="card-text text-center mt-4 "><img style="height: 60px;" src="img/retail.png" class="img-fluid img-responsive" alt=""></p></a>
           <hr>
          </div>

       </div>
       <div class="card cuadro mt-3">
        <div class=" bg-white  text-dark   text-center mt-3  text-dark">Logística</div>
        <div class="card-body ">

        <a href="#"> <p class="card-text text-center mt-4 "><img style="height: 60px;" src="img/logistica.png" class="img-fluid img-responsive" alt=""></p></a>
          <hr>
         </div>

      </div>
     </div>
     <div class="col-md-3 col-sm-3 col-xs-2">
       <div class="card cuadro ">
         <div class="    bg-white  text-dark mt-3  text-center">Banca Financiera</div>
         <div class="card-body ">

        <a href="#">   <p class="card-text text-center mt-4"><img style="height: 60px;" src="img/banco.png" class="img-fluid img-responsive" alt=""></p></a>
           <hr>
          </div>

       </div>
       <div class="card cuadro  mt-3"  >
        <div class=" bg-white  text-dark   text-center mt-3  text-dark">Salud</div>
        <div class="card-body ">

      <a href="#">  <p class="card-text text-center mt-4 "><img style="height: 60px;" src="img/salud.png" class="img-fluid img-responsive" alt=""></p></a>
          <hr>
         </div>

      </div>

     </div>




     <div class="col-md-6 col-sm-3 col-xs-2  text-center">
      <p  class="text-dark titulonos text-center"><i class="far fa-edit"></i> <u > <strong>LAS</strong></u> INDUSTRIAS</p>
      <a href="industrias.php"><button class="btn btn-outline-primary mt-2">LEER MÁS</button></a>
      <hr>

           <span class="text-left text-muted">Soluciones a medida para la demanda específica de nuestros clientes asesoria en las áreas de impuestos, auditoría , consultoría,  en cuestiones tributarias, previsionales, aduaneras.</span>
 <div class="py-4">


      <p class="text-dark"><i style="color:red" class="fas fa-check mr-3"></i>Entendemos la problematica de cada sector</p>
        <p class="text-dark "><i style="color:red" class="fas fa-check mr-3"></i>orientados al asesoramiento de nuestros clientes</p>
          <p class="text-dark "><i style="color:red" class="fas fa-check mr-3"></i>análisis e implementación de nuevos proyectos</p>
            <p class="text-dark "><i style="color:red" class="fas fa-check mr-3"></i>Atención de inspecciones de los organismos fiscales</p>

 </div>



         </div>





     </div>

    </div>


    </section>
    <section id="clientes"  class="servicios ">
      <div class="overlay py-4">

      <div class="text-center ">
        <h2 class="disp text-white display-5">Clientes</h2>
        <hr>
      </div>
        <div id="fotos"  class="carousel ">
        <div class="carousel__contenedor">
          <button style="background-color: rgba(194, 184, 184, 0.562); border-radius: 60%;height: 30px; width: 30px;" aria-label="Anterior" class="carousel__anterior">
            <i   class="fas fa-chevron-left"></i>
          </button>

          <div class="carousel__lista">
            <div class="carousel__elemento">
              <img class="client" src="img/open.png" alt="Rock and Roll Hall of Fame">

            </div>
            <div class="carousel__elemento">
              <img class="client" src="img/happy.png" alt="Constitution Square - Tower I">

            </div>
            <div class="carousel__elemento">
              <img style="width: 160px;" class="client" src="img/logiteck.png" alt="Empire State Building">

            </div>
            <div class="carousel__elemento">
              <img class="client" src="img/loteria.png" alt="Harmony Tower">

            </div>

            <div class="carousel__elemento">
              <img style="width: 180px;" class="client" src="img/mintur.png" class="img-responsive img-fluid" alt="Empire State Building">

            </div>
            <div class="carousel__elemento">
              <img class="client" src="img/tecno.png" alt="Harmony Tower">

            </div>
            <div class="carousel__elemento">
              <img  class="client"src="img/papelera.png" alt="Empire State Building">

            </div>
            <div class="carousel__elemento">
              <img  class="client" src="img/coin.png" alt="Harmony Tower">

            </div>
          </div>

          <button style="background-color: rgba(194, 184, 184, 0.562); border-radius: 60%;height: 30px; width: 30px;" aria-label="Siguiente" class="carousel__siguiente">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>


      </div>
      <div role="tablist" class="carousel__indicadores" class="mt-4"></div>
    </div>
    </div>
    </section>

    <section id="novedades" class="bg-white novedades">



      <div class="container ">


        <div class="text-center mt-4">
        <img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center">
      <h2 class="text-center  text-dark display-5"><strong>Novedades</strong></h2>
      <!-- Button trigger modal -->
    </div>
 <div class="col-md-12" >              
    <div class="row align-items-center justify-content-center py-5 mt-3 ">
      
    <?php 
 
   
  while($consult = $consulta->fetch(PDO::FETCH_ASSOC)){
    ?>
<?php 

$fecha= $consult['fecha'];

$fecha_date= date_create($fecha);

$fecha_actual=date_format($fecha_date, 'd-m-Y');




?>
      
          <div id="cardNov" class="card text-center py-3">
          <i class="far fa-calendar-alt"></i><p class="text-left  text-black" style="font-size:12px"> <small>  <?php echo $fecha_actual; ?></small></p>    

          <hr>
          <div class="text-center" style="color:#2379EE">
         
            <i class="fas fa-paperclip"></i>
        
          <?php
               
              
               
               echo $consult['titulo'];  ?>
           </div>
            
            <div class="card-body">
            <p class="card-title lead" style="font-size:18px;"> <?php
               
              
               
               echo $consult['subtitulo'];  ?>
            </p>
 
     <div class="text-center py-2">
 
 <span class="text-black  "><i class="fab fa-linkedin-in icono"></i></span>
 </div>

       
               
              
               
            

            

              <!-- Button trigger modal -->

 
         
       
      
        
        <?php   }  ?>
        </div>
        </div>
        </div>


      </section>


<section id="fondoForm" >

  <div class="overlaycontacto">

         <div class="container">
             <div class="row">
                 <div class="col-md-8  mt-5 " >
                     <h1  class="text-white" >CONTACTO</h1>
                     <form  action="index.php" method="POST" class="text-white">
                   

                         <div class="form-group">
                             <input type="text" name="nombre" class="form-control text-white" required="required" placeholder="Nombre*" />
                         </div>
                         <div class="form-group">
                             <input type="text" name="email" class="form-control text-white" required="required" placeholder="Email*" />
                         </div>
                         <div class="form-group">
                           <input type="text" name="telefono" class="form-control text-white" required="required" placeholder="Telefono*" />
                       </div>
                         <div class="form-group">
                             <textarea name="mensaje"  id="message" required="required " class="form-control text-white" style="min-height: 100px;" placeholder="Su Mensaje*"></textarea>
                         </div>
                         <div class="form-group">

                         <input type="submit" name="submit" class="btn btn-danger text-white" value="ENVIAR">
                         </div>

                     </form>

                 </div>
  <div class="col-md-4 text-white">

  <h6 style="font-size: 30px;" class="text-white mt-5 py-3  text-center"><img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center"> M&L </h6>



  </div>
         </div>
     </div>
   </div>
  </section>
  <footer class="footer ">

    <!-- INICIO CONTACTO Y FORMULARIO  -->

   <div id="dato" class="container">




      <div class="row">
      <div class="col-md-6 py-3 text-white">
        <h4 class="font-weight-bold ">CONTACTO</h4><br>
        <img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center">
        <span>MyL Estudio Contable Impositivo y Previsional</span>
        <hr style="color: black;">

     <span>  <i class="fas fa-map-marker-alt"></i>   Almirante Solier 955, </span><br><br>
        <span> <i class="fas fa-map-marker-alt"></i> Capital Federal, Buenos Aires - Argentina </span><br> <br>
        <span > <i class="fas fa-phone-volume"></i> Tel: 5365-8646</span>
       <hr>


      </div>
      <div class="col-md-6 py-3 text-white">
        <iframe class="img-responsive w-100 img-fluid h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.2536762685468!2d-58.45280358505423!3d-34.54713196201278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb43aa43c458f%3A0x3ad4f904c4ddeee!2sAlmte%20Daniel%20de%20Solier%20955%2C%20C1428CIA%20CABA!5e0!3m2!1ses-419!2sar!4v1606184976414!5m2!1ses-419!2sar"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

    </div>





   </div>


  </footer>
   <!-- INICIO FOOTER  -->
   <section>
   <div class="bg-dark py-3">
      <div class="container bg-dark">
        <hr style="color: white;">
        <div class="row">
          <div class="col-md-6">
            
      <img  id="logo" src="img/logo1png.png"  alt="logo" class="text-center">
      <span class="text-white">MyL Estudio Contable</span>
    </div>
    <div class="col md-6 ">
      <div id="redes" class="text-center py-3">

     <span class="text-white py-4"><i class="fab fa-linkedin-in icono"></i></span>
    </div>
    </div>
    </div>
    <a  href="#myCarousel" class="subir" > <i class="fas fa-arrow-up "></i></a>

    </div>

  </div>


</section>
        <!-- SCRIPT-->
        <script src="js/main.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <!-- JavaScript Bundle with Popper.js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/2e8004a58d.js" crossorigin="anonymous"></script>
<script>
  (function alerta(){
  
	setTimeout(function(){
	 var alerta = document.getElementById('alerta');
	 alerta.style.display="none";
	 },3000);
   }());
</script>

    </body>
</html>
