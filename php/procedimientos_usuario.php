<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
//=========INSERTA=================================================================================================
    if($i=="INS"){
        $statu='';
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $telefono=$_POST['telefonos'];
        $direccion=$_POST['direcciones'];
        $correo=$_POST['correos'];
        $usuario=$_POST['usuarios'];
        $contrasena=$_POST['contrasenas'];
        $cargo = $_POST['administrador'];
        if($cargo == "on"){
            $cargo = "ADM";
        }else{
            $cargo = "REG";
        } 
        $estado = "A";

       


        $sql="
        INSERT INTO `usuario`
        (
            `nombre`,
            `apellido`,
            `telefono`,
            `direccion`,
            `correo`,
            `nombre_usuario`,
            `contrasena`,
            `administrador`,
            `estado`
        ) VALUES ( 
            '$nombre',
            '$apellido',
            '$telefono',
            '$direccion',
            '$correo',
            '$usuario',
            '$contrasena',
            '$cargo',
            '$estado'
        )";
        if($mysqli->query($sql)){
            $status='success';
        }
        else{
            $status='error';
            echo "error" .mysqli_error($mysqli);
        }
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../usuario_mant.php?s=".$status);
    }
//============ACTUALIZAR=======================================================================================================
    $msj='';
    if($i=="UDT"){
        $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['nombres'];
        $apellido=$_POST['apellidos'];
        $telefono=$_POST['telefonos'];
        $direccion=$_POST['direcciones'];
        $correo=$_POST['correos'];
        $usuario=$_POST['usuarios'];
        $contrasena=$_POST['contrasenas'];
        $estado=$_POST['estado'];
        $cargo = $_POST['administrador'];

        if($cargo == "1"){
            $cargo = "ADM";
        }else{
            $cargo = "REG";
        }

        if($estado == "1"){
            $estado = "A";
        }else{
            $estado = "I";
        }
        


        $sql="
        UPDATE `usuario` SET
            `nombre` ='$nombre',
            `apellido` ='$apellido',
            `telefono`='$telefono',
            `direccion`='$direccion',
            `correo`='$correo',
            `direccion`='$direccion',
            `nombre_usuario`='$usuario',
            `contrasena`='$contrasena',
            `administrador`='$cargo',
            `estado`='$estado'
        WHERE
            id_usuario='$codigo'";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../usuario_mant.php?s=".$msj);
    }
//========Eliminar===================================================================================================
    if($i=="DLT"){
        $msj='';
        $codigo=$_GET['id'];
        $eliminar = "I";
        $sql="
        UPDATE `usuario` SET
            `estado`='$eliminar'
        WHERE
            id_usuario='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        header("Location: ../usuario_mant.php?s=".$msj);
    }

?>
