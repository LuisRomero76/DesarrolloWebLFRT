<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Definicion de Arreglos</h1>
    <?php
    $a[0]=5;
    $a[1]="juan";
    $b[0]=$a;
    echo $b[0][1]."<br>";

    echo "<h2>Recorrido de vocales</h2>";

    $vocales = array("a","e","i","o","u");
    foreach($vocales as $v){
        echo $v ;
    }
    ?>

    <h2>Recorrido de vocales</h2>

    <?php
    
    foreach($vocales as $indice=>$v){
        echo "vocal[".$indice."] = ". $v."<br>";
    }

    ?>


    <h2>Arreglos cualificados</h2>
    <?php

    $alumno=array("nombre"=> "juan","edad"=>15);

    foreach($alumno as $al=>$v){
        echo "alumno[".$al."]=".$v."<br>";
    }

    ?>




</body>
</html>