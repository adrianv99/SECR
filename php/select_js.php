<?php
function Consulta_Mun(){
    include('conexion.php');
    var_dump($_POST);
    $select_muni = "<option value='0'>Elige un municipio</option>";
    $id= $_POST['id_prov'];
    $sql="SELECT * FROM municipio where id_provincia=$id";
    $lista_muni=$mysqli->query($sql);
    while($row = $lista_muni->fetch_array(MYSQLI_ASSOC)){
        $select_muni .= "<option value='$row[id_municipio]'>$row[nombre]</option>";
      }
      return $select_muni;
    }  
    echo Consulta_Mun(); 
      
?>