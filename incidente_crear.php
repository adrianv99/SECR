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
            <li class="active" style="color: rgb(78, 78, 78);"><a href="incidente_mant.php" style="color: rgb(230, 57, 71);">Incidentes</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Registrar Incidente</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Registrar Incidente</h2>
        </div>
    </div>
    <form action="./php/procedimientos_incidente.php?accion=INS" method="POST">
       <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Incidente <span style="color:red">*</span> </label>
                    <select class="form-control"  name="incidente_tipo">
                        <?php
                            $query=consultar_incidente();
                            while ($row=$query->fetch_assoc()){
                                echo"
                                <option value='".$row['id_tipos_incidente']."' >".$row['nombre']."</option>
                            ";
                            }
                        ?>
                    </select>
                </div>
         </div>

         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
         <div class="form-group">
                    <label for="" class="control-label">Sector del Incidente <span style="color:red">*</span> </label>
                    <select class="form-control" name="sector_incidente">
                        <?php
                            $query=consultar_sectores();
                            while ($row=$query->fetch_assoc()){
                                echo"
                                <option value='".$row['id_sector']."' >".$row['nombre']."</option>
                            ";
                            }
                        ?>
                    </select>
                </div>
         </div>
        </div>
        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                <div class="form-group">
                
            </div>
                </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Fecha en que ocurrio el Incidente <span style="color:red">*</span> </label>
                    <input type="date" name="fecha" require="" placeholder="fecha" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
         </div>
        </div>
        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <a href="incidente_mant.php" class="btn btn-danger btn-md">Cancelar</a>
                <input type="submit" value="Guardar" class="btn btn-primary btn-md" id="botonGuardar">
            </div>
         </div>
        </div>

     </form>
    
</div>
<?php  
    include 'php/pie.php';
?>