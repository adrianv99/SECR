<?php  
    include './php/cabe.php';
    $query=consultar_incidente_id($_GET['id']);
    $row=$query->fetch_assoc();

    $query2=consultar_incidente_id($row['id_incidente']);
    $row2=$query2->fetch_assoc();
   
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
            <li class="active" style="color: rgb(78, 78, 78);">Modificar Incidente</li>
        </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Modificar Incidente</h2>
        </div>
    </div>
    <form action="./php/procedimientos_incidente.php?accion=INS" method="POST" onSubmit="return validarSector();">
       <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Incidente <span style="color:red">*</span> </label>
                    <select class="form-control"  name="incidente_tipo">
                    <option value="<?php echo $row2['id_incidente'] ?>" <?php if($row['id_incidente']==$row2['id_incidente']){echo "selected";} ?>> <?php echo $row2['nombre']?> </option>
                        <?php
                            $query2=consultar_incidente_id();
                            while ($row2=$query2->fetch_assoc()){
                                if($row['id_incidente'] != $row2['id_incidente']){
                                    echo"
                                    <option value='".$row2['id_incidente']."'> ".$row2['nombre']."</option>
                                ";
                                }
                               
                            }
                        ?>
                    </select>
                </div>
         </div>

         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Provincia del Incidente <span style="color:red">*</span> </label>
                    <select class="form-control" id="prov" name="provincia_incidente">
                    <option value="<?php echo $row2['id_provincia'] ?>" <?php if($row['id_provincia']==$row2['id_provincia']){echo "selected";} ?>> <?php echo $row2['nombre']?> </option>
                        <?php
                            $query=consultar_provincias();
                            
                            while ($row=$query->fetch_assoc()){
                                echo"
                                <option value='".$row2['id_provincia']."' >".$row2['nombre']."</option>
                            ";
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
                <div class="form-group">
                    <label for="" class="control-label">Municipio del Incidente <span style="color:red">*</span> </label>
                    <select class="form-control" id="municipio" name="municipio_pertenece">  
                    <option value="<?php echo $row2['id_municipio'] ?>" <?php if($row['id_municipio']==$row2['id_municipio']){echo "selected";} ?>> <?php echo $row2['nombre']?> </option>
                        <?php
                            $query2=consultar_municipio();
                            while ($row2=$query2->fetch_assoc()){
                                if($row['id_municipio'] != $row2['id_municipio']){
                                    echo"
                                    <option value='".$row2['id_municipio']."'> ".$row2['nombre']."</option>
                                ";
                                }
                               
                            }
                        ?>              
                    </select>
                </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
         <div class="form-group">
                    <label for="" class="control-label">Sector del Incidente <span style="color:red">*</span> </label>
                    <select class="form-control" id="sector" name="sector_incidente">
                    <option value="<?php echo $row2['id_sector'] ?>" <?php if($row['id_sector']==$row2['id_sector']){echo "selected";} ?>> <?php echo $row2['nombre']?> </option>
                        <?php
                            $quer2y=consultar_sectores();
                            while ($row2=$query2->fetch_assoc()){
                               /* echo"
                                <option value='".$row['id_sector']."' >".$row['nombre']."</option>
                            ";*/
                            }
                        ?>
                    </select>
                </div>
         </div>
        </div>
        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Fecha en que ocurrio el Incidente <span style="color:red">*</span> </label>
                    <input type="date" name="fecha" require="" placeholder="fecha" class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                </div>
 
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
         <div class="form-group">
                    <label for="" class="control-label">Diagnostico <span style="color:red">*</span> </label>
                    <select class="form-control" id="diagnostico" name="diagnostico">
                        <?php
                        
                            $query=consultar_diagnostico();
                            while ($row=$query->fetch_assoc()){
                               echo"
                                <option value='".$row['id_diagnostico']."' >".$row['nombre']."</option>
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