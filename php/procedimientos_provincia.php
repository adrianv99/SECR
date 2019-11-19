<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }
//=========INSERTAR=============================================================================================
    if($i=="INS"){
        $statu='';
        $nombre=$_POST['provincias'];
        $estado = "A";
        

        $sql="
        INSERT INTO `provincia`
        (
            `nombre`,
            `estado`
        ) VALUES ( 
            '$nombre',
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
        header("Location: ../provincia_mant.php");
    }
//======ACTUALIZAR================================================================================================
    $msj='';
    if($i=="UDT"){
        $msj='';
        $codigo=$_POST['codigo'];
        $nombre=$_POST['provincias'];
        $estado=$_POST['estado'];

        if($estado == "1"){
            $estado = "A";
        }else{
            $estado = "I";
        }

        $sql="
        UPDATE `provincia` SET
            `nombre` ='$nombre',
            `estado`='$estado'
        WHERE
            id_provincia='$codigo'";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }
         echo("erro descripcion:" .mysqli_error($mysqli));
         header("Location: ../provincia_mant.php?s=".$msj);
    }
//========ELIMINAR==================================================================================================
    if($i=="DLT"){
       
        $msj='';
        $codigo=$_GET['id'];
        $eliminar = "I";
        $sql="
        UPDATE `provincia` SET
            `estado`='$eliminar'
        WHERE
            id_provincia='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        
        header("Location: ../provincia_mant.php?s=".$msj);
        
    }
?>

