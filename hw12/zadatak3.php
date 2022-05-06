<?php
$n=256; // ovo je varijabla koja se menja
$x=0;
echo "Zbir prvih " . $n . " ";
for ($n; $n>0; $n--){
    $x=$x+$n;
}
echo "brojeva je " . $x;
?>