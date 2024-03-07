<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena = "12345";
    echo strlen($cadena),"<br>";
    $palabra=explode(" ","Esto es una prueba");
    for ($i=0; $palabra[$i]; $i++) { 
        echo $palabra[$i],"<br>";
    }
    
    ?>
</body>
</html>