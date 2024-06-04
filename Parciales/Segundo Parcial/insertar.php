<?php
include('conexion.php');
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$anio = $_POST["anio"];

$imagen = $_FILES["imagen"]["name"];
$temp = $_FILES["imagen"]["tmp_name"];
$arreglo = explode(".", $imagen);
$extension=$arreglo[1];
$nuevonombre=uniqid().".".$extension;
copy ($temp,"images/".$nuevonombre);


$sql = "INSERT INTO libros(imagen, titulo, autor, ideditorial, anio)
VALUES ('$nuevonombre', '$titulo', '$autor', '$editorial', '$anio')";
$resultado = $con->query($sql);
while (!$resultado) {
    die('Error al insertar los datos: ' . $con->error);
}
?>
<div>Se insertaron los datos correctamente</div>