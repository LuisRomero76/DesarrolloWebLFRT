<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cadena = "Luis Fernando Romero Taboada";
    $palabras = explode(" ", $cadena);
    $palabralarga = "";
    foreach ($palabras as $p) {
        if (strlen($p) > strlen($palabralarga)) {
            $palabralarga = $p;
        };  
    };

    echo "La palabra es introducida es: " . $cadena. "<br><br>";
    echo "La palabra mas larga es: " . $palabralarga;
    ?>

</body>
</html>