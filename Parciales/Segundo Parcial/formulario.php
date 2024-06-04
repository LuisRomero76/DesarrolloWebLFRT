<?php
include('conexion.php');

$sql = "SELECT id, editorial FROM editoriales";
$resultado = $con->query($sql);
?>

<form action="javascript:insertarDatos()" method="post" id="form_insertar" >
    <label>Imagen</label><br>
    <input type="file" name="imagen"><br>
    <label>Titulo</label><br>
    <input type="text" name="titulo"><br>
    <label>Autor</label><br>
    <input type="text" name="autor"><br>
    <label>Editorial</label><br>
    <select name="editorial">
        <?php
        while ($row = $resultado->fetch_assoc()) {
            echo "<option value=".$row['id'].">".$row['editorial']."</option>";
        }
        ?>
    </select><br>
    <label>Año</label><br>
    <input type="number" name="anio"><br>
    <input type="submit" value="Agregar">
</form>