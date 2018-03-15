<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Variables</title>
</head>
<body>
    <h1>Declaración de variables</h1>
    <h3>Declaración de variables y sus especificaciones</h3>
    <p>Las variables se especifican usando "$" anteciendo el nombre que se utilizaria. Ojo son sensibles a las mayusculas y minisculas.</p>

    <?php
    $dia = 24; //variable tipo interger
    $sueldo = 758.43; //variable tipo double
    $nombre = "Juan"; //variable tipo string
    $exite = true; //variable tipo boolean
    $exiteno = false;

    echo "Variable tipo entera: ";
    echo $dia;
    echo "<p>";
    echo "Variable double: ";
    echo $sueldo;
    echo "<p>";
    echo "Variable string: ";
    echo $nombre;
    echo "<p>";
    echo "Variable boolean: ";
    echo $exite;
    echo "<p>";
    echo "Variable boolean: ";
    echo $exiteno;
    // true = 1; false = 0
    ?>

</body>
</html>
