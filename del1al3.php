<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Condicionales 3</title>
</head>
<body>
    <h1>tercer ejercicio de condicionales</h1>

    <?php
    $num=rand(1,3);
    if($num==1)
    {
        echo "uno";
    }
    else
    {
        if($num==2)
        {
            echo "dos";
        }
        else
        {
            echo "tres";
        }
    }
    ?>
</body>
</html>
