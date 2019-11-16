<?php  
    include './php/cabe.php';
    $query=consultar_usuarios_id($_GET['id']);
    $row=$query->fetch_assoc();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <ol class = "breadcrumb" style="margin-top: 20px; background: rgba(230, 235, 243, 0.74);">
            <li style="color: rgb(78, 78, 78);">Estas en:</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="mantenimientos.php" style="color: rgb(230, 57, 71);">Mantenimientos</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);"><a href="usuario_mant.php" style="color: rgb(230, 57, 71);">Usuarios</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Editar usuario</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Editar Usuario</h2>
        </div>
    </div>
    <form action="./php/procedimientos_usuario.php?accion=UDT" method="POST">

        <div class="row">
                <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                    <div class="form-group">
                        <label for="" class="control-label">Codigo <span style="color:red">*</span> </label>
                        <input type="text" name="codigo" require="" placeholder="codigo" class="form-control" readonly="" value="<?php echo $row['id_usuario']?>">
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
                <label for="" class="control-label">Nombre <span style="color:red">*</span> </label>
                <input type="text" name="nombres" required="" placeholder="Nombre" class="form-control" value="<?php echo $row['nombre']?>">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Apellido <span style="color:red">*</span> </label>
                <input type="text" name="apellidos" required="" placeholder="Apellido" class="form-control" value="<?php echo $row['apellido']?>">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Teléfono <span style="color:red">*</span> </label>
                <input type="text" name="telefonos" required="" placeholder="Teléfono" class="form-control" value="<?php echo $row['telefono']?>">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Dirección <span style="color:red">*</span> </label>
                <input type="text" name="direcciones" required="" placeholder="Dirección" class="form-control" value="<?php echo $row['direccion']?>">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Correo <span style="color:red">*</span> </label>
                <input type="e-mail" name="correos" required="" placeholder="Correo" class="form-control" value="<?php echo $row['correo']?>">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Nombre de usuario <span style="color:red">*</span> </label>
                <input type="text" name="usuarios" required="" placeholder="Nombre de usuario" class="form-control" value="<?php echo $row['nombre_usuario']?>">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Contraseña <span style="color:red">*</span> </label>
                <input type="text" name="contrasenas" required="" placeholder="Contraseña" class="form-control" id="contrasenas" value="<?php echo $row['contrasena']?>">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Confirmar contraseña <span style="color:red">*</span> </label>
                <input type="text" name="confirmar" required="" placeholder="Confirmar contraseña" class="form-control" id="confirmar" value="<?php echo $row['contrasena']?>">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Cargo <span style="color:red">*</span> </label>
                <select class="form-control" name="administrador">
                    <option value="1" <?php if($row['administrador']=="ADM"){echo "selected";} ?>>Administrador</option>
                    <option value="0" <?php if($row['administrador']=="REG"){echo "selected";} ?>>Regular</option>
                </select>
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <a href="usuario_mant.php" class="btn btn-danger btn-md">Cancelar</a>
                <input type="submit" value="Guardar" class="btn btn-primary btn-md" id="botonGuardar">
            </div>
         </div>
        </div>

     </form>
    
</div>


<?php  
    include 'php/pie.php';
?>