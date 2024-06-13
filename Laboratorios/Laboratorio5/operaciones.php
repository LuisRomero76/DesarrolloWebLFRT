<?php
include("conexion.php");

$sql = "SELECT l.id, titulo, autor, e.editorial as editorial , anio FROM libros l 
LEFT JOIN editoriales e ON l.ideditorial = e.id";
$resultado = $con->query($sql);

$sql1 = "SELECT id, editorial FROM editoriales";
$resultado1 = $con->query($sql1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedor{
            width: 70%;
            border: 1px solid black;
            margin: auto;
        }
        .tabla {
            width: 90%;
            margin: auto;
            margin-top: 10px;
            border-collapse: collapse;
        }
        #titulo_operacion {
            padding: 10px;
            
        }
        .formulario {
            margin:15px;
        }
        #titulo {
            border: 2px solid rgb(20, 202, 0);
            padding:5px;
        }
        #autor {
            border: 2px solid rgb(20, 202, 0);
            padding:5px;
        }
        #editorial {
            border: 2px solid rgb(20, 202, 0);
            padding:5px;
        }
        #anio {
            border: 2px solid rgb(20, 202, 0);
            padding:5px;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <div class="contenedor">
        <div id="tabla">
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
                            <a href="javascript:editar('<?php echo $row['id']?>')">Editar</a>
                            <a href="javascript:eliminar('<?php echo $row['id']?>')">Eliminar</a>
                            <a href="javascript:mostrar('<?php echo $row['id']?>')">Mostrar</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        <div id="titulo_operacion"><b>Operacion Insertar</b></div>
        <div id="operaciones">
                <form action="javascript:form_insertar()" class="formulario" id="formularioInsertar">
                    Titulo 
                    <input type="text" name="titulo" id="titulo"><br>
                    Autor
                    <input type="text" name="autor" id="autor"><br>
                    Editorial
                    <select name="editorial" id="editorial">
                    <?php 
                        while ($editorial = $resultado1->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $editorial["id"] ?>"><?php echo $editorial["editorial"]?> </option>
                        <?php } ?>
                    </select><br>
                    Año
                    <input type="number" name="anio" id="anio"><br>
                    <input type="submit" value="Insertar">
                </form>
        </div>
    </div>
</body>
</html>