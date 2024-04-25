<?php
$con = new mysqli("localhost","root","","bd_alumnos");
if ($con->connect_error)
die("Conexion fallida".$con->connect_error)
?>