<?php
$numero = $_POST["numero"];
$suma = 0;
while ($numero%10!=0) {
    $digito = $numero%10;      //12345
    $suma += $digito;
    $numero /= 10;
}
echo "La suma de los digitos es: $suma";
?>