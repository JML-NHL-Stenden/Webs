<!DOCTYPE html>
<html lang="en">
    <head>
        <meta chraset="UTF-8">
        <meta name="viewpoint" content="width=device-width, intial-scale=1.0">
        <title>header</title>
        <link rel="stylesheet" href="./css/common.css">
        <link rel="stylesheet" href="./css/header.css">
    </head>

    <body>
        <!-- Yellow top section -->
        <div class="top-section">
            <h5><a href="Sign_Up_Page.php">Sign up and get 20% off to your first order. Sign Up Now</a></h5>
        </div>

        <!-- Head navigation section -->
        <div class="heading">
            <div class="logo"><a href="Project1.php">sunny</a></div>
            <div class="navbar">
                <ul>
                    <li><a href="catalog-zj.php">Shop</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                </ul>
            </div>

            <!-- Search bar -->
            <div class="searchbar">
                <form action="action_page.php" method="POST">
                    <button class="button" type="submit"></button>
                    <input type="text" placeholder="Search for products..." name="search">
                </form>
            </div>
            
            <div class="user">
                <a href="shoppingcart.php" class="cart"></a>
                <a href="contact_details.php" class="user-icon"></a>
            </div>
        </div>
