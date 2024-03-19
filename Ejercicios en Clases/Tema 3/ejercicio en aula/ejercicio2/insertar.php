<?php
include('cola.php');
session_start();
if (!isset($_SESSION['p'])) {
    $_SESSION['p'] = new Cola();
}
$valor = $_GET['valor'];
$_SESSION['p']->insertar($valor);
?>
<meta http-equiv="refresh" content="2;url=menu_cola.html">