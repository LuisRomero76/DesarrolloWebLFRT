<?php
include("clases_examen.php");

$operacion = $_POST["operacion"];

switch ($operacion) {
    case 'fibonacci':
        ?>
        <form action="mostrarfibonacci.php" method="post">
            <label for="ingresar">Ingrese un Numero: </label>
            <input type="number" name="numero">
            <input type="submit" value="Enviar">
        </form>
        <?php
        break;
    case 'mayor':
        ?>
        <form action="mostrarmayor.php" method="post">
            <label for="ingresar">Ingrese los Numero: </label><br>
            <input type="number" name="numero1"><br>
            <input type="number" name="numero2"><br>
            <input type="number" name="numero3"><br>
            <input type="submit" value="Enviar">
        </form>
        <?php
        break;
    case 'piramide':
        ?>
        <form action="mostrarpiramide.php" method="post">
            <label for="ingresar">Ingresar Palabra: </label>
            <input type="text" name="palabra">
            <input type="submit" value="Enviar">
        </form>
        <?php
        break;
}


?>