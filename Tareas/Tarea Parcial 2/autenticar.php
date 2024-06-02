<?php session_start();
include('conexion.php');
$usuario = $_POST['usuario'];
$password = sha1($_POST['password']);
$palabra = $_POST['palabra'];

$sql = "SELECT id, usuario, password, nombrecompleto, nivel FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0 && $palabra == $_SESSION['oculto']) {
    $persona = $resultado->fetch_assoc();
    $_SESSION['usuario'] = $persona['usuario'];
    $_SESSION['nivel'] = $persona['nivel'];
    if ($persona['nivel'] == 1) {
        $mensaje = "Usuario autenticado ". $persona['nombrecompleto']. " Nivel ". $persona['nivel'];
    }elseif ($persona['nivel'] == 0) {
        $mensaje = "Usuario autenticado ". $persona['nombrecompleto']. " Nivel ". $persona['nivel'];
    }
    echo $mensaje;
} else {
    echo "Datos Incorrectos";
}

?>