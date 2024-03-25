<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $numero = $_POST["numero"];
    $ope = $_POST["operacion"];

    switch ($ope) {
        case 'celsius':
            ?>
            <p><?php echo "La conversion a Fahrenheit es: <br>".($numero*9/5)+32;?></p>
            <p><?php echo "La conversion a Kelvin es: <br>".$numero+273.15;?></p>
            <?php
            break;
        
        case 'fahrenheit':
            ?>
            <p><?php echo "La conversion a Celsius es: <br>".($numero-32)*5/9;?></p>
            <p><?php echo "La conversion a Kelvin es: <br>".($numero+459.67)*5/9;?></p>
            <?php
            break;
            
        case 'kelvin':
            ?>
            <p><?php echo "La conversion a Celsius es: <br>".$numero-273.15;?></p>
            <p><?php echo "La conversion a Fahrenheit es: <br>".($numero-273.15)*(9/5)+32;?></p>
            <?php
            break;
    }
    ?>
</body>
</html>