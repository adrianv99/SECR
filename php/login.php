<?php
    include 'conexion.php';
    include 'select.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
    $control=0;
    if($i == "VAL"){
        $nombre=$_POST['user_log'];
        $password=$_POST['password_log'];
        $validar=0;
        $query_user=consultar_usuarios();
        while ($user=$query_user->fetch_assoc()){
            if($user['nombre_usuario'] == $nombre ){
                if($user['contrasena'] == $password){
                   $validar=1;
                }
                
            }
            if($validar == 1){
                header("Location: ../mantenimientos.php");
                break;
            }
        }
        if($validar == 0){
            $control = 1;
            header("Location: ../Alertas.php");
        }

    }

?>