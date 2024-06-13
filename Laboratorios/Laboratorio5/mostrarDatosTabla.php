<?php 
    $id=$_GET["id"];
    include("conexion.php");

    $sql = "SELECT id, titulo, autor, ideditorial , anio FROM libros WHERE id=". $id;
    $resultado = $con->query($sql);
    $datos = $resultado->fetch_assoc();

    $sql1 = "SELECT id,editorial FROM editoriales";
    $resultadoeditorial=$con->query($sql1);
    ?>

    <form action="javascript:editarPersona()" class="formulario" id="formularioInsertar">
        <input type="hidden" name="id" value="<?php echo $datos["id"];?>">
        Titulo 
        <input type="text" name="titulo" id="titulo" value="<?php echo $datos["titulo"];?>"><br>
        Autor
        <input type="text" name="autor" id="autor" value="<?php echo $datos["autor"];?>"><br>
        Editorial
        <select name="editorial" id="editorial">
        <?php 
            while ($editorial = $resultadoeditorial->fetch_assoc()) {
            ?>
            <option value="<?php echo $editorial["id"] ?>"<?php echo $editorial["id"]==$datos['ideditorial']?"selected":"";?>><?php echo $editorial["editorial"]?> </option>
            <?php } ?>
        </select><br>
        Año
        <input type="number" name="anio" id="anio" value="<?php echo $datos["anio"];?>"><br>
    </form>