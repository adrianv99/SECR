<?php 
    session_start();
    $cargo = $_SESSION['cargo'];
    if($cargo == "ADM"){
        include './php/cabe.php';
    }
    else{
        include './php/cabeR.php';
    }
?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);">Inicio</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Inicio</h2>
        </div>
    </div>

    
</div>



<?php  
    include 'php/pie.php';
?>