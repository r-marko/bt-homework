<?php
// 1.
$sql = "SELECT name FROM colors WHERE status=1;";

// 2.
$arr_id = [1,2,3,4,5,6,7,8,9,10]; // niz id-eva boja 
$rand = array_rand($arr_id,5);    // pravi niz od 5 random boja
for ($i=0;$i<5;$i++){
    $number = $rand[$i];          //uzima jedan id iz random niza
    $sql = "SELECT name FROM colors WHERE id=$number;";       // ispisuje boju iz random niza
}

//3.
$time = time();
$date = date("Y-m-d",$time);
$sql = "INSERT INTO colors ('id', 'name', 'hex_value', 'status', 'created_at', 'updated_at') VALUES ('11', 'mainlygreen', '#276551', '1', '2022-06-05 15:42:22', '$date');";

//4.
$sql = "UPDATE colors SET status=1;";

//5.
$sql = "DELETE FROM colors WHERE id=5;";

//6.

$arr_updated_colors = "SELECT updated_at FROM colors"; // stavlja vrednosti iz tabele kolone updated_at u niz
$najranije_promenjena = strtotime(time());             // pretvara trenutno vreme u timestamp
foreach ($arr_updated_colors as $value){               // ulazi u niz $arr_updated_colors
    if (strtotime($value) < $najranije_promenjena){    // ako je neka timestamp vrednost niza manja od vrednosti $najranije_promenjena, stavlja tu vrednost u promenljivu $najranije_promenjena
        $najranije_promenjena = strtotime($value);
    }
}
$najranije_promenjena = date('Y-m-d H:i:s', $najranije_promenjena);  // vraca date time oblik od timestamp vrednosti $najranije_promenjena
$sql = "DELETE FROM colors WHERE updated_at=$najranije_promenjena;"; // brise iz baze najranije promenjenu boju

?>