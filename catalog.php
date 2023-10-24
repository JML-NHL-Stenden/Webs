<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="catalog-style.css" type="text/css">
    <title>Catalog</title>
</head>

    <body>
        <!-- start of header -->
        <header>
            <?php include "./view/layout/header.php";?>
        </header>
        <!-- end of header starting with main now -->
        <main>
            <div class="home-title">
                <p>Home &nbsp > &nbsp Shop</p>
            </div>
            <!-- start of whole code, below is the grid container for everything -->
            <div class="grid-container">
                <!-- the star of the filter section -->
                <div class="filter-grid">
                    <div class="filter-flex">
                        <h3 class="h3-style">Filters</h3>
                            <div class="line-style"><hr></div>
                                <div class="filters">
                                    <nav>
                                        <p><a href="">Uni-Color</a></p>
                                        <p><a hred="">Striped</a></p>
                                        <p><a href="">New Arrivals &nbsp ></a></p>
                                        <p><a href="">Outstanding Products</a></p>
                                    </nav>
                                </div>
                            <!-- some line inside the thing -->
                            <div class="line-style"><hr></div>
                            <div class="line-style"><hr></div>
                            <h3 class="h3-style">Colors</h3>
                                <div class="filters">
                                    <div class="colors-spacing">
                                        <span class="circle green-circle"><a href=""></a></span>
                                        <span class="circle red-circle"><a href=""></a></span>
                                        <span class="circle yellow-circle"><a href=""></a></span>
                                        <span class="circle blue-circle"><a href=""></a></span>
                                        <span class="circle pink-circle"><a href=""></a></span>
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
                            <div class="filters"><input type="submit" value="Apply Filter"></div>
                    </div>
                </div>
                <!-- end of filet and start of the second section -->
                    <div class="h2-astyle"><h2>Arrivals</h2></div>
                    <div class="h4-astyle"><h4>Showing 1-10 of 100 Products &nbsp Sort by: Most Popular</h4></div>
                        <!-- column 2 starts here -->
                        <div class="column-2">
                            <div class="flex-items">
                                <div class="bs-box">
                                    <img src="./img/Sunny_socks_blue.jpg" alt="Sunny_socks_blue">
                                    <p>Sunny's Blue Striped Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="gs-box">
                                    <img src="./img/Sunny_socks_green.jpg" alt="Sunny_socks_green">
                                    <p>Sunny's Green Striped Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="ps-box">
                                    <img src="./img/Sunny_socks_pink_01.jpg" alt="Sunny_socks_pink_01">
                                    <p>Sunny's Pink Striped Sock</p>
                                </div>
                            </div>
                        </div>
                        <!-- column 3 start below -->
                        <div class="column-3">
                            <div class="flex-items">
                                <div class="rs-box">
                                    <img src="./img/Sunny_socks_red.jpg" alt="Sunny_socks_uni_red">
                                    <p>Sunny's Red Striped Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="bu-box">
                                    <img src="./img/Sunny_socks_uni_blue.jpg" alt="Sunny_socks_uni_blue">
                                    <p>Sunny's Blue Uni-Color Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="gu-box">
                                    <img src="./img/Sunny_socks_uni_green.jpg" alt="Sunny_socks_uni_green">
                                    <p>Sunny's Green Uni-Color Sock</p>
                                </div>
                            </div>
                        </div>
                        <!-- column 4 start below -->
                        <div class="column-4">
                            <div class="flex-items">
                                <div class="pu-box">
                                    <img src="./img/Sunny_socks_uni_pink.jpg" alt="Sunny_socks_uni_pink">
                                    <p>Sunny's Pink Uni-Color Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="ru-box">
                                    <img src="./img/Sunny_socks_uni_red.jpg" alt="Sunny_socks_uni_red">
                                    <p>Sunny's Red Uni-Color Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="ys-box">
                                    <img src="./img/Sunny_socks_yellow.jpg" alt="Sunny_socks_yellow">
                                    <p>Sunny's Yellow Striped Sock</p>
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