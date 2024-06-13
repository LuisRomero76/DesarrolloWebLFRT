<?php
include("conexion.php");

$id= $_GET["id"];

$sql="DELETE FROM libros WHERE id=$id"; 

$resultado=$con->query($sql);  
if(!$resultado){
    die("Error al eliminar datos: " . $con->error);
}
?>