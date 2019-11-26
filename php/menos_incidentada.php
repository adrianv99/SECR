<?php 
$x = 0;
for ($i = 1; ; $i++) {
    if ($i > 32) {
        break;
    }
    $query=incidentes_x_provincias_x_id($i);
    $row= $query->fetch_assoc();
    $lista[$x] = $row["COUNT(incidente.id_incidente)"];
    $x = $x + 1;
}

$menos_alto = min($lista);
$provincia_menos_incidentada = array_search($menos_alto, $lista);
$provincia_menos_incidentada = $provincia_menos_incidentada + 1;
$lista = null;
?>