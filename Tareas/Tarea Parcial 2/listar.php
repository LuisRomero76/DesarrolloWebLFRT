<?php session_start();
if (isset($_SESSION['usuario'])) {
    include('conexion.php');
    $nivel = $_SESSION['nivel'];
    $sql = "SELECT id,imagen, titulo, autor, anio FROM libros";
    $resultado = $con->query($sql);
    ?>
    <button onclick='cerrarSesion()'>Cerrar Sesión</button>
    <table border='1' style="border-collapse:collapse; width:100%; text-align:center;">
        <th>Id</th>
        <th>Imagen</th>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Año</th>
        <?php
            if ($nivel == 1) {
                echo "<th colspan=2>Operaciones</th>";
            }
        ?>
        <?php
        while ($row = $resultado->fetch_assoc()) {
            ?><tr>
                <td><?php echo $row['id'];?></td>
                <td><img src="imagenes/<?php echo $row['imagen']?>" width='50px'></td>
                <td><?php echo $row['titulo'];?></td>
                <td><?php echo $row['autor'];?></td>
                <td><?php echo $row['anio'];?></td>
                <?php
                    if ($nivel == 1) {
                        ?>
                        <td><a href="#">Editar</a></td>
                        <td><a href="#">Eliminar</a></td>
                        <?php
                    }
                ?>
            </tr>
            <?php
        }
        ?>
    </table>
    <?php
}else {
    echo "No se realizo inicio de sesion.";
}
?>