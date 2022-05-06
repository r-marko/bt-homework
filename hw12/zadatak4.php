<?php 
if (empty($_POST['puz']) || empty($_POST['drvo'])){
    echo "Molimo unesite obe vrednosti u polja i budite precizni sa brzinom puža.";
} else {
    $brzinaPuza=$_POST['puz'];
    $pocetnaVisinaDrveta=$_POST['drvo'];
    define("BRZINA_RASTA_DRVETA", 1);

    $predjenPut=$brzinaPuza;
    $visinaDrveta=$pocetnaVisinaDrveta;
    echo "Dan 1: Puž je prešao " . $predjenPut . "cm, visina drveta " . $visinaDrveta . " cm.<br>";
    for($dan=2; $predjenPut<$visinaDrveta; $dan++ ){
            $visinaDrveta += BRZINA_RASTA_DRVETA;
            $predjenPut +=$brzinaPuza;
            if($predjenPut>$visinaDrveta){
                $predjenPut=$visinaDrveta;
            }
            echo "Dan " . $dan . ": Puž je prešao " . $predjenPut . "cm, visina drveta " . $visinaDrveta . " cm.<br>";
        }
}

?>