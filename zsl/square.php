<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
   
<h3>Kwadrat</h3>

<form method="get">

<input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
<input type="submit" name="button" value="Oblicz">

<?php

if(!empty($_GET['button'])){

if(!empty($_GET['sideA'])){

    $a = str_replace(',', ".", $_GET['sideA']);

    if($a>0){

        $ob = $a*4;
        echo "<br><br>Pole wynosi: ".$a*$a." cm<sup>2</sup><br>Obwód wynosi: ".$ob." cm";
    
    }
    else{
    
    echo "<br><br>Podałeś liczbę mniejszą lub równą zero";
    
    }

}
else{

    echo "<br><br>Wpisz cyfrę w pole!";

}

}

?>

</body>
</html>