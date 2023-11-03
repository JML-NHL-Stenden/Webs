<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunny socks - shopping cart</title>
    <link rel="stylesheet" href="./css/shoppingcart.css">
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

<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $counts_of_pairs = filter_input(INPUT_POST, "counts_of_pairs", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
    $hasNonZeroValue = false;
    $total_pair_count= 0;
    foreach($counts_of_pairs as $color => $number) {
        if (!empty($number)) {
            $hasNonZeroValue = true;
        }
    }

    if ($hasNonZeroValue == true) {
        echo "
        <main>
            <div class='your-cart'>
                <h1>Your cart</h1>
            </div>
            <div class='product-and-summary'>
                <div class='product box'>";
            $keys = array_keys($counts_of_pairs);
            $lastArrayItem = end($keys);
            foreach($counts_of_pairs as $color => $number) {
                if (!empty($number)) {
                    if (strpos($color, "-u")) {
                        $colorName = trim($color,"-u");
                        echo "
                    <div class='single-product'>
                        <div class='socks-image'>
                            <img src='./img/Sunny_socks_uni_".$colorName.".jpg' alt=".$color."-socks>
                        </div>
                        <div class='product-info'>
                            <h3>Sunny's Uni-Socks</h3>
                            <p><b>Color: </b>".$colorName."</p>
                            <p><b>Pair count: </b>".$number."</p>
                        </div>
                    </div>";
                        
                        $total_pair_count += $number;
                        $hasNonZeroValue = true;
                    
                    }
                    
                // stripes checkout
                    else {
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
                            <h4>Sunny's Striped Socks</h4>
                            <p><b>Color: </b>".$color."</p>
                            <p><b>Pair count: </b>".$number."</p>
                        </div>
                    </div>";
                        
                        $total_pair_count += $number;
                        $hasNonZeroValue = true;
                    }

                    //adding <hr>-s
                    if ($color != $lastArrayItem){ 
                        echo "<hr>";
                    }
                }
            }
    
                echo "
                </div>";
                    $count_div_by_three_remain = $total_pair_count % 3;
                    $count_rest = $total_pair_count - $count_div_by_three_remain;
                    $price_for_remain = $count_div_by_three_remain * 4;
                    $price_for_rest = $count_rest / 3 * 10;
                    $total_price = $price_for_remain + $price_for_rest;
                    echo "
                <div class='order-summary box'>
                    <h3>Order summary</h3>
                    <div class='total-price'>
                        <div class='total'><b>
                            Total
                        </b></div>
                        <div class='price'>";
                            echo $total_price." € 
                        </div>
                    </div>
                    <div class='go-to-checkout'>
                        <a href='checkout.php'>Go to checkout <b>→</b></a>
                    </div>
                </div>
            </div>
        </main>";
    }

    else {
        ?>
        <main id="empty-cart">
            <div class="img-container">
                <img src="pictures/empty_cart.png" alt="empty-cart">
            </div>
            <h1><b>Your cart is empty and sad :&#40</b></h1>
            <div class="button-area">
                <div class="continue-shopping-button">
                    <a href="Project1.php"><b>Continue shopping</b></a>
                </div>
            </div>
        </main>
        <?php
    }
}
?>
    
            

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