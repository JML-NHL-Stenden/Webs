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
                <p><a href="main.html"> Home &nbsp > </a></p> 
                <p> &nbsp Shop</p>
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
                                    <!-- <div class="colors-spacing">
                                        <span class="circle green-circle"><a href=""></a></span>
                                        <span class="circle red-circle"><a href=""></a></span>
                                        <span class="circle yellow-circle"><a href=""></a></span>
                                        <span class="circle blue-circle"><a href=""></a></span>
                                        <span class="circle pink-circle"><a href=""></a></span>
                                    </div> -->

                                    <div class="color-spacing">
                                        <span class="circle green-circle" onclick="changeImage('green')"></span>
                                        <span class="circle red-circle" onclick="changeImage('red')"></span>
                                        <span class="circle yellow-circle" onclick="changeImage('yellow')"></span>
                                        <span class="circle blue-circle" onclick="changeImage('blue')"></span>
                                        <span class="circle pink-circle" onclick="changeImage('pink')"></span>
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
                            <!-- include -->
                    </div>
                </div>
                <!-- end of filet and start of the second section -->
                    <div class="h2-astyle"><h2>Arrivals</h2></div>
                    <div class="h4-astyle"><h4>Showing 1-9 Products</h4></div>
                        <!-- column 2 starts here -->
                        <div class="column-2">
                            <div class="flex-items">
                                <div class="bs-box">
                                    <img src="./img/Sunny_socks_blue.jpg" alt="Sunny_socks_blue" id="img-container-9">
                                    <p>Sunny's Blue Striped Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="gs-box">
                                    <img src="./img/Sunny_socks_green.jpg" alt="Sunny_socks_green" id="img-container-6">
                                    <p>Sunny's Green Striped Sock</p>
                                </div>
                            </div>
                            <div class="flex-items">
                                <div class="ps-box">
                                    <img src="./img/Sunny_socks_pink_01.jpg" alt="Sunny_socks_pink_01" id="img-container-10">
                                    <p>Sunny's Pink Striped Sock</p>
                                </div>
                            </div>
                        </div>
                        <!-- column 3 start below -->
                        <div class="column-3">
                            <div class="flex-items">
                                <div class="rs-box">
                                    <img src="./img/Sunny_socks_red.jpg" alt="Sunny_socks_uni_red" id="">
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
                        <div>
                            
                        </div>     
                <!-- end of the second section "arrivals" -->
            </div>
            <!-- end of the main grid class for everything -->
        </main>
        <!-- javascript for color changing. -->
        <script>
function changeImage(phfil) {
            var imageElement1 = document.getElementById('img-container-1');
            var imageElement2 = document.getElementById('img-container-2');
            var imageElement3 = document.getElementById('img-container-3');
            var imageElement4 = document.getElementById('img-container-4');
            var imageElement5 = document.getElementById('img-container-5');
            var imageElement6 = document.getElementById('img-container-6');
            var imageElement7 = document.getElementById('img-container-7');
            var imageElement8 = document.getElementById('img-container-8');
            var imageElement9 = document.getElementById('img-container-9');
            var imageElement10 = document.getElementById('img-container-10');

            function changeImage(className) {
    var imageElement1 = document.getElementById('img-container-1');
    var imageElement2 = document.getElementById('img-container-2');
    var imageElement3 = document.getElementById('img-container-3');
    var imageElement4 = document.getElementById('img-container-4');
    var imageElement5 = document.getElementById('img-container-5');
    var imageElement6 = document.getElementById('img-container-6');
    var imageElement7 = document.getElementById('img-container-7');
    var imageElement8 = document.getElementById('img-container-8');
    var imageElement9 = document.getElementById('img-container-9');
    var imageElement10 = document.getElementById('img-container-10');

    var imagePath1;
    var imagePath2;
    var imagePath3;
    var imagePath4;
    var imagePath5;
    var imagePath6;
    var imagePath7;
    var imagePath8;
    var imagePath9;
    var imagePath10;

    // Set the image paths based on the selected paragraph
    switch (className) {
        case 'phfil unicolor':
            imagePath1 = './img/Sunny_socks_uni_green.jpg';
            imagePath2 = './img/Sunny_socks_uni_red.jpg';
            imagePath3 = './img/Sunny_socks_uni_yellow.jpg';
            imagePath4 = './img/Sunny_socks_uni_blue.jpg';
            imagePath5 = './img/Sunny_socks_uni_pink.jpg';
            break;
        case 'phfil strip-s':
            imagePath1 = './img/Sunny_socks_green.jpg';
            imagePath2 = './img/Sunny_socks_red.jpg';
            imagePath3 = './img/Sunny_socks_yellow.jpg';
            imagePath4 = './img/Sunny_socks_blue.jpg';
            imagePath5 = './img/Sunny_socks_pink_01.jpg';
            break;
        case 'phfil n-arrivals':
            imagePath1 = '../Webs/img/Sunny_socks_green.jpg';
            imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_green.jpg';
            break;
        case 'phfil outstanding-p':
            // Set the outstanding-products image path
            break;
        default:
            imagePath1 = './img/Sunny_socks_uni_green.jpg';
            imagePath2 = './img/Sunny_socks_uni_red.jpg';
            imagePath3 = './img/Sunny_socks_uni_yellow.jpg';
            imagePath4 = './img/Sunny_socks_uni_blue.jpg';
            imagePath5 = './img/Sunny_socks_uni_pink.jpg';
            imagePath6 = './img/Sunny_socks_green.jpg';
            imagePath7 = './img/Sunny_socks_red.jpg';
            imagePath8 = './img/Sunny_socks_yellow.jpg';
            imagePath9 = './img/Sunny_socks_blue.jpg';
            imagePath10 = './img/Sunny_socks_pink_01.jpg';
    }

    // Update the image sources
    imageElement1.src = imagePath1;
    imageElement2.src = imagePath2;
    imageElement3.src = imagePath3;
    imageElement4.src = imagePath4;
    imageElement5.src = imagePath5;
    imageElement6.src = imagePath6;
    imageElement7.src = imagePath7;
    imageElement8.src = imagePath8;
    imageElement9.src = imagePath9;
    imageElement10.src = imagePath10;
}


            var imagePath1;
            var imagePath2;
            var imagePath3;
            var imagePath4;
            var imagePath5;
            var imagePath6;
            var imagePath7;
            var imagePath8;
            var imagePath9;
            var imagePath10;

            // Set the image paths based on the selected color
            switch (phfil) {
                case 'unicolor':
                    imagePath1 = './img/Sunny_socks_uni_green.jpg';
                    imagePath2 = './img/Sunny_socks_uni_red.jpg';
                    imagePath3 = './img/Sunny_socks_uni_yellow.jpg';
                    imagePath4 = './img/Sunny_socks_uni_blue.jpg';
                    imagePath5 = './img/Sunny_socks_uni_pink.jpg';
                    break;
                case 'strip-socks':
                    imagePath1 = './img/Sunny_socks_green.jpg';
                    imagePath2 = './img/Sunny_socks_red.jpg';
                    imagePath3 = './img/Sunny_socks_yellow.jpg';
                    imagePath4 = './img/Sunny_socks_blue.jpg';
                    imagePath5 = './img/Sunny_socks_pink_01.jpg';
                    break;
                case 'new-arrivals':
                    imagePath1 = '../Webs/img/Sunny_socks_green.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_green.jpg';
                    break;
                // Colors
                case 'green':
                    imagePath1 = '../Webs/img/Sunny_socks_green.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_green.jpg';
                    break;
                case 'yellow':
                    imagePath1 = '../Webs/img/Sunny_socks_yellow.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_yellow.jpg';
                    break;
                case 'red':
                    imagePath1 = '../Webs/img/Sunny_socks_red.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_red.jpg';
                    break;
                case 'yellow':
                    imagePath1 = '../Webs/img/Sunny_socks_yellow.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_yellow.jpg';
                    break;
                case 'blue':
                    imagePath1 = '../Webs/img/Sunny_socks_blue.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_blue.jpg';
                    break;
                case 'pink':
                    imagePath1 = '../Webs/img/Sunny_socks_pink_01.jpg';
                    imagePath2 = '../Webs/img/Sunny_socks_uni_pink.jpg';
                    break;
                default:
                    imagePath1 = './img/Sunny_socks_uni_green.jpg';
                    imagePath2 = './img/Sunny_socks_uni_red.jpg';
                    imagePath3 = './img/Sunny_socks_uni_yellow.jpg';
                    imagePath4 = './img/Sunny_socks_uni_blue.jpg';
                    imagePath5 = './img/Sunny_socks_uni_pink.jpg';
                    imagePath6 = './img/Sunny_socks_green.jpg';
                    imagePath7 = './img/Sunny_socks_red.jpg';
                    imagePath8 = './img/Sunny_socks_yellow.jpg';
                    imagePath9 = './img/Sunny_socks_blue.jpg';
                    imagePath10 = './img/Sunny_socks_pink_01.jpg';
            }
            // Update the image sources
            imageElement1.src = imagePath1;
            imageElement2.src = imagePath2;
            imageElement3.src = imagePath3;
            imageElement4.src = imagePath4;
            imageElement5.src = imagePath5;
            imageElement6.src = imagePath6;
            imageElement7.src = imagePath7;
            imageElement8.src = imagePath8;
            imageElement9.src = imagePath9;
            imageElement10.src = imagePath10;
        }
        </script>
        <!-- end of the main section starting with footer now -->
        <footer>
            <?php include './view/layout/footer.php';?>
        </footer>
        <!-- end of the footer -->
    </body>
</html>