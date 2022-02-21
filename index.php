<!DOCTYPE html>

<html lang="en" xmlns:th="http://www.thymeleaf.org">
    <meta charset="utf-8">
<head>
    <title>Iniciar Sesion</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">

</head>
<body>
    <form action="validar.php" method="post">
    <div class="col-xl-12"  style="background-color:#99d6ff">
        <center><font color="#FFFFFF"><h1>Iniciar Sesiòn</h1><center></font>
       
      </div>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/mama.jpg" th:src="@{/img/mama.jpg}"/>
                </div>
                <form class="col-12" th:action="@{/login}" method="get">
                   
                    <div class="form-group" id="mail-group">
                        <img src="images/correo.png" width="30" height="30" >
                        <p></p>
                        <input type="text" class="form-control" placeholder="Email" name="mail"/>
                    </div>
                   <div class="form-group" id="">
                        <img src="images/candado.png" width="30" height="30" > 
                        <p></p>
                        <input type="password" class="form-control" placeholder="Contrasena" name="pass"/>
                    <a href="index.html"><button type="submit"  class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Iniciar Sesion </button></a>
                              <h6 class="font-italic" style="color: #FFFF" >

                    <center>  <label>¿Nuevo Usuario?</label></center>
                    <center>  <a href="registrar.php" style="color: #FFFF"> Regístrate Ahora </a> </center><br></h6>
                </form>
                
            </div>
            <?php
        if(isset($_POST['submit'])){
            require("registro.php");
        }
    ?>
        </div>
    </div>
</body>
</html>