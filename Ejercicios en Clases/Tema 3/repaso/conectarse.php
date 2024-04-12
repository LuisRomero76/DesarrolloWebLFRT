<?php
try {
    $con = new mysqli("localhost","root","","bd_censo");
} catch (Exception $e) {
    die("Error a conectarse a la base de datos ".$e->getMessage());
}
$resultado = $con->query("SELECT * FROM personas");

if ($resultado->num_rows > 0) {
    while ($row =  $resultado->fetch_assoc()) {
        echo "id: ".$row["id"]."- Nombres: ".$row["nombres"]." ". $row["apellidos"]. "<br>";
    }
} else {
    echo "0 resultados";
}
?>