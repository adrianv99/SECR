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
            <li class="active" style="color: rgb(78, 78, 78);"><a href="usuario_mant.php" style="color: rgb(230, 57, 71);">Usuarios</a></li>
            <li class="active" style="color: rgb(78, 78, 78);">/</li>
            <li class="active" style="color: rgb(78, 78, 78);">Crear usuario</li>
        </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Crear Usuario</h2>
        </div>
    </div>
    <form action="./php/procedimientos_usuario.php?accion=INS" method="POST">
       <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Nombre <span style="color:red">*</span> </label>
                <input type="text" name="nombres" required="" placeholder="Nombre" class="form-control" autocomplete="off">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Apellido <span style="color:red">*</span> </label>
                <input type="text" name="apellidos" required="" placeholder="Apellido" class="form-control" autocomplete="off">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Teléfono <span style="color:red">*</span> </label>
                <input type="text" name="telefonos" required="" placeholder="Teléfono" class="form-control" autocomplete="off">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Dirección <span style="color:red">*</span> </label>
                <input type="text" name="direcciones" required="" placeholder="Dirección" class="form-control" autocomplete="off">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Correo <span style="color:red">*</span> </label>
                <input type="e-mail" name="correos" required="" placeholder="Correo" class="form-control">
            </div>
         </div>
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group">
                <label for="" class="control-label">Nombre de usuario <span style="color:red">*</span> </label>
                <input type="text" name="usuarios" required="" placeholder="Nombre de usuario" class="form-control" autocomplete="off">
            </div>
         </div>
        </div>

        <div class="row" id="fila">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Contraseña <span style="color:red">*</span> </label>
                    <input type="text" name="contrasenas" required="" placeholder="Contraseña" class="form-control" id="contrasenas" autocomplete="off">
                </div>
            </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group form-check custom-checkbox">
                <label class="form-check-label" for="defaultCheck1">  
                    <input class="form-check-input" type="checkbox" name="administrador">Asignar cargo de administrador
                </label>
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