<?php
include('conexion.php');
$iddepartamento = $_GET['id'];

$sql = "SELECT p.id, p.provincia, p.iddepartamento 
        FROM provincias p JOIN  departamentos d 
        ON p.iddepartamento = d.id
        WHERE d.id =".$iddepartamento;

$resultado = $con->query($sql);
$datos = array();
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>
