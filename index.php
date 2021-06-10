<!doctype html>
<html lang="en">
  <head>
    
    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/jumbotron/">
    
    
   <!-- <link rel="icon" type="favicon.ico" href="favicon.ico" sizes="16x16">-->
    <!-- FAVICON - LINEAS 28-05-->
    <!--<title>Cocheras Javi S.A.</title>-->
    <!--<link rel="icon" type="image/png" href="favicon.png" sizes="16x16">-->
    <!-- FAVICON-->

    


    <!-- Bootstrap core CSS -->
<!--<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">-->
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

    
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
    <?php
      include_once"titulo.php";
    ?>
  </head>
  <body>
 </div>    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Cocheras Javi S.A.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  
    <!--<ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="error.php">Testing error</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>-->
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
      <!--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>
  </div>
</nav>

<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
      <h1 class="display-3">Cocheras Javi S.A.</h1>
      <div align="center"><img src="1estacionar.png" width="20%">
      <p>Cocheras a bajo costo por el tiempo q Ud. elija.</p>
      <p><a class="btn btn-primary btn-lg" href="estacionar.php" role="button">Ingresar veiculo &raquo;</a></p>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div align="center"class="col-md-4">
        <h2>Minutos</h2>
        <h2>$PRECIO</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
      </div>
      <div align="center" class="col-md-4">
        <h2>Horas</h2>
        <h2>$PRECIO</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
      </div>
      <div align="center"class="col-md-4">
        <h2>Día</h2>
        <h2>$PRECIO</h2>
        <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<footer class="container">
   
    <?php
      include_once"copyright.php";
    ?>
      
  
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

      
  </body>
</html>
