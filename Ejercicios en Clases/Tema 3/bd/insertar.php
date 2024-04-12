<?php
include("conexion.php");
include("verificar.php");

$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"]; 
$ocupacion_id = $_POST["ocupacion"];


$nombres=$_FILES["fotografia"]["name"];
$temp=$_FILES["fotografia"]["tmp_name"];
$arreglo=explode(".", $nombres);
$extension=$arreglo[1];
$nuevonombre=uniqid().".".$extension;
copy ($temp,"imagenes/".$nuevonombre);


$sql =  "INSERT INTO personas(nombres, apellidos, edad, sexo, ocupacion_id, fotografia) 
VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$ocupacion_id', '$nuevonombre')";

$resultado = $con->query($sql);
if(!$resultado){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="3;url=read.php">