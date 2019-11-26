<?php
$mysqli = new mysqli("localhost","root","","CR");
if($mysqli->connect_errno){
    echo "fallo la conexion dec la bendita base de datos MySql (" .  $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
?>