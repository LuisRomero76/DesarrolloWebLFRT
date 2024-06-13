<?php
include('conexion.php');
$id = $_POST['id'];
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$anio = $_POST["anio"];


$sql = "UPDATE libros set titulo='$titulo', autor= '$autor',
ideditorial= '$editorial', anio='$anio' WHERE id=$id";

$resultado = $con->query($sql);
if(!$resultado){
    die("Error al editar datos: ". $con->error);
}

?>