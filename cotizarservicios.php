<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
    <meta charset="utf-8">
<head>
    <title>Registro</title>

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
  <div class="col-xl-12"  style="background-color:#99d6ff"><br>
        <center><font color="#FFFFFF"><h1>Bienvenido Al Registro De Tu Cotizacion</h1><center></font>
       <br>
      </div>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="static/img/mama.jpg" th:src="@{/img/mama.jpg}"/>
                </div>
                <form method="post" action="" >
                <form class="col-12" th:action="@{/login}" method="get">

            <h5><center><label>¿Ya Cotizaste?</label></center>
                    <center><a href="maternidad.php" style="color: #333CFF">Volver Al Menú. </a> </center></h5><br>
                   
                    <div class="form-group" >
                        
                        <p>INGRESA TU NOMBRE COMPLETO</p>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo"/>
                    </div>
                    <div class="form-group" id="">
                       
                        <p>INGRESA TU TELEFONO</p>
                        <input type="text" class="form-control" placeholder=" Numero De Telefono" name="tel"/>
                    </div>
                    <div class="form-group" id="">
                       
                        <p>CORREO ELECTRONICO</p>
                        <input type="text" class="form-control" placeholder=" Ingresa Tu Correo" name="correo"/>
                    </div>

                    <div class="form-group" id="">
                       
                        <p>ELIJA SU EDAD</p>
                        <select name="edad" class="custom-select">
    <option selected>Edad</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
     <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
     <option value="33">33</option>
    <option value="34">34</option>
    <option value="36">35</option>
     <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
     <option value="40">40</option>
     <option value="41">41</option>
    <option value="42">42</option>
   <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
     <option value="46">46</option>
    <option value="46">46</option>
    <option value="47">47</option>
     <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
  </select>

                    </div>

                   <div class="form-group" id="">
                     
                     <p>INGRESA TU DIRECCION</p>
                        <input type="text" class="form-control" placeholder="Direccion" name="direccion"/>
                    </div>

                         <div class="form-group" id="">
                     
                     <p>¿ACTUALMENTE ESTA EMBARAZADA</p>
                        <input type="text" class="form-control" placeholder="Si/No" name="aembarazada"/>
                    </div>
                    
                      <div class="form-group" id="">
                       
                        <p>ELIJA ALGUN PAQUETE</p>
                        <select name="paquete" class="custom-select">
    <option selected>Seleccione un paquete</option>
    <option >Parto Normal</option>
    <option >Parto Cesarea </option>
  </select>
</div>
                       <div class="form-group" id="">
                       
                        <p>¿CUANTOS BEBES TENDRAS?</p>
                        <select name="bebes" class="custom-select">
    <option selected>Bebès</option>
    <option>1 Bebè</option>
    <option>2 Bebès</option>
    <option>3 Bebès</option>
  </select>
                    </div>
 <div class="form-group" id="">
                     
                     <p>¿CUANTO PIENSAS GASTAR EN EL PARTO?</p>
                        <input type="text" class="form-control" placeholder="Ingrese Una Cifra" name="eparto"/>
                    </div>
                    
                    <center><a href="maternidad.php"></a><button type="submit"  name="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Enviar Cotizacion</button></center></a></center>
                
                </form>
              </form>
            </div>
        </div>
    </div>


 <?php
        if(isset($_POST['submit'])){
            require("registro2.php");
        }
    ?>
</body>
</html>

