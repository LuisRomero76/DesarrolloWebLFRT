<?php
include("conexion.php");
include("verificar.php");
include("permisos.php");

$id= $_GET["id"];

$sql="DELETE FROM personas WHERE id=$id"; 

$resultado=$con->query($sql);  
if(!$resultado){
    die("Error al eliminar datos: " . $con->error);
}
?>
<div>Se elimino con exito</div>
<meta http-equiv="refresh" content="2; url=read.php">