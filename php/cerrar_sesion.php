<?php

session_start();

session_destroy();

header("Location: ../InicioDeSesion.php");
exit();

?>