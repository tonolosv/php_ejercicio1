<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales 2</title>
</head>
<body>
    <h1>Hola</h1>
    <p>Nuevo ejemplo de condicionales</p>
    <?php
    $valor = rand(1,100);
    echo "El valor sorteado es $valor, ";
    if  ($valor<=9)
    {
        echo "tiene un digito";
    }
    else
    {
        if($valor<100)
        {
        echo "tiene dos digitos";
        }
        else
        {
            echo "tiene tres digitos";
        }
    }
    ?>

</body>
</html>
