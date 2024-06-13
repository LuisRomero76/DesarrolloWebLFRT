<?php
include('conexion.php');
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$editorial = $_POST["editorial"];
$anio = $_POST["anio"];

$sql = "INSERT INTO libros(titulo, autor, ideditorial, anio)
VALUES ('$titulo', '$autor', '$editorial', $anio)";
$resultado = $con->query($sql);
while (!$resultado) {
    die('Error al insertar los datos: ' . $con->error);
}
?>
