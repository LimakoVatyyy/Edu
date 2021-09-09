<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //wersja php
    
    echo PHP_VERSION; //7.3.30

    $pow=2**10; //1024
    echo '<br>'.$pow;

    $x=10;
    $y=3;

    echo '<br>';
    echo $x<=>$y; //jeśli zmienna po lewej jest większa - 1, jeśli zmienna po prawej jest większa - -1, jeśli są równe - 0

    /*
    komentarz
    w wielu
    liniach
    */

    echo '<br>';

    //porównanie oraz identyczność
    $x=1;
    $y=1.0;

    if ($x==$y){
        echo "Równe";
    }
    else{
        "Różne";
    }

    if ($x===$y){
        echo "Równe";
    }
    else{
        "Różne";
    }

    ?>
</body>
</html>