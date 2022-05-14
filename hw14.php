<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domaci zadatak 14</title>
</head>
<body>
    <!-- Zadatak 1 -->
    <div style="margin:5em; border:1px solid blue; width:15rem">
        <form action="hw14.php" method="GET" style="padding:3em">
            <legend>Validator datuma:</legend> <br>
            <input type="text" name="dan" placeholder="Unesite dan">
            <br>
            <input type="text" name="mesec" placeholder="Unesite mesec">
            <br>
            <input type="text" name="godina" placeholder="Unesite godinu">
            <br>
            <input type="submit" value="Pošalji">
        </form>
    </div>
    <div style="width:30%; height: 4em; border:1px dotted black; text-align:center; margin:2em 5em">

<?php
if (!isset($_GET)) {
    die("Unesite vrednosti u polja");
}
if (empty($_GET['dan']) || empty($_GET['mesec']) || empty($_GET['godina'])) {
    die ("Morate uneti vrednosti u svako polje");
} elseif (!is_numeric($_GET['dan']) || !is_numeric($_GET['mesec']) || !is_numeric($_GET['godina']) ) {
    die ("Unesite numeričke vrednosti u polja");
} elseif (strlen($_GET['dan'])>2 || strlen($_GET['mesec'])>2 || strlen($_GET['godina'])>4) {
die ("Za datum i mesec možete uneti najviše dva karaktera, a za godinu najviše četiri.");
} elseif ( $_GET['dan']>31 || $_GET['dan']<1 || $_GET['mesec']>12 || $_GET['mesec']<1 || $_GET['godina']<1) {
    die("Greška, zadati datum nije moguć");
} else {
    $dan = $_GET['dan'];
    $mesec = $_GET['mesec'];
    $godina = $_GET['godina'];
    if ($godina%4==0 && ($godina%100!=0 || ($godina%400==0 && $godina%100==0))){
        $prestupna = true;
    }
    else {
        $prestupna = false;
    }
    function verifikatorDatuma($dan, $mesec, $godina, $prestupna){
        if ($mesec == 1 || $mesec == 3 || $mesec == 5 || $mesec == 7 || $mesec == 8 || $mesec == 10 || $mesec == 12 ){
            if ($dan<=31) {
                echo "Datum je tačan";
            } else { echo "Datum nije tačan";}
        }
        if ($mesec == 2 && $prestupna == true){
            if ($dan<=29) {
                echo "Datum je tačan";
            } else { echo "Datum nije tačan";}
        } 
        if ($mesec == 2 && $prestupna == false){
            if ($dan<=28) {
                echo "Datum je tačan";
            } else { echo "Datum nije tačan";}
        }
        if ($mesec == 4 || $mesec == 6 || $mesec == 9 || $mesec == 11){
            if ($dan<=30){
                echo "Datum je tačan";
            } else { echo "Datum nije tačan";}
        }
    }
    verifikatorDatuma($dan, $mesec, $godina, $prestupna);
}
?>
    </div>
    <hr>
    <!-- Zadatak 2 -->

    <div id="kamioni" style="margin:5em; border:1px solid blue; width:10rem; height:7rem">
        <label>Brojač kamiona:</label>
        <br>
        <?php
            function brojacKamiona($ukupnoGorivo, $potrosnjaPoKamionu, $ostatakGorivaFlag = false){
                $brojKamionaKojiMoguDaPredjuRutu = floor($ukupnoGorivo /  $potrosnjaPoKamionu);
                $ostatakGoriva = $ukupnoGorivo % $potrosnjaPoKamionu;
                if ($ostatakGorivaFlag === true){
                    echo "Ostatak goriva je " .  $ostatakGoriva . " litara.";
                    return $ostatakGoriva;
                } else {
                    echo "Broj kamiona koji mogu da pređu zadatu rutu je: " . $brojKamionaKojiMoguDaPredjuRutu;
                    return $brojKamionaKojiMoguDaPredjuRutu;
                }
            }
            brojacKamiona(192,18, true);
        ?>
    </div>
</body>
</html>