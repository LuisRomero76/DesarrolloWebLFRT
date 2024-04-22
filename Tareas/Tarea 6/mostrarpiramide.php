<?php
include("clases_examen.php");
$cadena = $_POST["palabra"];

$examen = new Examen(0, $cadena, 0, 0, 0);
$examen->piramide();
?>