<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>Nuevo ejercicio de condicionales</p>
    <?php
    $num=rand(1,10000);
    echo $num;

    if($num%2==0)
    {
        echo '<p>el numero es par';
    }
    else
    {
        echo '<p>el numero es impar';
    }
    ?>
</body>
</html>
