<?php

// Zadatak 1
$a=200;
$b=80;
function sabiranje($a, $b){
echo "Zbir dva broja je: " . $a+$b . "<br>";
}
function oduzimanje ($a,$b){
echo "Razlika dva broja je: " . $a-$b . "<br>";
}
function mnozenje ($a,$b){
echo "Proizvod dva broja je: " . $a*$b . "<br>";
}
function deljenje ($a,$b){
echo "Kolicnik dva broja je: " . $a/$b . "<br>";
}
sabiranje($a,$b);
oduzimanje($a,$b);
mnozenje($a,$b);
deljenje($a,$b);


// Zadatak 2
$a=2; // ovo je promenljiva koja se menja
if($a>=0 && $a<7){
$b=array("ponedeljak", "utorak", "sreda", "cetvrtak", "petak", "subota", "nedelja");
$c=$b[$a];
echo "Danas je $c";
}
else echo "Izaberite broj od 0 do 6";


// Zadatak 3
$a=rand(1,10);
$b=rand(1,10);
$c=rand(1,10);
function sub($a,$b,$c){
    $d=$a+$b+$c;
    return $d;
}
echo "<br>Zbir brojeva $a, $b i $c je " . sub($a,$b,$c);

?>