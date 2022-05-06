<?php
if(empty($_POST['szida']) || empty($_POST['vzida']) || empty($_POST['vzida']) || empty($_POST['dplocice'])){
    echo "Unesite sve tražene podatke. <br>";
} else {
    $sirinaZida=$_POST['szida'];
    $visinaZida=$_POST['vzida'];
    $sirinaPlocice=$_POST['splocice'];
    $duzinaPlocice=$_POST['dplocice'];

    $povrsinaZida = $sirinaZida * $visinaZida;
    $povrsinaPlocice = $sirinaPlocice * $duzinaPlocice;

    $brojPlocica = $povrsinaZida / $povrsinaPlocice;
    echo "Broj potrebnih pločica je " . ceil($brojPlocica);
}
?>