<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/catalog-style.css" type="text/css">
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
                <p><a href="index.php"> Home &nbsp > </a>&nbsp Shop</p> 
            </div>
            <!-- start of whole code, below is the grid container for everything -->
            <div class="grid-container">
                <!-- the star of the filter section -->
                <div class="filter-grid">
                    <div class="filter-flex">
                        <h3 class="h3-style">Filters</h3>
                         <!-- some line inside the thing -->
                            <hr>
                                <div class="filters">
                                    <nav>
                                        <a href="catalog.php"><li> > &nbsp Show All</li></a>
                                        <a href="catalog-uni-color.php"><li> > &nbsp Uni-Color</li></a>
                                        <a hreF="catalog-stripped.php"><li> > &nbsp Striped</li></a>
                                    </nav>
                                </div>
                            <!-- some line inside the thing -->
                            <hr>
                            <hr>

                            <h3 class="h3-style">Colors</h3>
                                <div class="filters">
                                    <div class="colors-spacing">
                                        <a href="catalog-green.php"><span class="circle green-circle"><input type="hidden" value="green"></span></a>
                                        <a href="catalog-red.php"><span class="circle red-circle"><input type="hidden" value="red"></span></a>
                                        <a href="catalog-yellow.php"><span class="circle yellow-circle"><input type="hidden" value="yellow"></span></a>
                                        <a href="catalog-blue.php"><span class="circle blue-circle"><input type="hidden" value="blue"></span></a>
                                        <a href="catalog-pink.php"><span class="circle pink-circle"><input type="hidden" value="pink"></span></a>
                                    </div>
                                </div>
                            <!-- some line inside the thing -->
                            <hr>
                    </div>
                </div>
                <!-- end of filet and start of the second section -->
                    <div class="h2-astyle h2-move"><h2>Arrivals</h2></div>
                    <div class="h4-astyle h4-move"><h4>Showing 2 Products</h4></div>
                        <!-- column 2 starts here -->
                        <div class="column-2">
                            <div class="flex-items">
                                <div class="bs-box">
                                <a href="product_detail_strip.php"><img src="./img/Sunny_socks_blue.jpg" alt="Sunny_socks_blue" id="img-container-9">
                                    <p>Sunny's Blue Striped Sock</p>
                                </a>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                        </div>
                        <!-- column 3 start below -->
                        <div class="column-3">
                            <div class="flex-items">
                                <div class="bu-box">
                                <a href="product_detail_uni.php"><img src="./img/Sunny_socks_uni_blue.jpg" alt="Sunny_socks_uni_blue" id="img-container-4">
                                    <p>Sunny's Blue Uni-Color Sock</p>
                                </a>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                        </div>
                        <!-- column 4 start below -->
                        <div class="column-4">
                            <div class="flex-items"></div>
                        </div>   
                <!-- end of the second section "arrivals" -->
            </div>
            <!-- end of the main grid class for everything -->
        </main>
        <!-- end of the main section starting with footer now -->
        <footer>
            <?php include './view/layout/footer.php';?>
        </footer>
        <!-- end of the footer -->
    </body>
</html>