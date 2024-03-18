<?php
include("clases.php");

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$operaciones = $_POST["operacion"];

$o = new Operaciones($numero1,$numero2);

switch ($operaciones) {
    case 'sumar': echo $o->sumar();
        break;
    case 'restar': echo $o->restar();
        break;
    case 'multiplicar': echo $o->multiplicar();
        break;
    case 'dividir': echo $o->dividir();
        break;
}

?>