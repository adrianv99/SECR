<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="img/logo.jpg" />
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/all.min.css"> 
    <link rel="stylesheet" href="css/Estilos_log.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <title>Login SECR</title>
</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-12 main-section">
            <div class="modal-content">
                <form class="col-12" action="./php/login.php?accion=VAL" method="POST">
                    <h1 id="cab"><i class="fas fa-ambulance"></i> SECR</h1>
                    <div class="form-group">
                        <h1>Inicio de Sesión</h1>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <h3 style="color: rgb(112, 112, 112);"><i class="fas fa-user"></i> Usuario:</h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><input type="text" class="form-control" placeholder="Ingrese su nombre de usuario..." name="user_log" autocomplete="off"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <h3 style="color: rgb(112, 112, 112);" ><i class="fas fa-lock"></i> Contraseña: </h3>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <h3><input type="password" class="form-control" placeholder="Ingrese su contraseña..." name="password_log"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row" style="padding-top: 20px;">
                            <input type="submit" value="Acceder" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

