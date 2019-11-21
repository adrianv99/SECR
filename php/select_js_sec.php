<?php
function Consulta_Sec(){
    include('conexion.php');
    var_dump($_POST);
    $select_sec = "<option value='0'>Elige un sector</option>";
    $id= $_POST['id_mun'];
    $sql="SELECT * FROM sector where id_municipio=$id";
    $lista_muni=$mysqli->query($sql);
    while($row = $lista_muni->fetch_array(MYSQLI_ASSOC)){
        $select_sec .= "<option value='$row[id_sector]'>$row[nombre]</option>";
      }
      return $select_sec;
    }  
    echo Consulta_Sec(); 
?>