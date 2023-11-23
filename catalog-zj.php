<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog Page</title>
    <link rel="stylesheet" href="./css/catalog-fix.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    <body>
        <!-- start of header -->
        <header>
            <?php include "./view/layout/header.php";?>
        </header>
        <!-- end of header starting with main now -->
        <main>
            <div class="home-title">
                <p><a href="Project1.php"> Home &nbsp > </a>&nbsp Shop</p>
            </div>
            <!-- testing -->
            <div class="filter-grid">
                    <div class="filter-flex">
                        <h3 class="h3-style">Filters</h3>
                         <!-- some line inside the thing -->
                           <hr>
                                <div class="filters">
                                    <div class="filter-p">
                                        <button class="filter-btn" onclick="filter('all')"> > All</button>
                                        <button class="filter-btn" onclick="filter('striped')"> > Strips</button>
                                        <button class="filter-btn" onclick="filter('uni')"> > Uni-color</button>
                                    </div>
                                </div>
                            <!-- some line inside the thing -->
                            <hr>
                            <hr>

                            <h3 class="h3-style">Colors</h3>
                                <div class="filters">
                                    <div class="custom-radio" id="red" onclick="filter('red')">
                                        <input type="radio" id="red-c" name="color" value="red">
                                        <label for="red-c"></label>
                                    </div>
                                    <div class="custom-radio" id="green" onclick="filter('green')">
                                        <input type="radio" id="green-c" name="color" value="green">
                                        <label for="green-c"></label>
                                    </div>
                                    <div class="custom-radio" id="blue" onclick="filter('blue')">
                                        <input type="radio" id="blue-c" name="color" value="blue">
                                        <label for="blue-c"></label>
                                    </div>
                                    <div class="custom-radio" id="yellow" onclick="filter('yellow')">
                                        <input type="radio" id="yellow-c" name="color" value="yellow">
                                        <label for="yellow-c"></label>
                                    </div>
                                    <div class="custom-radio" id="pink" onclick="filter('pink')">
                                        <input type="radio" id="pink-c" name="color" value="pink">
                                        <label for="pink-c"></label>
                                    </div>
                                </div>
                            <!-- some line inside the thing -->
                            <hr>
                    </div>
                </div>
        <!-- End of filter section -->
            <!-- Start for product image -->
            <div class="h2-astyle"><h2>Arrivals</h2></div>
            <div class="h4-astyle"><h4>Showing 1-10 Products</h4></div>

            <div class="gallery" id="gallery">
                <!-- Below is the sock content -->
                <a href="product_detail_strip.php">
                    <div class="positioning">
                        <div class="item bold striped blue">
                            <img src="./img/Sunny_socks_blue.jpg" class="sock-img" alt="Sunny_socks_blue">
                            <p>Sunny's Blue Striped Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_strip.php">
                    <div class="positioning">
                        <div class="item bold striped green">
                            <img src="./img/Sunny_socks_green.jpg" class="sock-img" alt="Sunny_socks_green">
                            <p>Sunny's Green Striped Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_strip.php">
                    <div class="positioning">
                        <div class="item bold striped pink">
                            <img src="./img/Sunny_socks_pink_01.jpg" class="sock-img" alt="Sunny_socks_pink">
                            <p>Sunny's Pink Striped Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_strip.php">
                    <div class="positioning">
                        <div class="item bold striped red">
                            <img src="./img/Sunny_socks_red.jpg" class="sock-img" alt="Sunny_socks_red">
                            <p>Sunny's Red Striped Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_uni.php">
                    <div class="positioning">
                        <div class="item bold uni blue">
                            <img src="./img/Sunny_socks_uni_blue.jpg" class="sock-img" alt="Sunny_socks_uni_blue">
                            <p>Sunny's Blue Uni-Color Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_uni.php">
                    <div class="positioning">         
                        <div class="item bold uni green">
                            <img src="./img/Sunny_socks_uni_green.jpg" class="sock-img" alt="Sunny_socks_uni_green">
                            <p>Sunny's Green Uni-Color Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_uni.php">
                    <div class="positioning">
                        <div class="item bold uni pink">
                            <img src="./img/Sunny_socks_uni_pink.jpg" class="sock-img" alt="Sunny_socks_uni_pink">
                            <p>Sunny's Pink Uni-Color Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_uni.php">
                    <div class="positioning">
                        <div class="item bold uni yellow">
                            <img src="./img/Sunny_socks_uni_yellow.jpg" class="sock-img" alt="Sunny_socks_uni_yellow">
                            <p>Sunny's Yellow Uni-Color Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_uni.php">
                    <div class="positioning">
                        <div href="" class="item bold uni red">
                            <img src="./img/Sunny_socks_uni_red.jpg" class="sock-img" alt="Sunny_socks_uni_red">
                            <p>Sunny's Red Uni-Color Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
                <a href="product_detail_strip.php">
                    <div class="positioning">
                        <div class="item bold striped yellow">
                            <img src="./img/Sunny_socks_yellow.jpg" class="sock-img" alt="Sunny_socks_yellow">
                            <p>Sunny's Yellow Striped Sock</p>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <i class="fa fa-star-half-full"></i>
                            </div>
                                <p>&euro;3.99</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- product container end  -->
        </main>
        <!-- footer -->
        <footer>
            <?php include './view/layout/footer.php';?>
        </footer>
        <!-- end of footer -->
    </body>
    <!-- end of body -->
    <script src="./js/catalog-change-fixed.js"></script>
</html>
