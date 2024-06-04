<?php
include('conexion.php');

$sql = "SELECT imagen,titulo,autor,e.editorial as editorial,anio FROM libros l
LEFT JOIN editoriales e ON l.ideditorial = e.id";

$resultado = $con->query($sql);

echo "<div style='display: flex; flex-direction:column'>";
$i = 1;
while ($row = $resultado->fetch_assoc()) {
    ?>
    <a href="javascript:mostrarImagen('<?php echo $row["imagen"]?>','<?php echo $row["titulo"]?>',
    '<?php echo $row["autor"]?>','<?php echo $row["editorial"]?>','<?php echo $row["anio"]?>')" id="imagen<?php echo $i?>"
     onclick="mostrarBorde('imagen<?php echo $i?>')">
    <img src="images/<?php echo $row["imagen"]?>" width="50px" height="50px"></a>
    <?php
    $i++;
}
echo "</div>";
?>