<?php
include('conexion.php');

$texto = $_POST['texto'];

$sql = "SELECT id, nombre_carrera FROM carrera WHERE nombre_carrera LIKE '%$texto%'";
$resultado = $con->query($sql);
$datos = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $datos[] = $row;
    }
}

echo json_encode($datos);
?>