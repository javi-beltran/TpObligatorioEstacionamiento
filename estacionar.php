<!doctype html>
<html lang="en">
  <head>
   
    <!--<title>Precios</title>-->

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">
     <link rel="icon" type="image/png" href="https://img-premium.flaticon.com/png/512/75/75905.png?token=exp=1622237150~hmac=ae91707b53b31e03abf07a42bacb1513" sizes="64x64">
    

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script type="text/javascript">
    var cuenta=0;
      function abriringreso(){
        
        var altaI=document.getElementById("divIngreso");
        var baja=document.getElementById("buttonSalida");
        altaI.hidden=false;
        var botonbaja=document.getElementById("buttonSalida");
       botonbaja.hidden=true;
        

    } 
    function abrirsalida(){
        
        var altaS=document.getElementById("divSalida");
        var baja=document.getElementById("buttonIngreso");
        altaS.hidden=false;
        var botonbaja=document.getElementById("buttonIngreso");
       botonbaja.hidden=true;
        

    }
    /* function reset(){
        
        var altaI=document.getElementById("divIngreso");
        var altaS=document.getElementById("divSalida");
        var botonbajaS=document.getElementById("buttonSalida");
       botonbaja.hidden=false;
        var botonbajaI=document.getElementById("buttonIngreso");
       botonbaja.hidden=false;
        

    }*/


    
    </script>
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
    <?php
      include_once"titulo.php";
    ?>
  </head>
  <body>
    
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Cocheras Javi S.A.</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <!--<a class="p-2 text-dark" href="#">Features</a>
    <a class="p-2 text-dark" href="#">Enterprise</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>-->
  </nav>
  <a class="btn btn-outline-primary" href="#">Usuario</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

<!--MANDO POR POST LOS DATOS -->
<!-- class="form-signin" action="hacerlogin.php" method="post" -->

  <form class="form-signin" action="ingresarpatente.php" method="post">
    <input type="button" value ="Ingreso" id="buttonIngreso" onclick="abriringreso()">
    <div id="divIngreso" hidden="true">
  <h1 class="display-4">Ingresar Vehiculo</h1>
  <!--<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>-->
  <input name="Ipatente" type="text" name="txtPatente" id="txtPatente">
  
  <button  type="submit">Cargar</button>
  
  <!--<input type="button" value="Cargar">-->
  </div>
</form>
  <!--Salir vehiculos-->
   <form class="form-signin" action="salidapatente.php" method="post">
  <input type="button" value ="Salida" id="buttonSalida" onclick="abrirsalida()">
  <div id="divSalida" hidden="true">
  <h1 class="display-4">Salir Vehiculo</h1>
  <!--<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>-->
  <input name="Ipatente" type="text" name="txtSalir" id="txtSalir">
  
  <button  type="submit" >Cargar</button>
  
  </div>

</form>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Motos/Bicicletas</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">0.50 Bitcoins</li>
          <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <!--<button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>-->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Copactos/Familiares</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">2.00 Bitcoins <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>-->
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Camiones/Camionestas</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">3.00 Bitcoins <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <!--<button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>-->
      </div>
   
  </div>

  <!--<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>-->
  <?php
    include_once "p_body.php";
  ?>
</div>


    
  </body>
</html>