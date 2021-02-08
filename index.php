<?php
require_once __DIR__. "/Category.php";
require_once __DIR__. "/Shipping.php";

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
    <?php $product2 = new Category("iPhone", 880, "Technology"); ?>
    <?php $product3 = new Shipping("iPhone",880 ); ?>

    <div class="container">
        <div class="products_container">
            <div class="product">
                <h3><?php echo $product2->name?></h3>
                <p><?php echo $product2->getPrice()?></p>
                <p>Costo spedizione: <?php echo $product3->shippingCostCalculator()?></p>
            </div>
        </div>
    </div>
</body>
</html>