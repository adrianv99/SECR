<?php
    include 'conexion.php';
    $i='';
    if(isset($_GET['accion'])){
        $i=$_GET['accion'];
    }

//=========INSERTAR=============================================================================================
    if($i=="INS"){
        $statu='';
        $tipo_incidente=$_POST['incidente_tipo'];
        $id_sector=$_POST['sector_incidente'];
        $id_fecha=$_POST['fecha'];
        $estado="A";


        $sql="
        INSERT INTO `incidente`
        (
            `id_tipo_de_incidente`,
            `id_sector`,
            `fecha`,
            `estado`
        ) VALUES ( 
            '$tipo_incidente',
            '$id_sector',
            '$id_fecha',
            '$estado'
        )";
            if($mysqli->query($sql)){
                $status='success';
            }
            else{
                $status='error';
                echo "error" .mysqli_error($mysqli);
            }
            echo("error descripcion:" .mysqli_error($mysqli));
            //header("Location: ../incidente_mant.php?s=".$status);

        }

