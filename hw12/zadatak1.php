<?php

if(empty($_POST['tezina']) || empty($_POST['aktivnost']) || empty($_POST['godine'])){
    echo "Molimo popunite sva polja. <br>";
} else {
    $tezina=$_POST['tezina'];
    $aktivnost=strtolower($_POST['aktivnost']);
    $godine=$_POST['godine'];

    if ($aktivnost=="programer" || $aktivnost=="administrativni radnik" || $aktivnost=="menadžer"){
        $faktor_aktivnosti=100;
    } else if ($aktivnost=="policajac" || $aktivnost=="vojnik"){
        $faktor_aktivnosti=200;
    } else if ($aktivnost=="sportista"){
        $faktor_aktivnosti=300;
    } else {
        $faktor_aktivnosti=150;
    }
    /*
    iz nekog razloga switch uslov nece da radi, kao da ne vraca $faktor_aktivnosti varijablu

    switch (strtolower($aktivnost)){
        case "programer": $faktor_aktivnosti=100;
        case "administrativni radnik": $faktor_aktivnosti=100;
        case "menadžer": $faktor_aktivnosti=100;
        case "policajac": $faktor_aktivnosti=200;
        case "vojnik": $faktor_aktivnosti=200;
        case "sportista": $faktor_aktivnosti=300;
        default: $faktor_aktivnosti=150;
    }
    */

    if ($godine>0 && $godine<=3){
        $faktor_starosti=1.9;
    } else if ($godine>=4 && $godine<=10) {
        $faktor_starosti=1.5;
    } else if ($godine>=11 && $godine<=18) {
        $faktor_starosti=1.2;
    } else if ($godine>=19 && $godine<=26) {
        $faktor_starosti=1;
    } else if (($godine>=27 && $godine<=30) || ($godine>=50 && $godine<=60)) {
        $faktor_starosti=0.8;
    } else if (($godine>=31 && $godine<=35) || ($godine>=45 && $godine<=49)) {
        $faktor_starosti=0.7;
    } else {
        $faktor_starosti=0.6;
    }

    $max_kalorija=$tezina*$faktor_aktivnosti*$faktor_starosti;
    echo "Maksimalan broj kalorija koji treba da unesete je $max_kalorija";
}

?>