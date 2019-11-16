<?php  
    include './php/cabe.php';
    $query=consultar_provincias_id($_GET['id']);
    $row=$query->fetch_assoc();
?>

<div class="container">

    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="mantenimientos.php" style="color: rgb(230, 57, 71);">Mantenimientos</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="provincia_mant.php" style="color: rgb(230, 57, 71);">Provincia</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Editar provincia</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Editar provincia</h2>
        </div>
    </div>

    <form action="./php/procedimientos_provincia.php?accion=UDT" method="POST">

    <div class="row" id="fila">
        <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_provincia']?>">
            </div>
        </div>
    </div>

    <div class="row" id="fila">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Nombre de la provincia <span style="color:red">*</span> </label>
                    <input type="text" name="provincias" required="" placeholder="Provincia" class="form-control" value="<?php echo $row['nombre']?>">
                </div>
            </div>
        </div>

    <div class="row" id="fila">
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
                <div class="form-group" id="botonesCrearP">
                    <a href="provincia_mant.php" class="btn btn-danger btn-md">Cancelar</a>
                    <input type="submit" value="Guardar" class="btn btn-primary btn-md" id="botonGuardar">
                </div>
            </div>
        </div>
    </form>
</div>



<?php  
    include 'php/pie.php';
?>