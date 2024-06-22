<?php
include('conexion.php');

$materia = $_GET['materia'];

$sql = "SELECT id, nombres_apellidos, calificacion FROM alumnos WHERE materia='$materia'";
$resultado = $con->query($sql);

$horarios = [];
while ($fila = $resultado->fetch_assoc()) {
    $horarios[] = $fila;
}

echo json_encode($horarios);
?>
