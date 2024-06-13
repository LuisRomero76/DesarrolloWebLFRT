<?php
include("conexion.php");

$sql = "SELECT titulo, autor, e.editorial as editorial , anio FROM libros l 
LEFT JOIN editoriales e ON l.ideditorial = e.id";
$resultado = $con->query($sql);
?>

<table border="2" class="tabla">
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Editorial</th>
        <th>Año</th>
        <th>Operación</th>
    </tr>
    <?php
    while ($row = $resultado->fetch_assoc()) {
        ?><tr>
            <td><?php echo $row['titulo'];?></td>
            <td><?php echo $row['autor'];?></td>
            <td><?php echo $row['editorial'];?></td>
            <td><?php echo $row['anio'];?></td>
            <td>
                <a href="">Editar</a>
                <a href="">Eliminar</a>
                <a href="">Mostrar</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>