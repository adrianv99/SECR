<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
//=========INSERTAR=============================================================================================
    if($i=="INS"){
        $statu='';
        $nombre=$_POST['sectores'];
        $municipio=$_POST['municipio_pertenece'];
        $estado = "A";


        $sql="
        INSERT INTO `sector`
        (
            `nombre`,
            `id_municipio`,
            `estado`
        ) VALUES ( 
            '$nombre',
            '$municipio',
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
        header("Location: ../sector_mant.php?s=".$status);
    }
//======ACTUALIZAR================================================================================================
    $msj='';
    if($i=="UDT"){
        $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['sectores'];
        $municipio=$_POST['municipio_pertenece'];
        $estado=$_POST['estado'];

        if($estado == "1"){
            $estado = "A";
        }else{
            $estado = "I";
        }

        $sql="
        UPDATE `sector` SET
            `nombre` ='$nombre',
            `id_municipio` ='$municipio',
            `estado`='$estado'
        WHERE
            id_sector='$codigo'";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }
         echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../sector_mant.php?s=".$msj);
    }
//========ELIMINAR==================================================================================================
    if($i=="DLT"){
        $msj='';
        $codigo=$_GET['id'];
        $eliminar = "I";
        $sql="
        UPDATE `sector` SET
            `estado`='$eliminar'
        WHERE
            id_sector='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        header("Location: ../sector_mant.php?s=".$msj);
    }




?>