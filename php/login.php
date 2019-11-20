<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
    $control=0;
    if($i == "VAL"){
        include 'select.php';
        session_start();
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
                $_SESSION['username'] = $user['id_usuario'];
                $_SESSION['cargo'] = $user['administrador'];
                header("Location: ../inicio.php");
                break;
            }
        }
        if($validar == 0){
            $control = 1;
            header("Location: ../Alertas.php");
        }

    }
?>