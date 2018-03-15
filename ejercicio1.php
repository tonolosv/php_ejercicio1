<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 de PHP</title>
</head>
<body>
    <h1>Ejercicio #1</h1>
    <?php
    $dia=date("d");
    if($dia<=13)
        //estoy definiendo que si el dia es,menor al date esta activa la pagina
    {
        echo "sitio activado";
    }
    else
    {
        echo "sitio fuera de servicio";
    }
    ?>
</body>
</html>
