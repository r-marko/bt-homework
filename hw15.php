<?php

// Zadatak 1

$hwArray = ["Pera", "Milka", "Pera" ,"Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"]; 
array_push($hwArray, "Marko");

function addArrayElement ($array, $element, $position){
    $niz = $array;
    for ($i=(count($array)-1); $i>=$position-1; $i--){ // pretvara niz $hwArray u niz sa prvih $position clanova
        unset($array[$i]);
    }
    array_push($array, $element);   // dodaje string $element na kraju novog niza $array

    for ($i=1;$i<count($array); $i++){   // pretvara niz $hwArray u niz umanjen za prvih $array clanova
    array_shift($niz);
    }

    $ceoNiz = array_merge($array, $niz); // spaja nizove $array i $niz
    echo "<pre>";
    print_r($ceoNiz);
    echo "</pre>";
    return $ceoNiz;
}

$hwArray = addArrayElement ($hwArray, "Ime_Rodjaka", 3);  // Počinjem da budem ponosan na sebe ;)

echo "<br>Ukupno ima " . count($hwArray) . " učenika.</br>"; // brojanje koliko clanova niza ima

array_unshift($hwArray, "Novi clan na pocetku niza"); // dodavanje koliko novog clana na pocetku niza

echo "<br><pre>";
echo print_r($hwArray);
echo "</pre><br>";

for ($i=0; $i<count($hwArray);$i++){ // Brise Danila iz niza
    if ($hwArray[$i] == "Danilo"){
        unset($hwArray[$i]);
    }
}
echo "<br><pre>";
echo print_r($hwArray);
echo "</pre><br>";

$clearArray = $hwArray;
for ($i=0; $i<count($hwArray);$i++){  // Brise jedno ime ako ima jos jedno isto takvo u nizu
    $clanNiza = $hwArray[$i];
    array_shift($clearArray);
    if (array_search($clanNiza, $clearArray)){
        unset($hwArray[$i]);
    }

}
echo "<br><pre>";
echo print_r($hwArray);
echo "</pre><br>";


// Zadatak 2

$data =array ( array(
    "name" => "Pera",
    "last_name" => "Peric",
    "age" => 28,
    "gender" => "male",
    "avg_rating" => 7.5,
    "married" => false,
    "courses" => ["laravel", "react", "jQuery"]
),
array(
    "name" => "Marko",
    "last_name" => "Rakic",
    "age" => 38,
    "gender" => "male",
    "avg_rating" => 9,
    "married" => false,
    "courses" => ["laravel", "CSS", "Ruby"]
), 
array(
    "name" => "Petra",
    "last_name" => "Petric",
    "age" => 28,
    "gender" => "female",
    "avg_rating" => 10,
    "married" => true,
    "courses" => ["laravel", "Angular", "HTML"]
),
array(
    "name" => "Aca",
    "last_name" => "Jovanovic",
    "age" => 22,
    "gender" => "male",
    "avg_rating" => 8,
    "married" => false,
    "courses" => ["Django", "MySql", "CSS"]
),
array(
    "name" => "Jelena",
    "last_name" => "Ivanovic",
    "age" => 26,
    "gender" => "female",
    "avg_rating" => 9.5,
    "married" => false,
    "courses" => ["NodeJs", "NoSql", "C#"]
));

// Ne radi
foreach ($data as $arr){
    foreach ($arr as $arr1){
        $ime = $arr['name'];
        $prezime = $arr['last_name'];
        $godine = $arr['age'];
        $ocena = $arr["avg_rating"];
        if ($arr['married']==true){
            $brak = "U braku je";
        } else {
            $bran = "Nije u braku";
        }
        foreach($arr['courses'] as $course){
            $kurs1=$course[0];
            $kurs2=$course[1];
            $kurs3=$course[2];
        }
    }
    //echo $ime . " " . $prezime . " ima " . $godine . " godina i " . $brak . ". Ima prosecnu ocenu " . $ocena . ", a kurseve koje trenutno slusa su: " $kurs1 . ", " . $kurs2 . ", " . $kurs3;
}
