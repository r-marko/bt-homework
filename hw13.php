<?php

function povrsina_drugog_bazena($b){
    $GLOBALS['y'] = pow($b/2,2)*pi();
    echo "Površina drugog bazena je " . number_format($GLOBALS['y'],2) . "<br>";
}

function povrsina_treceg_bazena($a,$b){
    $GLOBALS['z'] = $a*$b;
    echo "Površina trećeg bazena je " . round($GLOBALS['z'],2) . "<br>";
}
function povrsina_prvog_bazena(){
    $GLOBALS['x'] = $GLOBALS['y']/2 + $GLOBALS['z'];
    echo "Površina prvog bazena je " . round( $GLOBALS['x'],2) . "<br>";
}
function povrsina_svih_bazena(){ 
    $GLOBALS['w'] = $GLOBALS['x'] +  $GLOBALS['y'] + $GLOBALS['z'];
    echo "Ukupna površina svih bazena je " . round ($GLOBALS['w'],2) . "<br>";
    
}

povrsina_drugog_bazena(5);
povrsina_treceg_bazena(11,4);
povrsina_prvog_bazena();
povrsina_svih_bazena();
?>