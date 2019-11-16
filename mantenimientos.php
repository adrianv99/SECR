<?php  
    include './php/cabe.php';
?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);">Mantenimientos</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Mantenimientos</h2>
        </div>
    </div>

    <div class="row text-center" >
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="usuario_mant.php" class="btn btn-lg" id="margenEspecial2"><h3><i class="fas fa-user"></i> Usuarios</h3></a>
        </div>
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="incidente_mant.php" class="btn btn-lg" id="margenEspecial2"><h3><i class="fas fa-briefcase-medical"></i> Incidentes</h3></a>
        </div>
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="tiposIncidente_mant.php" class="btn btn-lg" id="margenEspecial"><h3><i class="fas fa-user-injured"></i> Tipos de incidentes</h3></a>
        </div>
    </div>

    <div class="row text-center" id="Fila2" style="padding-bottom: 120px;">
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="sector_mant.php" class="btn btn-lg" id="margenEspecial2"><h3><i class="fas fa-map-marker-alt"></i> Sectores</h3></a>
        </div>
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="municipio_mant.php" class="btn btn-lg" id="margenEspecial2"><h3><i class="fas fa-map"></i> Municipios</h3></a>
        </div>
        <div class="col-md-4 col-sm-12 col-lg-4">
                <a href="provincia_mant.php" class="btn btn-lg" id="margenEspecial2"><h3><i class="fas fa-city"></i> Provincias</h3></a>
        </div>
    </div>
</div>



<?php  
    include 'php/pie.php';
?>