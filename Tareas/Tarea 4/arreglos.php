<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arreglo = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
        $pares = array();
        $impares = array();
        
        foreach($arreglo as $n) {
            if ($n % 2 == 0) {
                $pares[]=$n;
            }else
            $impares[]=$n;
        }
        
        echo "Numeros pares: ". implode(" , ",$pares) ."<br><br>";
        echo "Numeros impares: ". implode(" , ",$impares). "<br>";
    ?>

</body>
</html>