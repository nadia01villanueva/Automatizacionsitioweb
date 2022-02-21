<!DOCTYPE html>


   <?php
  session_start();
  if (@!$_SESSION['user']) {
    header("Location:index.php");
  }elseif ($_SESSION['rol']==1) {
    header("Location:admin1.php");
  }
  ?>

<html lang="en">
<head>
  <title>Maternidad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body  style="background-image: url(images/fondoc.jpg);">

<div class="jumbotron text-center" style="background-color: #99d6ff" style="margin-bottom:0">
  <h1 style="color:#FFFF">¡Bebé en camino!</h1>
  <h5><p style="color:#FFFF">Los pies más pequeños hacen las huellas más grandes en nuestros corazones.!</p> </h5>
</div>

</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!--  <nav class="navbar navbar-expand-sm btn btn-primary navbar-dark" > -->
<nav class="navbar navbar-expand-sm" style="background-color: #99d6ff" >
  
  <a class="navbar-brand" href="#"><center><font color="white">Principal</font></center></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">

       <li class="nav-item"><center>
        <a class="nav-link" href="#"><font color="white">lista de usuarios</font></a></center>
      </li> 
      <li class="nav-item"><center>
        <a class="nav-link" href="#"><font color="white">Cotizaciones</font></a></center>
      </li>
      

    </ul>
  </div>  
</nav>

<br>
<br>
<div class="container">
    
    <div id="carousel1" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1" data-slide-to="1"></li>
        <li data-target="#carousel1" data-slide-to="2"></li>
      </ol>
      <!-- diapositivas -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://www.eltiempo.com/files/article_main/uploads/2017/10/17/59e6688a065c5.jpeg" alt="">
            <div class="carousel-caption">
              <h3 style="color:#000000"><b>No prepares el camino para el bebé, prepara el bebé para el camino.</b></h3>

            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="http://radio9digital.net/wp-content/uploads/2019/05/recien-nacido.jpg" alt="">
            <div class="carousel-caption">
              <h3 style="color:#000000"><b>Dar a luz debe de ser uno de tus más grandes logros, no uno de tus más grandes miedos. </b></h3>

            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://www.republica.com/wp-content/uploads/2018/10/paternidad-prestaciones-maternidad.jpg" alt="">
            <div class="carousel-caption">
              <h3 style="color:#000000"><b>Un bebé viene a llenar un lugar en tu corazón que nunca supiste que estaba vacío.</b></h3>

            </div>
        </div>
      </div>
      <!-- botones de desplazamiento a izquierda y derecha -->      
      <a class="carousel-control-prev" href="#carousel1" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    </div>
    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
<br>


<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2 align="center"class="bg-danger text-white">TE PODRÍA INTERESAR...</h2>
    <h5><p align="center"class="bg-secondary text-white">Lo que toda mamá primeriza debe saber.<br> <a href="#" style="color:#FFFF">Leer artículos>></a></h5></p>
      <img class="d-block w-100" src="https://img.culturacolectiva.com/featured/2018/09/13/1536877261036/early-pregnancy-main-medium.jpg" alt="">
 
<br><br>
<h2 align="center"class="bg-success text-white">TE PODRÍA INTERESAR...</h2>
<h5><p align="center"class="bg-secondary text-white">Preguntas frecuentes durante el 2° y 3° trimestre del embarazo.<br><a href="#" style="color:#FFFF">Leer artículos>></a></h5></p>
      <img class="d-block w-100" src="https://i.blogs.es/2f74bc/1366_2000-33-/450_1000.jpg" alt="">

      <hr class="d-sm-none">
    </div>


    <div class="col-sm-8">
      <h2 align="center"class="bg-warning text-white">TE PODRÍA INTERESAR...</h2>
      <h5><p align="center"class="bg-secondary text-white">Cómo prepararse para la maternidad<br><a href="#" style="color:#FFFF">Leer artículos>></a></h5></p>
      <img class="d-block w-100" src="https://www.argentina.gob.ar/sites/default/files/vinetas_justicia_cerca._06_cuido_mi_embarazo.png" alt="">

      <br><br>
      <h2 align="center"class="bg-info text-white">TE PODRÍA INTERESAR...</h2>
      <h5 align="center"class="bg-secondary text-white">Crecimiento de un bebé en el vientre.</h5>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/sVjbJuCJ_7U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <br>
      <br>

    </div>
  </div>
</div>

<div class="jumbotron text-center" style="background-color: #99d6ff" style="margin-bottom:-2">
  <h4 align="center" style="color:#FFFF">Haz de su nacimiento, un recuerdo inolvidable!<br><small><i align="center" style="color:#FFFF">© Derechos reservados ALUMNOS DE 3TIIRDC® 2019 Aviso de Privacidad <br></i></small></h4>
</div>


</body>
</html>
