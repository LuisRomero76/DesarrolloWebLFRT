<?php
$cadena = $_POST["cadena"];
$arreglo = explode(" ",$cadena);
$mayor = "";
foreach($arreglo as $valor){
    if (strlen($valor) > strlen($mayor)) {
        $mayor=$valor;
    }
}
echo "La palabra mas Larga es: ". $mayor;
?>