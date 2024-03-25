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
    $cant = $_POST["cantidad"];
    $primos=[];
    for ($i=2; $i<=$cant; $i++) { 
        $esprimo=true;
        for ($j=2; $j <=sqrt($i); $j++) { 
            if ($i % $j == 0) {
                $esprimo=false;
                break;
            }
        }
        if ($esprimo){
            $primos[]=$i;
        }
    }
    foreach($primos as $primo) {
        ?>
        <div>
            <p><?php echo $primo."<br>"?></p>
        </div>
        <?php
    }
    ?>
</body>
</html>