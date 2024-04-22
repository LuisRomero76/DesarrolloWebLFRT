<?php
$numero1=$_GET["numero1"];
$numero2=$_GET["numero2"];

$resultado = $numero1 + $numero2;
?>
<table class="tabla">
    <td class="tabla"><?php echo $numero1;?></td>
    <td class="tabla"> + </td>
    <td class="tabla"><?php echo $numero2;?></td>
    <td class="tabla"> = </td>
    <td class="tabla"><?php echo $resultado?></td>
</table>
<style>
    .tabla {
        border: 1px solid black;
        border-collapse:collapse;
        padding:10px;
        background-color: green;
        font-size: 30px;
    }
</style>