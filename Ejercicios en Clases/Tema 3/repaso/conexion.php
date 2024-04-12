<?php
$con = new mysqli("localhost","root","","bd_censo");
if ($con->connect_errno)
die("Conexion Fallida".$con->connect_errno);
?>