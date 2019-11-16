<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
//=========INSERTAR=============================================================================================
    if($i=="INS"){
        $statu='';
        $nombre=$_POST['incidentes'];
        $des=$_POST['descripcion'];
        $estado = "A";


        $sql="
        INSERT INTO `tipos_incidente`
        (
            `nombre`,
            `descripcion`,
            `estado`
        ) VALUES ( 
            '$nombre',
            '$des',
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
        header("Location: ../tiposIncidente_mant.php?s=".$status);
    }
//======ACTUALIZAR================================================================================================
    $msj='';
    if($i=="UDT"){
        $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['incidentes'];
        $des=$_POST['descripcion'];
        $estado=$_POST['estado'];

        if($estado == "1"){
            $estado = "A";
        }else{
            $estado = "I";
        }

        $sql="
        UPDATE `tipos_incidente` SET
            `nombre` ='$nombre',
            `descripcion` ='$des',
            `estado`='$estado'
        WHERE
            id_tipos_incidente='$codigo'";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../tiposIncidente_mant.php?s=".$msj);
    }
//========ELIMINAR==================================================================================================
    if($i=="DLT"){
        $msj='';
        $codigo=$_GET['id'];
        $eliminar = "I";
        $sql="
        UPDATE `tipos_incidente` SET
            `estado`='$eliminar'
        WHERE
            id_tipos_incidente='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        header("Location: ../tiposIncidente_mant.php?s=".$msj);
    }




?>