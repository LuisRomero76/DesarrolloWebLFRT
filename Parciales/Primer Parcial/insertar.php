<?php
include("conexion.php");
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$año = $_POST["anio"];

$nombre=$_FILES['imagen']['name']; 
$temp=$_FILES['imagen']['tmp_name']; 
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];
$nuevonobre=uniqid().".".$extension;
copy ($temp,"imagenes/".$nuevonobre);

$sql = "INSERT INTO libros(imagen, titulo, autor, ideditorial, anio) 
values ('$nuevonobre', '$titulo', '$autor', '$editorial', '$año')";

$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
<meta http-equiv="refresh" content="3; url=mostrar.php">