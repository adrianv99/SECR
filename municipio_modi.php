<?php  
    include './php/cabe.php';
    $query=consultar_municipios_id($_GET['id']);
    $row=$query->fetch_assoc();

    $query2=consultar_provincias_id($row['id_provincia']);
    $row2=$query2->fetch_assoc();
?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="mantenimientos.php" style="color: rgb(230, 57, 71);">Mantenimientos</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="municipio_mant.php" style="color: rgb(230, 57, 71);">Municipio</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Editar municipio</li>
        </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Editar municipio</h2>
        </div>
    </div>

    <form action="./php/procedimientos_municipio.php?accion=UDT" method="POST">
        <div class="row" id="fila">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_municipio']?>">
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Nombre del municipio <span style="color:red">*</span> </label>
                        <input type="text" name="municipios" required="" placeholder="Municipio" class="form-control" value="<?php echo $row['nombre']?>">
                    </div>
                </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Nombre de la provincia a la que pertenece <span style="color:red">*</span> </label>
                    <select class="form-control" name="provincia_pertenece">
                        <option value="<?php echo $row2['id_provincia'] ?>" <?php if($row['id_provincia']==$row2['id_provincia']){echo "selected";} ?>> <?php echo $row2['nombre']?> </option>
                        <?php
                            $query2=consultar_provincias();
                            while ($row2=$query2->fetch_assoc()){
                                if($row['id_provincia'] != $row2['id_provincia']){
                                    echo"
                                    <option value='".$row2['id_provincia']."'> ".$row2['nombre']."</option>
                                ";
                                }
                               
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Estado <span style="color:red">*</span> </label>
                    <select class="form-control" name="estado">
                        <option value="1" <?php if($row['estado']=="A"){echo "selected";} ?>>Activo</option>
                        <option value="0" <?php if($row['estado']=="I"){echo "selected";} ?>>Inactivo</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group" id="botonesCrearSect">
                <a href="municipio_mant.php" class="btn btn-danger btn-md">Cancelar</a>
                <input type="submit" value="Guardar" class="btn btn-primary btn-md" id="botonGuardar">
            </div>
         </div>
        </div>
    </form>
</div>



<?php  
    include 'php/pie.php';
?>