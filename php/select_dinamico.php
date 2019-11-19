<?php/*
function getMunicipio(){
require_once 'conexion.php';
$query="SELECT * FROM provincia where id_provincia='$id'";
$result = $mysqli->query($query);
$lista = '<option value="0">Elige un municipio</option>';
while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $lista .= '<option value="$row[id_municipio]">$row[nombre]</option>';
}
return $lista;
?>*/