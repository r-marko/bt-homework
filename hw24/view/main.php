<div class="container mt-5">
<div class="row justify-content-between">
    <?php foreach ($availableProducts->getAvailableProducts() as $value) { ?>
        <div class="card col-4 mb-3" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo htmlspecialchars($value["img"]); ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($value["title"]); ?></h5>
                <p class="card-text"><?php echo htmlspecialchars($value["description"]); ?></p>
                <form method="POST" action="index.php"> 
                    <input class="m-3" type="text" name="price" value="CENA: <?php echo htmlspecialchars($value['price']); ?> RSD" style="border:none;" disabled>
                    <label>Izaberite količinu: 
                        <input class="mb-2" type="number" name="amount" style="width:55px" min="1" max="10">
                    </label>
                    <input type="text" style="display:none" name="product-id" value="<?php echo htmlspecialchars($value['id']);?>">
                    <button type="submit" name="submit" value="1" class="btn btn-primary">ADD TO CART</button>
                </form>
            </div>
        </div>
    <?php  } ?>
</div>
</div>

