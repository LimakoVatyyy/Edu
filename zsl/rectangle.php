<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostokąt</title>
</head>
<body>
   
<h3>Prostokąt</h3>

<form method="get">

<input type="text" name="sideA" placeholder="Podaj długość boku a"><br>
<input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
<input type="submit" name="button" value="Oblicz">

<?php

if(!empty($_GET['button'])){

if(!empty($_GET['sideA']) && !empty($_GET['sideB'])){

    $a = str_replace(',', ".", $_GET['sideA']);
    $b = str_replace(',', ".", $_GET['sideB']);

    if($a>0 && $b>0){

        $ob = $a*2+$b*2;
        echo "<br><br>Pole wynosi: ".$a*$b." cm<sup>2</sup><br>Obwód wynosi: ".$ob." cm";
    
    }
    else{
    
    echo "<br><br>Podałeś liczby mniejsze lub równe zero";
    
    }

}
else{

    echo "<br><br>Wpisz cyfry w pola!";

}

}

?>

</body>
</html>