<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/theme/css/bootstrap.css">
    <link rel="icon" href="./public/theme/img/Demo Shop.png">
    <script defer src="./public/theme/js/bootstrap.js"></script>
    <title>Shoping cart</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light border border-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img alt="Demo Shop" src="./public/theme/img/Demo Shop.png" width="60rem" height="60rem"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
        <div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link fs-4" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="index.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4" href="#">Contact Us</a>
                </li>
                <li class="nav-item">  
                <a class="nav-link" href="shopping-cart-controller.php">
                    <img alt="Shopping Cart" src="./public/theme/img/Demo Shop shoppingCart.png" width="40rem" height="40rem">
                    <span class="position-absolute top-5 start-90 translate-middle badge rounded-pill bg-danger">
                       <?php if(isset($_SESSION['cartCounter']) && !empty($_SESSION['cartCounter'])){
                            echo $_SESSION['cartCounter'];
                                }
                       ?>
                    </span>
                </a>
                </li>
            </ul>
        </div>
        </div>
  </div>
</nav>





    
