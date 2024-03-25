<?php
include("ordenarPalabras.php");
$ca = $_POST["cadena"];

$ordenar = new ordenarPalabras($ca);

echo $ordenar;


?>