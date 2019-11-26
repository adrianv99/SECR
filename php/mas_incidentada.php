<?php 
$x = 0;
for ($i = 1; ; $i++) {
    if ($i > 32) {
        break;
    }
    //funcion que cuenta los incidentes de cada provincida
    $query=incidentes_x_provincias_x_id($i);
    $row= $query->fetch_assoc();
    //almacena en una lista el total de cada provincia
    $lista[$x] = $row["COUNT(incidente.id_incidente)"];
    $x = $x + 1;
}
//devuelve el valor mas alto de la lista
$mas_alto = max($lista);
//busca en que posicion esta el valor mas alto
$provincia_mas_incidentada = array_search($mas_alto, $lista);
//aumentamos en 1 el indice de la lista, el cual es el id de la provincia.
$provincia_mas_incidentada = $provincia_mas_incidentada + 1;
//vaciamos la lista 
$lista = null;
?>