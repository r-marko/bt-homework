<?php

//Zadatak 1 

$mail = array("nesto", 5, 25, "nesto@nesto", "Pera", "mail@gmail", "marko@rakic");
$novMail = array();
foreach ($mail as $email){
    if (preg_match('/@/', $email)){
        array_push($novMail, $email);
    }
}
echo "<pre>";
echo print_r($novMail);
echo "</pre><br>";

// Zadatak 2  // ne radi!!!

$niz_brojeva=array(9,4,2,3,5,7);
function nizBrojeva($niz, $karakter = "/"){
    $brojac=0;
    
    if ($karakter = "+"){
        foreach ($niz as $element){
            $brojac += $element;
        }
    }
    if ($karakter = "-"){
        foreach ($niz as $element){
            $brojac -= $element;
        }
    }
    if ($karakter = "*"){
        foreach ($niz as $element){
            $brojac *= $element;
        }
    }
    if ($karakter = "/"){
        foreach ($niz as $element){
            $brojac /= $element;
        };
    }
    echo $brojac;
}
nizBrojeva($niz_brojeva, "-");
echo "<br>";


// Zadatak 3

$arrayAssoc = ["ime" => "Marko",
               "prezime" => "Rakic",
               "adresa" => "Krusevac",
               "itbootcamp" => true,
               "ostalo" => "nema" ];

function arr_key_exists($upit, $niz){
    $flag = false;
    foreach ($niz as $key => $vlaue){
        if ($key == $upit){
            $flag = true;
        }
    }
    if ($flag === true){
        echo "Ima kljuca u nizu";
    }
    else {
        echo "Nema kljuca u nizu";
    }
    
}
arr_key_exists("ime" , $arrayAssoc);

