<?php
include('Cola.php');
session_start();
if (!isset($_SESSION['p'])) {
    echo "error no hay elementos";
} else {

    $valor = $_SESSION['p']->mostrar();
}
?>
<meta http-equiv="refresh" content="4;url=menu_cola.html">