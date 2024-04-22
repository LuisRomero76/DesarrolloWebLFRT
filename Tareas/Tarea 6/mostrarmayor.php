<?php
include("clases_examen.php");
$a = $_POST["numero1"];
$b = $_POST["numero2"];
$c = $_POST["numero3"];

$examen = new Examen(0, '', $a, $b, $c);
$mayor = $examen->calcularMayor();
echo "El número mayor es: <strong>".$mayor['mayor']."</strong>";

?>