<?php

//print_r($_GET);

$gender="";


// Ovo ispod do 18. linije ne radi

if(isset($_GET['pol[0]'])){
        if($_GET['pol[0]'] == "female"){
            $gender="Poštovana";
        }
        else {
            $gender="Poštovani";
        } 
    }
    else {echo "Molimo izaberite vaš pol<br>";}

$ime="";
if(isset($_GET['ime'])){
    $ime=$_GET['ime'];
}
else{echo "Molimo unesite vase ime";}

$prezime="";
if(isset($_GET['prezime'])){
    $prezime=$_GET['prezime'];
}
else{echo "Molimo unesite vase prezime";}

$lozinka="";
if (isset($_GET['password'])){
    $lozinka=$_GET['password'];
}
else {echo "Molimo unesite lozinku<br>";}

$email="";
if (isset($_GET['email'])){
    $email=$_GET['email'];
}
else{echo "Molio unesite vaš e-mail";
}


// Ne mogu da selektujem vrednosti iz chackbox-a, ovo ispod ne radi, key nije po nazivu nego po indeksima,
// a ja ne znam koji ce indeks imati koju vrednost i koliko ce clanova imati niz. Nemam pojma kako ovo da uradim...

$lista_kurseva=array();
if (isset($_GET['chackbox[]'])){
    if ($_GET['chackbox["html"]']){
        $lista_kurseva[0]="HTML";
    }
    if ($_GET['chackbox["php"]']){
        $lista_kurseva[1]="PHP";
    }
    if ($_GET['chackbox["javascript"]']){
        $lista_kurseva[2]="JavaScript";
    }
    if ($_GET['chackbox["javascript"]']){
        $lista_kurseva[3]="Ruby";
    }
    return $lista_kurseva;
}
else{echo "Odaberite zeljene kurseve.";}


echo $gender . " " . $ime . " " . $prezime . "<br>";
echo "Vaša lozinka je: $lozinka <br>";
echo "Vaš username je: $email <br>";
echo "Vaši odabrani kursevi su:";
foreach ($lista_kurseva as $kursevi){
    echo "$kursevi, ";
}
?>