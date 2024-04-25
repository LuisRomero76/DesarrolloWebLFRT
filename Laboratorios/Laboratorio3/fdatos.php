<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .contenedor{
            border: 1px solid black;
            width:90%;
            margin: auto; 
        }

        .form {
            display: flex;
            justify-content: space-around;
        }

        .titulo {
            display: flex;
            justify-content: space-around;
            height: 30px;
        }

        .boton {
            padding:10px;
            margin: 15px;
            border-radius: 5px;
            background-color: rgb(202, 202, 202);
        }

    </style>

</head>
<body>
    <div class="contenedor">
    <?php
    include("conexion.php");

    $sql = "SELECT codigo, carrera FROM carreras";
    $resultado = $con->query($sql);

    $numero = $_POST["numero"];
    ?>

    <div class="titulo">
        <label for="fotografia">Fotografía</label>
        <label for="nombre">Nombres</label>
        <label for="apellidos">Apellidos</label>
        <label for="cu">CU</label>
        <label for="sexo">Sexo</label>
        <label for="carrera">Carrera</label>
    </div>

    <form action="insertar.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="numero" value="<?php echo $numero; ?>">
        <?php

        for ($i = 0; $i < $numero; $i++) {

            ?>
            <div class="form">
                <label for="num"><?php echo $i + 1 ?></label>
                <input type="file" name="imagen<?php echo $i; ?>">
                <input type="text" name="nombre<?php echo $i; ?>">
                <input type="text" name="apellido<?php echo $i; ?>">
                <input type="text" name="cu<?php echo $i; ?>">
                <input type="radio" name="sexo<?php echo $i; ?>" value="M">Masculino
                <input type="radio" name="sexo<?php echo $i; ?>" value="F">Femenino
                <select name="carrera<?php echo $i; ?>">
                    <?php
                    $resultado = $con->query($sql);
                    while ($carrera = $resultado->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $carrera["codigo"]?>"><?php echo $carrera["carrera"]?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
        <?php } ?>
        <input class="boton" type="submit" value="Enviar">
        <input class="boton" type="reset" value="Borrar">
    </form>
</div>

</body>
</html>