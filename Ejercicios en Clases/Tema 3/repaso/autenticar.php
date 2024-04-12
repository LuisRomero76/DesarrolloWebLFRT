<?php session_start();
$correo = $_POST["correo"];
$password = sha1($_POST["password"]);
include("conexion.php");
$sql = "SELECT correo, nivel FROM usuarios WHERE correo='$correo'
AND PASSWORD='$password'";

$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    if (isset($_POST["recordar_correo"])) {
        setcookie("correo",$correo,time() + 3600);
    } else {
        setcookie("correo","",time() + 3600);
    }
    if (isset($_POST["recordar_password"])) {
        setcookie("password",$_POST["password"],time() + 3600);
    } else {
        setcookie("password","", time() + 3600);
    }

    echo "Contraseña Correcta";
}else {
    echo "Error Usuario o Contraseña";
}
?>