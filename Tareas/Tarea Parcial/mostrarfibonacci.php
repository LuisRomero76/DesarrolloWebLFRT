<?php
include("clases_examen.php");
$n = $_POST["numero"];

$examen = new Examen($n, "",0,0,0);
$fibonacci = $examen->calcularFibonacci();
echo "Numero Fibonacci hasta $n:  <br>" . implode(" <br> ", $fibonacci);

?>