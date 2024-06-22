<?php
include('conexion.php');

$sql = "SELECT id, materia, dia, hora FROM horarios";

$resultado = $con->query($sql);
?>

<button class="btn-opciones" onclick="mostrarHorarios('SIS256')">SIS256</button>
<button class="btn-opciones" onclick="mostrarHorarios('SIS258')">SIS258</button>
<button class="btn-opciones" onclick="mostrarHorarios('SIS406')">SIS406</button>
