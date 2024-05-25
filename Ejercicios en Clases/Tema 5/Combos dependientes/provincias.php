<?php
include('conexion.php');

$sql = "SELECT id, provincia, iddepartamento FROM provincias";
$resultado = $con->query($sql);
$datos = array();
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>
