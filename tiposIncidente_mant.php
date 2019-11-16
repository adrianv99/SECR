<?php  
    include './php/cabe.php';
?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="mantenimientos.php" style="color: rgb(230, 57, 71);">Mantenimientos</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Tipos de incidentes</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Tipos de incidentes</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <a href="tiposIncidente_crear.php" class="btn btn-primary btn-md" style="margin-bottom: 20px; margin-top: 10px;">Nuevo <i class="fas fa-plus-circle"></i></a>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-sm-12">
        <table class="table table-striped" style="text-align: center;" id="example">
                <thead>
                    <tr style="color: rgb(85, 84, 84);">
                        <th>Códido</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query=consultar_tiposIncidente();
                        while ( $row= $query->fetch_assoc()){
                            echo"
                            <tr>
                                <td>".$row['id_tipos_incidente']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['estado']."</td>
                                <td>
                                    <a href='tiposIncidente_modi.php?id=".$row['id_tipos_incidente']."' class='btn btn-sm' style='color: #5bc0de;' ><h4><i class='fas fa-pencil-alt'></i></h4> </a>
                                </td>
                                <td>
                                    <a href='php/procedimientos_tiposIncidente.php?accion=DLT&id=".$row['id_tipos_incidente']."' class='btn btn-sm' style='color: #d9534f;'><h4><i class='fas fa-trash-alt'></i></h4> </a>
                                </td>
                            </tr>
                        ";
                        }
                    ?>
                    
                </tbody>
     </table>
        </div>
    </div>




</div>




<?php  
    include 'php/pie.php';
?>