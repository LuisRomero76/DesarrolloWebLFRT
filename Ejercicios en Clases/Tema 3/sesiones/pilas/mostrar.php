<?php
include('pila.php');
session_start();
if (!isset($_SESSION['num'])) {
    echo "error no hay elementos";
} else {

    $valor = $_SESSION['num']->imprimir();
}
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">