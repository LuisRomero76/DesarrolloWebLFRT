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


if ($_FILES['fotografia']['name']!='') 
{
    $nombres=$_FILES["fotografia"]["name"];
    $temp=$_FILES["fotografia"]["tmp_name"];
    $arreglo=explode(".", $nombres);
    $extension=$arreglo[1];
    $nuevonombre=uniqid().".".$extension;
    copy ($temp,"imagenes/".$nuevonombre);   
}else {
    $nuevonombre=$_POST["foto"];
}


$sql = "UPDATE personas set nombres='$nombre', apellidos= '$apellido',
edad= '$edad', sexo='$sexo', ocupacion_id='$ocupacion_id', fotografia='$nuevonombre' WHERE id=$id";

$resultado = $con->query($sql);
if(!$resultado){
    die("Error al editar datos: ". $con->error);
}

?>
<div>Se edito con exito</div>
<meta http-equiv="refresh" content="3;url=read.php">