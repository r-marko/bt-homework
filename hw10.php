<?php

// Zadatak 1
$a=200;
$b=80;
echo "Zbir dva broja je: " . $a+$b . "<br>";
echo "Razlika dva broja je: " . $a-$b . "<br>";
echo "Proizvod dva broja je: " . $a*$b . "<br>";
echo "Kolicnik dva broja je: " . $a/$b . "<br>";


// Zadatak 2
$a=2;
switch($a){
    case 0: echo "Danas je ponedeljak"; break;
    case 1: echo "Danas je utorak"; break;
    case 2: echo "Danas je sreda"; break;
    case 3: echo "Dans je cetvrtak"; break;
    case 4: echo "Danas je petak"; break;
    case 5: echo "Danas je subota"; break;
    case 6: echo "Danas je nedelja"; break;
    default: echo "Unesite vrednost od 0 do 6";
}

// Zadatak 3
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);
$d= $a + $b +$c;
echo "<br>Zbir brojeva $a, $b i $c je $d";

?>