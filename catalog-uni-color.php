<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalog-style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/catalog-j.js"></script>
</head>

    <body>
        <!-- start of header -->
        <header>
            <?php include "./view/layout/header.php";?>
        </header>
        <!-- end of header starting with main now -->
        <main>
            <div class="home-title">
                <p><a href="main.html"> Home &nbsp > </a>&nbsp Shop</p> 
            </div>
            <!-- start of whole code, below is the grid container for everything -->
            <div class="grid-container">
                <!-- the star of the filter section -->
                <div class="filter-grid">
                    <div class="filter-flex">
                        <h3 class="h3-style">Filters</h3>
                         <!-- some line inside the thing -->
                            <div class="line-style"><hr></div>
                                <div class="filters">
                                    <nav>
                                        <a href="catalog-uni-color.php"><li>Uni-Color</li></a>
                                        <a hreF="catalog-stripped.php"><li>Striped</li></a>
                                    </nav>
                                </div>
                            <!-- some line inside the thing -->
                            <div class="line-style"><hr></div>
                            <div class="line-style"><hr></div>

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
                            <div class="line-style"><hr></div>
                            <h3 class="h3-style">Size</h3>
                                <div class="filters">
                                    <div class="">
                                        <input type="checkbox" name="xsmall" id="xsmall" value="xsmall">
                                        <label for="">X-Small</label>
                                        <input type="checkbox" name="small" id="small" value="small">
                                        <label for="">Small</label>
                                        <input type="checkbox" name="medium" id="medium" value="medium">
                                        <label for="">Medium</label>
                                        <input type="checkbox" name="large" id="large" value="large">
                                        <label for="">Large</label>
                                        <input type="checkbox" name="xlarge" id="xlarge" value="xlarge">
                                        <label for="">X-Large</label>
                                        <input type="checkbox" name="xxlarge" id="xxlarge" value="xxlarge">
                                        <label for="">XX-Large</label>
                                    </div>
                                </div>
                            <!-- some line inside the thing -->
                            <div class="line-style"><hr></div>
                    </div>
                </div>
                <!-- end of filet and start of the second section -->
                    <div class="h2-astyle h2-move"><h2>Arrivals</h2></div>
                    <div class="h4-astyle h4-move"><h4>Showing 1-9 Products</h4></div>
                        <!-- column 2 starts here -->
                        <div class="column-2">
                            <div class="flex-items">
                                <div class="pu-box">
                                <a href=""></a><img src="./img/Sunny_socks_uni_pink.jpg" alt="Sunny_socks_uni_pink">
                                    <p>Sunny's Pink Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="ru-box">
                                <a href=""></a><img src="./img/Sunny_socks_uni_red.jpg" alt="Sunny_socks_uni_red">
                                    <p>Sunny's Red Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                            <div class="button-move">
                                <div class="button-styling">
                                    <p><a href="#">Previous</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- column 3 start below -->
                        <div class="column-3">
                            <div class="flex-items">
                                <div class="rs-box">
                                <a href=""></a><img src="./img/Sunny_socks_uni_green.jpg" alt="Sunny_socks_green">
                                    <p>Sunny's Green Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="bu-box">
                                <a href=""></a><img src="./img/Sunny_socks_uni_blue.jpg" alt="Sunny_socks_uni_blue">
                                    <p>Sunny's Blue Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                            <div class="butt-num">
                                <p><a href="#">1</a> &nbsp &nbsp &nbsp<a href="#">2</a></p>
                            </div>
                        </div>
                        <!-- column 4 start below -->
                        <div class="column-4">
                            <div class="flex-items">
                                <div class="pu-box">
                                <a href=""></a><img src="./img/Sunny_socks_uni_yellow.jpg" alt="Sunny_socks_uni_yellow">
                                    <p>Sunny's Yellow Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
                                </div>
                            </div>
                            <div class="flex-items"></div>
                            <div class="button-move">
                                <div class="button-styling">
                                    <p><a href="#">Next</a></p>
                                </div>
                            </div>
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