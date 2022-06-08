<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesije</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
 

<?php

$alert ='
<form method="POST" action="index.php">
<div class="alert alert-primary" role="alert">
  Prihvatitate li kolačiće?
  <button type="submit" name="btn" value="ok" class="btn btn-info">Prihvatam</button>
</div>
</form>
';
    if (!empty($_SESSION['alert']) && $_SESSION['alert'] == "ok"){
        $alert = '
        <div class="alert alert-primary" role="alert">
            Prihvatili ste kolačiće.
        </div>';
    } else {
        if (!empty($_POST['btn']) && $_POST['btn'] == "ok"){
        $_SESSION['alert'] = $_POST['btn'];
        header("Refresh:0");
        }
    }
echo $alert;
?>

    <script src="js/bootstrp.min.js"></script>
</body>
</html>