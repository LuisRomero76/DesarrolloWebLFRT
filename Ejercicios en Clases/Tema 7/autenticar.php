<?php session_start();
$correo = $_POST["correo"];
$password = sha1($_POST["password"]);
include("conexion.php");
$sql = "SELECT correo, nivel FROM usuarios WHERE correo='$correo'
AND PASSWORD='$password'";

$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $datos = $resultado->fetch_assoc();
    $_SESSION["correo"]=$datos["correo"];
    $_SESSION["nivel"]=$datos["nivel"];
    echo "Usuario autenticado";
}else {?>
    Error Usuario o Contraseña 
    <meta http-equiv="refresh" content="3; url=formlogin.html">
<?php 
}
?>