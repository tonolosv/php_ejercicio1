<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
</head>
<body>
    <h1>Condicionales</h1>
    <p>Para tomar decisiones en determinados momentos se utilizan las condicionales</p>
    <ul>
        <li>if</li>
        <li>else</li>
        <li>elseif</li>
    </ul>

    <?php
    $valor = rand(1,10);
    echo "El valor sorteado es $valor <p>";
    if ($valor<=5)
    {
        echo "Es menor o igual a 5";
    }
    else
    {
        echo "Es mayor a 5";
    }
    ?>

</body>
</html>
