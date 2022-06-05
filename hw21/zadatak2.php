<?php

class Connection {
    public function dbConnect(){
        return new PDO("mysql:host=localhost dbname=colors", "root", "");
    }
}

class Color {
    private $database;

    public function __constrct() {
        $this->database = new Connection();
        $this->database = $this->database->dbConnect();
    }
    public function color_select($status){
        $sql = "SELECT name FROM colors WHERE status LIKE ?";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $status);
        $stmt->execute();
        foreach ($stmt as $value){
            return $value;
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $color = new Color();
    echo $color->color_select(1) . "<br>";
    ?>
</body>
</html>
