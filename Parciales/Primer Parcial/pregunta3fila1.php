<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            border: 3px solid black;
            width: 250px;
            height: 100px;
            text-align: center;
        }
        .libro {
            border: 3px solid black;
            height: 30px;
            margin-top: 10px;
        }

        .boton {
            background-color: rgb(144, 173, 230);
            color: white;
            border: 3px solid rgb(28, 51, 99);
            margin-top: 10px;
            padding: 10px;
        }

    </style>
</head>
<body>
    <div>
        <form action="pregunta3mostrar.php" method="post">
            <label for="libro">Libro</label>
            <input class="libro" type="text" name="nombrelibro1"> <br>
            <input class="boton" type="submit" value="Insertar">
        </form>
        <meta>
    </div>
</body>
</html>