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
        $usuario = $_SESSION['username'];
        $id_diagnostico=$_POST['diagnostico'];



        $sql="
        INSERT INTO `incidente`
        (
            `id_tipo_de_incidente`,
            `id_sector`,
            `id_usuario`,
            `id_diagnostico`,
            `fecha`,
            `estado`
        ) VALUES ( 
            '$tipo_incidente',
            '$id_sector',
            '$usuario',
            '$id_diagnostico',
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
            $_SESSION['message'] = 'Se ha guardado correctamente';
            $_SESSION['message_type'] = 'success';
            echo("error descripcion:" .mysqli_error($mysqli));
            header("Location: ../incidente_mant.php?s=".$status);

        }

