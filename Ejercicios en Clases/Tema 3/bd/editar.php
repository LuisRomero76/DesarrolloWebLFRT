<?php
include("conexion.php");
include("verificar.php");
include("permisos.php");
$id = $_POST["id"]; 
$nombre = $_POST["nombres"];
$apellido = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$ocupacion_id = $_POST["ocupacion"];

$sql = "UPDATE personas set nombres='$nombre', apellidos= '$apellido', edad= '$edad', sexo='$sexo', ocupacion_id='$ocupacion_id' WHERE id=$id";

$resultado = $con->query($sql);
if(!$resultado){
    die("Error al editar datos: ". $con->error);
}

?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="3;url=read.php">