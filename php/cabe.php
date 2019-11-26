<?php
    include('php/select.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Sistema Estadistico de la Cruz Roja</title>
  <link rel="icon" type="image/jpg" href="img/logo.jpg" />
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/all.min.css"> 
  <link rel="stylesheet" href="css/Estilos_titulo.css" >
  <link rel="stylesheet" href="css/Estilos_Pais.css" >
  <link rel="stylesheet" href="css/EstilosCab1.css">
  <link rel="stylesheet" href="css/Estilos_Man.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body style="background: white;">
  <nav class="navbar navbar-expand-lg navbar-dark  static-top">
    <div class="container">
      <a class="navbar-brand" href="inicio.php"><h1><i class="fas fa-ambulance"></i> SECR</h1></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="inicio.php"><h5><i class="fas fa-home"></i> Inicio</h5></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="estadisticas.php"><h5><i class="fas fa-chart-bar"></i> Estadisticas</h5></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="mantenimientos.php"><h5><i class="fas fa-tools"></i> Mantenimientos</h5></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="php/cerrar_sesion.php"><h5><i class="fas fa-sign-out-alt"></i> Salir</h5></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 
  
 