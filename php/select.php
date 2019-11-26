<?php
function consultar_usuarios(){
    include('conexion.php');
    $sql="SELECT * FROM usuario";
    return $result=$mysqli->query($sql);
}

function consultar_usuarios_id($id){
    include('conexion.php');
    $sql="SELECT * FROM usuario where id_usuario='$id'";
    return $result=$mysqli->query($sql);
}


/*function consultar_usuarios2(){
    include('conexion.php');
    $sql="SELECT COUNT(id_usuario) FROM usuario";
    return $result=$mysqli->query($sql);
}*/


//===============================================================================================================
function consultar_tiposIncidente(){
    include('conexion.php');
    $sql="SELECT * FROM tipos_incidente";
    return $result=$mysqli->query($sql);
}

function consultar_tiposIncidente_id($id){
    include('conexion.php');
    $sql="SELECT * FROM tipos_incidente where id_tipos_incidente='$id'";
    return $result=$mysqli->query($sql);
}
//===============================================================================================================
function consultar_provincias(){
    include('conexion.php');
    $sql="SELECT * FROM provincia";
    return $result=$mysqli->query($sql);
}

function consultar_provincias_id($id){
    include('conexion2.php');
    $sql="SELECT * FROM provincia where id_provincia='$id'";
    return $result=$mysqli->query($sql);
}

//===============================================================================================================
function consultar_municipios(){
    include('conexion.php');
    $sql="SELECT * FROM municipio";
    return $result=$mysqli->query($sql);
}

function consultar_municipios_id($id){
    include('conexion.php');
    $sql="SELECT * FROM municipio where id_municipio='$id'";
    return $result=$mysqli->query($sql);
}

function consultar_municipios_id_incidente(){
    include('conexion.php');
    $sql="SELECT * FROM municipio where id_provincia='$id_provincia'";
    return $result=$mysqli->query($sql);
}

function consultar_join_municipios(){
    include('conexion.php');
    $sql="SELECT municipio.id_municipio, municipio.nombre AS nombre_municipio, provincia.nombre AS nombre_provincia
    , municipio.estado FROM municipio INNER JOIN provincia 
    ON municipio.id_provincia = provincia.id_provincia";
    return $result=$mysqli->query($sql);
}

//=================================================================================================================

function consultar_sectores(){
    include('conexion.php');
    $sql="SELECT * FROM sector";
    return $result=$mysqli->query($sql);
}

function consultar_sectores_id($id){
    include('conexion.php');
    $sql="SELECT * FROM sector where id_sector='$id'";
    return $result=$mysqli->query($sql);
}

function consultar_sectores_id_incidente($id_municipio){
    include('conexion.php');
    $sql="SELECT * FROM sector where id_municipio='$id_municipio'";
    return $result=$mysqli->query($sql);
}

function consultar_join_sectores(){
    include('conexion.php');
    $sql="SELECT sector.id_sector, sector.nombre AS nombre_sector, municipio.nombre AS nombre_municipio
    , sector.estado FROM sector INNER JOIN municipio 
    ON sector.id_municipio = municipio.id_municipio";
    return $result=$mysqli->query($sql);
}

//=================================================================================================================

function consultar_incidente(){
    include('conexion.php');
    $sql="SELECT * FROM tipos_incidente";
    return $result=$mysqli->query($sql);
}

function consultar_incidente_id($id){
    include('conexion.php');
    $sql="SELECT * FROM incidente where id_incidente='$id'";
    return $result=$mysqli->query($sql);
}

function consultar_join_incidente(){
    include('conexion.php');
    $sql="SELECT incidente.id_incidente, tipos_incidente.nombre as nombre_incidente, 
    sector.nombre as nombre_sector, municipio.nombre as municipio_nombre, provincia.nombre as nombre_provincia,
    incidente.fecha as fecha, incidente.estado as estado
    FROM incidente
    INNER JOIN tipos_incidente
    ON incidente.id_tipo_de_incidente = tipos_incidente.id_tipos_incidente
    INNER JOIN sector
    ON incidente.id_sector = sector.id_sector
    INNER JOIN municipio
    ON sector.id_municipio = municipio.id_municipio
    INNER JOIN provincia
    ON municipio.id_provincia = provincia.id_provincia";
    return $result=$mysqli->query($sql);
}

//======================================================================================================================

function incidentes_x_provincias_x_id($id){
    include('conexion2.php');
    $sql="SELECT COUNT(incidente.id_incidente) FROM incidente
    INNER JOIN sector ON incidente.id_sector = sector.id_sector
    INNER JOIN municipio ON sector.id_municipio = municipio.id_municipio
    INNER JOIN provincia ON municipio.id_provincia = provincia.id_provincia
    WHERE provincia.id_provincia='$id'";
    return $result=$mysqli->query($sql);
}


function incidentes_total(){
    include('conexion2.php');
    $sql="SELECT COUNT(id_incidente) FROM incidente";
    return $result=$mysqli->query($sql);
}

?>