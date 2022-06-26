<?php
session_start();

require_once __DIR__ . "/model/m-allproducts.php";

require_once __DIR__ . "/model/m-shopping-cart.php";

require_once __DIR__ . "/view/_layout/header.php";

$availableProducts = new AvailableProducts();

$productTitle = $availableProducts->getProductTitleByProductId($_SESSION['id']); 
$productPrice = $availableProducts->getProductPriceByProductId($_SESSION['id']);

$product = new ShoppingCart();

$product->setQuantity($_SESSION['amount']);
$product->setProduct($_SESSION['id'], $productTitle, $productPrice);
$product->setCartItems();
$cartItems = $product->getCartItems();
var_dump($cartItems);

require_once __DIR__ . "/view/view-cart.php";


?>