<?php
session_start();
if (!isset($_SESSION['cartCounter'])){
   $_SESSION['cartCounter'] = 0;
}
if (isset($_POST['submit']) && !empty($_POST['submit']) && isset($_POST['amount']) && !empty($_POST['amount']) && is_numeric($_POST['amount']) && $_POST['amount']>0){
   $_SESSION['cartCounter'] += 1;
}

if (isset($_POST['product-id']) && !empty($_POST['product-id'])){
   $_SESSION['id'] = $_POST['product-id'];
}
if (isset($_POST['amount']) && !empty($_POST['amount'])){
   $_SESSION['amount'] = $_POST['amount'];
}


require_once __DIR__ . "/model/m-allproducts.php";

require_once __DIR__ . "/model/m-shopping-cart.php";

require_once __DIR__ . "/view/_layout/header.php";

$availableProducts = new AvailableProducts();



require_once __DIR__ . "/view/main.php";





?>