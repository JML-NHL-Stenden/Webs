<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks - shopping cart</title>
    <link rel="stylesheet" href="shoppingcart.css">
</head>
<body>

<!-- --------------------------------- HEADER ------------------------------- -->
<header>
<?php
include "./view/layout/header.php"
?>
</header>
<!-- --------------------------------- HEADER - END  ------------------------------- -->



<!-- --------------------------------- MAIN ------------------------------- -->

<main>
        <div class="your-cart">
            <h1>Your cart</h1>
        </div>
    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $count_of_pairs = filter_input(INPUT_POST, "number-input");
        $color = filter_input(INPUT_POST, "color");
        echo "
        <div class='product box'>";
        if ($color == "pink") {
            echo "
            <div class='single-product'>
                <div class='socks-image'>
                    <img src='./img/Sunny_socks_".$color."_01.jpg' alt=".$color."-socks>
                </div>";
        }
        else {
            echo "
            <div class='single-product'>
                <div class='socks-image'>
                    <img src='./img/Sunny_socks_".$color.".jpg' alt=".$color."-socks>
                </div>";
        }
        echo "
                <div class='product-info'>
                    <p><b>Color: </b>".$color."</p>
                    <p><b>Pair count: </b>".$count_of_pairs."</p>
                </div>
            </div>
        </div>
        "
        ;
    }
    ?>
        <div class="order-summary box">
            <h3>Order summary</h3>
            <div class="total-price">
                <div class="total">
                        Total
                    </div>
                    <div class="price">
                        <?php
                        echo 4 * $count_of_pairs." €";
                        ?>
                    </div>
                </div>
            <a href="Sunny_web_checkout/checkout.php" class="go-to-checkout">
                Go to checkout →
            </a>
        </div>
</main>

<!-- --------------------------------- MAIN - END ------------------------------- -->



<!-- --------------------------------- FOOTER ------------------------------- -->

<footer>
<?php
include "./view/layout/footer.php"
?>
</footer>
<!-- --------------------------------- FOOTER - END ------------------------------- -->

</body>
</html>