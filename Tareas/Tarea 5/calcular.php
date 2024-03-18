<?php
    include("clases.php");

    $cadena = $_POST["cadena"];
    $ope = $_POST["operacion"];

	$ca = new Operacionescadena($cadena);

    switch ($ope) {
        case "invertir": echo $ca->invertir();
            break;
        case "mayuscula" : echo $ca->mayuscula();
            break;
        case "minuscula" : echo $ca->minuscula();
            break;
    }
?>