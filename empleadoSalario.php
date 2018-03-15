<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales</title>
</head>
<body>
    <h1>Condicionales</h1>
    <?php
    $nombre='Edwin Arley Granada Alvarez';
    $salario=rand(1,10000);
    echo $nombre;
    echo '<p>',$salario;

    if ($salario<500)
    {
        echo '<p> yo gano menos del minimo';
    }
    elseif($salario>=1000)
    {
        echo '<p>te doy gracias señor';
    }
    ?>

</body>
</html>
