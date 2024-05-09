<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso de for con if y else</title>
</head>
    <body>
        <h1>
            <?php
                for ($i=0; $i <30; $i++) {
                    $x = $i * $i;
                    if($x%2==0){
                        echo "el numero cuadro de la potencia $i es:". $x . "par" . "<br>";
                    }else{
                        echo "el numero cuadro de la potencia $i es:". $x . "impar" . "<br>";
                    }
                    }
            ?>
        <h1>
    <body>
</html>  