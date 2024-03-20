<?php
include('pila.php');
session_start();
if (!isset($_SESSION['num'])) {
    $_SESSION['num'] = new Pila();
}
$valor = $_GET['valor'];
$_SESSION['num']->insertar($valor);
?>
<meta http-equiv="refresh" content="4;url=menu_pila.html">