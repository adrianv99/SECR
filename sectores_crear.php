<?php  
    include './php/cabe.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 id="Titulo">Crear Sector</h2>
        </div>
    </div>
    <form>
    <div class="row" id="fila">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Nombre del sector <span style="color:red">*</span> </label>
                    <input type="text" name="sectores" required="" placeholder="Sector" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                <div class="form-group">
                    <label for="" class="control-label">Nombre del municipio al que pertenece <span style="color:red">*</span> </label>
                    <input type="text" name="pertenece_municipios" required="" placeholder="Municipio" class="form-control">
                </div>
            </div>
        </div>

        <div class="row" id="fila">
         <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
            <div class="form-group" id="botonesCrearSect">
                <a href="#" class="btn btn-danger btn-md">Cancelar</a>
                <a href="#" class="btn btn-primary btn-md" id="botonGuardar">Guardar</a>
            </div>
         </div>
        </div>
    </form>
</div>



<?php  
    include 'php/pie.php';
?>