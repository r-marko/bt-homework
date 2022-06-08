<?php

try{
class Connect{
    private $servername = "localhost";
    private $dbname = "test";               // Database name is "test"
    private $dbusername = "root";
    private $dbpassword = "";

    private $dbconnect;
    public function dbConnect(){
        $dbconnect = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
        $dbconnect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $dbconnect;
    }
}
class HW22 extends Connect{
    public function createTable(){
        $sql = "CREATE TABLE IF NOT EXISTS hw22(
            id INT(20) NOT NULL AUTO_INCREMENT,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL,
            email_verified_at DATETIME,
            created_at TIME,
            PRIMARY KEY (id)
        )";
        $stmt = $this->dbConnect()->query($sql);
        return $stmt;
    }

    public function setTable($name, $email, $password, $email_verified_at, $created_at ){
        $sql = "INSERT INTO hw22(name, email, password, email_verified_at, created_at) VALUES(?,?,?,?,?);";
        $stmt = $this->dbConnect()->prepare($sql);
        $date = date("Y-m-d h:i:s");
        $time = date("h:i:s", strtotime("now"));
        $stmt->execute([$name,$email,$password,$date,$time]);
    }
    public function getValuesFromTable(){
        $sql = "SELECT * FROM hw22;";
        $stmt = $this->dbConnect()->query($sql);
        while ($row=$stmt->fetch()){
            echo $row['name'] . " | " . $row['email'] . " | " . $row['password'] . " | " . $row['email_verified_at'] . " | " . $row['created_at'] . "<br>";
        }
    }
}


} catch(\Throwable $exception){
    echo "Error in code: " . $exception->getLine();
    echo "Error " . $exception->getMesage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execeptions</title>
</head>
<body>
    <?php
    try{
        // Creating table 'hw22' in 'test' database
        $pdo = new HW22();
        $pdo->createTable();

        // Seting values into table
        $pdo->setTable("Marko", "marko@marko", "markopassword", "", "");
        $pdo->setTable("Ivan", "ivan@marko", "ivanspassword", "", "");
        $pdo->setTable("Juga", "jugo@marko", "jugapassword", "", "");
        $pdo->setTable("Vesna", "vesna@marko", "vesnapassword", "", "");
        $pdo->setTable("Sanja", "sanja@marko", "sanjapassword", "", "");
        $pdo->setTable("Sneza", "sneza@marko", "", "", "");                 // Ovde bi trebalo da izbaci gresku, ali ne radi
        $pdo->setTable("Simke", "simke@marko", "simkepassword", "", "");
        $pdo->setTable("Trile", "trile@marko", "trilepassword", "", "");
        $pdo->setTable("Ana", "ana@marko", "anapassword", "", "");
        $pdo->setTable("Bojan", "bojan@marko", "bojanpassword", "", "");


        $pdo->getValuesFromTable();
    } 
    catch(Exception $e) {
        $e->getMessage("Something goes wrong;");
        echo "Mistake in code " . $e->getLine();

    }

    ?>
</body>
</html>