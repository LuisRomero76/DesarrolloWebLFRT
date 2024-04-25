<?php
include("conexion.php");

for ($i = 0; $i < $_POST["numero"]; $i++) {
    $nombre = $_POST["nombre$i"];
    $apellido = $_POST["apellido$i"];
    $cu = $_POST["cu$i"];
    $sexo = $_POST["sexo$i"];
    $carrera = $_POST["carrera$i"];

    $imagen = $_FILES["imagen$i"]["name"];
    $temp = $_FILES["imagen$i"]["tmp_name"];
    $arreglo = explode(".", $imagen);
    $extension=$arreglo[1];
    $nuevonombre=uniqid().".".$extension;
    copy ($temp,"imagenes/".$nuevonombre);

    $sql =  "INSERT INTO alumnos(fotografia, nombres, apellidos, cu, sexo, codigocarrera) 
    VALUES ('$nuevonombre','$nombre','$apellido', '$cu', '$sexo', '$carrera')";

    $resultado = $con->query($sql);
    if (!$resultado) {
        die("Error al insertar datos: " . $con->error);
    }
}
?>
<div>Se insertaron los datos con éxito</div>
<meta http-equiv="refresh" content="3;url=listaAlumnos.php">
