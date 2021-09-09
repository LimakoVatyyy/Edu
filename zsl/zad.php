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

    echo 'ZSŁ<br>';
    echo 'ZSŁ';

    $name = 'Janusz';
    echo '<br>Imię: $name'; //Imię: $name
    echo "<br>Imię:$name<br>"; //Imię: Janusz

    $x="Tomasz";
    $y="Nowak";

    //konkatenacja
    echo $x.$y."<hr>";

    //typy danych
    //całkowity
    $całkowita = 10;
    $bin = 0b1010; //10
    $oct = 011; //9
    $hex = 0x11; //17

    echo $bin.'<br>';
    echo $oct.'<br>';
    echo $hex.'<br>';

    //zmiennoprzecinkowy
    $x = 100.7;

    //logiczny
    $prawda = true;
    $fałsz = false; //można dodawać polskie znaki w nazwach zmiennych ;)

    echo gettype($prawda); //boolean
    echo '<br>'.gettype($hex); //intiger
    echo '<br>'.gettype($x); //double

    //składnia heredoc
    $name = "Krystyna";
    echo <<< ETYKIETA

    <hr>
    Imię: $name<br>
    ZSŁ<br>

    ETYKIETA;

    $text =  <<< ETYKIETA

    <hr>
    Anna Nowak<br>
    ZSŁ<br>

    ETYKIETA;

    echo $text;

    //składnia nowdoc

    echo <<< 'ETYKIETA'

    <hr>
    Imię: $name<br>
    ZSŁ<br>

    ETYKIETA;

    $name = "Jagoda";
    echo "Imię: $name, Nazwisko: Szyper<hr>";
    echo "Imię: \$name, Nazwisko: Szyper<hr>";

    




    ?>
</body>
</html>