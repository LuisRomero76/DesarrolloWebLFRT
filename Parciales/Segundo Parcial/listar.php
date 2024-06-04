<?php
include('conexion.php');

$sql = "SELECT imagen, titulo, autor, e.editorial as editorial , anio, c.carrera as carrera FROM libros l 
LEFT JOIN editoriales e ON l.ideditorial = e.id
LEFT JOIN carreras c ON l.idcarrera = c.id";
$resultado = $con->query($sql);
$datos = array();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>