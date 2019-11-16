<?php  
    include './php/cabe.php';
?>

<?php  
    $cantidad=consultar_usuarios2();
    $pag=$cantidad->fetch_assoc();
    echo $pag["COUNT(id_usuario)"];
?>