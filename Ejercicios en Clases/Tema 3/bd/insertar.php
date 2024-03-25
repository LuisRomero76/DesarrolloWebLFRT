<?php
include("conexion.php");
$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion = $_POST["ocupacion"];
$sql =  "INSERT INTO personas(nombres, apellidos, edad, sexo, ocupacion) VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$ocupacion')";

$resultado = $con->query($sql);
echo "La persona ".$nombre." fue añadid@ exitosamente."
?>
<meta http-equiv="refresh" content="4;url=read.php">