<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
//=========INSERTAR=============================================================================================
    if($i=="INS"){
        $statu='';
        $nombre=$_POST['municipios'];
        $provincia=$_POST['provincia_pertenece'];
        $estado = "A";


        $sql="
        INSERT INTO `municipio`
        (
            `nombre`,
            `id_provincia`,
            `estado`
        ) VALUES ( 
            '$nombre',
            '$provincia',
            '$estado'
        )";
        if($mysqli->query($sql)){
            $status='success';
        }
        else{
            $status='error';
            echo "error" .mysqli_error($mysqli);
        }
        $_SESSION['message'] = 'Se ha guardado correctamente';
        $_SESSION['message_type'] = 'success';
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../municipio_mant.php?s=".$status);
    }
//======ACTUALIZAR================================================================================================
    $msj='';
    if($i=="UDT"){
        $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['municipios'];
        $provincia=$_POST['provincia_pertenece'];
        $estado=$_POST['estado'];

        if($estado == "1"){
            $estado = "A";
        }else{
            $estado = "I";
        }

        $sql="
        UPDATE `municipio` SET
            `nombre` ='$nombre',
            `id_provincia` ='$provincia',
            `estado`='$estado'
        WHERE
            id_municipio='$codigo'";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }

        $_SESSION['message'] = 'Se ha guardado correctamente';
        $_SESSION['message_type'] = 'success';
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../municipio_mant.php?s=".$msj);
    }
//========ELIMINAR==================================================================================================
    if($i=="DLT"){
        $msj='';
        $codigo=$_GET['id'];
        $eliminar = "I";
        $sql="
        UPDATE `municipio` SET
            `estado`='$eliminar'
        WHERE
            id_municipio='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        $_SESSION['message'] = 'Se ha eliminado un registro';
        $_SESSION['message_type'] = 'warning';
        $_SESSION['codigo'] = $codigo;
        header("Location: ../municipio_mant.php?s=".$msj);
    }
//==========activar=====================================================================================
if($i=="CANCEL"){
    $msj='';
    $codigo = $_SESSION['codigo'];
    $eliminar = "A";
    $sql="
    UPDATE `municipio` SET
        `estado`='$eliminar'
    WHERE
        id_municipio='$codigo'";

    if($mysqli->query($sql)){
        $status='successdlt';
    }
    else{
        $status='errordlt';
        echo "error" .mysqli_error($mysqli);
    }
    $_SESSION['message'] = 'Registro a salvo';
    $_SESSION['message_type'] = 'info';
    $_SESSION['codigo'] = NULL;
    header("Location: ../municipio_mant.php?s=".$msj);
}




?>