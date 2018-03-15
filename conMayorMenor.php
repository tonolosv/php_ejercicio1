<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
</head>
<body>
    <h1>Ejercicios de condicionales</h1>
    <?php
    $num1=rand();
    $num2=rand();
    echo $num1;
    echo '<p>', $num2;

    if($num1>$num2 && $num1%2==0)
    {
        echo '<p>el primer numero es mayor y es par';
    }
    elseif($num1<$num2 && $num2%2==0)
    {
        echo '<p>el segundo numero es mayor y es par';
    }
    elseif($num1>$num2 && $num2%2==1)
    {
        echo '<p>el primer numero es mayor y es impar';
    }
    elseif($num1<$num2 && $num2%2==1)
    {
        echo '<p>el segundo numero es mayor e impar';
    }
    ?>

</body>
</html>
