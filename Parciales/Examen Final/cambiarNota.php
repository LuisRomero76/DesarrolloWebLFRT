<?php
include('conexion.php');
$calificacion = $_GET['calificacion'];
$id = $_GET['id'];

$sql = "UPDATE alumnos set calificacion=$calificacion WHERE id=$id";
echo $sql;

$resultado = $con->query($sql);
if(!$resultado){
    die("Error al editar datos: ". $con->error);
}
?>