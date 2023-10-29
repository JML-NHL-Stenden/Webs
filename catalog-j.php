<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/catalog-j.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <?php include "./view/layout/header.php"; ?>
    </header>
    <main>
        <div class="home-title">
             <p><a href="main.html"> Home &nbsp > </a>&nbsp Shop</p> 
        </div> 
        <div class="filter-holder">
        <h3 class="h3-style">Filters</h3>
        <div class="line-style"><hr></div>
            <!-- This is for the paragraph filters -->
            <div class="p-filter">
                <p class="phfil unicolor" onclick="changeImage('unicolor')">Uni-color</p>
                <p class="phfil strip-s" onclick="changeImage('strip-socks')">Striped</p>
                <p class="phfil n-arrivals" onclick="changeImage('new-arrivals')">New Arrivals</p>
                <p class="phfil outstanding-p" onclick="changeImage('outstanding-products')">Outstanding Products</p>
            </div>

            <!-- This is for the color filter -->
            <div class="line-style"><hr></div>
            <div class="line-style"><hr></div>

            <h3 class="h3-style">Colors</h3>
            <div class="color-filter">
                <div class="circle green-circle" onclick="changeImage('green')"></div>
                <div class="circle red-circle" onclick="changeImage('red')"></div>
                <div class="circle yellow-circle" onclick="changeImage('yellow')"></div>
                <div class="circle blue-circle" onclick="changeImage('blue')"></div>
                <div class="circle pink-circle" onclick="changeImage('pink')"></div>
            </div>
        </div>

        <div class="h2-astyle h2-move"><h2>Arrivals</h2></div>
        <div class="h4-astyle h4-move"><h4>Showing 1-9 Products</h4></div>
        <div class="all-img-cont">
            <div id="images-holder-1">
                <img id="img-container-1" class="image-container" src="./img/Sunny_socks_uni_green.jpg" alt="">
                <p>Sunny's Green Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-2">
                <img id="img-container-2" class="image-container" src="./img/Sunny_socks_uni_red.jpg" alt="">
                <p>Sunny's Red Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-3">
                <img id="img-container-3" class="image-container" src="./img/Sunny_socks_uni_yellow.jpg" alt="">
                                    <p>Sunny's Yellow Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-4">
                <img id="img-container-4" class="image-container" src="./img/Sunny_socks_uni_blue.jpg" alt="">
                <p>Sunny's Blue Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>

            </div>
            <div id="images-holder-5">
                <img id="img-container-5" class="image-container" src="./img/Sunny_socks_uni_pink.jpg" alt="">
                <p>Sunny's Pink Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-6">
                <img id="img-container-6" class="image-container" src="./img/Sunny_socks_green.jpg" alt="">
                <p>Sunny's Green Striped Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-7">
                <img id="img-container-7" class="image-container" src="./img/Sunny_socks_red.jpg" alt="">
                <p>Sunny's Red Striped Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-8">
                <img id="img-container-8" class="image-container" src="./img/Sunny_socks_yellow.jpg" alt="">
                <p>Sunny's Yellow Striped Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-9">
                <img id="img-container-9" class="image-container" src="./img/Sunny_socks_blue.jpg" alt="">
                <p>Sunny's Blue Striped Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <i class="fa fa-star-half-full"></i>
                                    <p>&euro;3.99</p>
            </div>
            <div id="images-holder-10">
                <img id="img-container-10" class="image-container" src="./img/Sunny_socks_pink_01.jpg" alt="">
                <p>Sunny's Pink Uni-Color Sock</p>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <p>&euro;3.99</p>
            </div>
        </div>

    </main>
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
            imagePath1 = './img/catalogus/Sunny_socks_uni_green.jpg';
            imagePath2 = './img/catalogus/Sunny_socks_uni_red.jpg';
            imagePath3 = './img/catalogus/Sunny_socks_uni_yellow.jpg';
            imagePath4 = './img/catalogus/Sunny_socks_uni_blue.jpg';
            imagePath5 = './img/catalogus/Sunny_socks_uni_pink.jpg';
            break;
        case 'phfil strip-s':
            imagePath1 = './img/catalogus/Sunny_socks_green.jpg';
            imagePath2 = './img/catalogus/Sunny_socks_red.jpg';
            imagePath3 = './img/catalogus/Sunny_socks_yellow.jpg';
            imagePath4 = './img/catalogus/Sunny_socks_blue.jpg';
            imagePath5 = './img/catalogus/Sunny_socks_pink_01.jpg';
            break;
        case 'phfil n-arrivals':
            imagePath1 = '../Webs/img/catalogus/Sunny_socks_green.jpg';
            imagePath2 = '../Webs/img/catalogus/Sunny_socks_red.jpg';
            break;
        case 'phfil outstanding-p':
            // Set the outstanding-products image path
            break;
        default:
            imagePath1 =    './img/catalogus/Sunny_socks_uni_green.jpg';
            imagePath2 =    './img/catalogus/Sunny_socks_uni_red.jpg';
            imagePath3 =    './img/catalogus/Sunny_socks_uni_yellow.jpg';
            imagePath4 =    './img/catalogus/Sunny_socks_uni_blue.jpg';
            imagePath5 =    './img/catalogus/Sunny_socks_uni_pink.jpg';
            imagePath6 =    './img/catalogus/Sunny_socks_green.jpg';
            imagePath7 =    './img/catalogus/Sunny_socks_red.jpg';
            imagePath8 =    './img/catalogus/Sunny_socks_yellow.jpg';
            imagePath9 =    './img/catalogus/Sunny_socks_blue.jpg';
            imagePath10 =   './img/catalogus/Sunny_socks_pink_01.jpg';
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
                    imagePath1 = './img/catalogus/Sunny_socks_uni_green.jpg';
                    imagePath2 = './img/catalogus/Sunny_socks_uni_red.jpg';
                    imagePath3 = './img/catalogus/Sunny_socks_uni_yellow.jpg';
                    imagePath4 = './img/catalogus/Sunny_socks_uni_blue.jpg';
                    imagePath5 = './img/catalogus/Sunny_socks_uni_pink.jpg';
                    break;
                case 'strip-socks':
                    imagePath1 = './img/catalogus/Sunny_socks_green.jpg';
                    imagePath2 = './img/catalogus/Sunny_socks_red.jpg';
                    imagePath3 = './img/catalogus/Sunny_socks_yellow.jpg';
                    imagePath4 = './img/catalogus/Sunny_socks_blue.jpg';
                    imagePath5 = './img/catalogus/Sunny_socks_pink_01.jpg';
                    break;
                case 'new-arrivals':
                    imagePath1 = '../Webs/img/catalogus//Sunny_socks_green.jpg';
                    imagePath2 = '../Webs/img/catalogus//Sunny_socks_red.jpg';
                    imagePath3 = '../Webs/img/catalogus//Sunny_socks_yellow.jpg';
                    break;
                // Colors
                case 'green':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_green.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_green.jpg';
                    break;
                case 'yellow':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_yellow.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_yellow.jpg';
                    break;
                case 'red':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_red.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_red.jpg';
                    break;
                case 'yellow':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_yellow.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_yellow.jpg';
                    break;
                case 'blue':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_blue.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_blue.jpg';
                    break;
                case 'pink':
                    imagePath1 = '../Webs/img/catalogus/Sunny_socks_pink_01.jpg';
                    imagePath2 = '../Webs/img/catalogus/Sunny_socks_uni_pink.jpg';
                    break;
                default:
                    imagePath1 = './img/catalogus/Sunny_socks_uni_green.jpg';
                    imagePath2 = './img/catalogus/Sunny_socks_uni_red.jpg';
                    imagePath3 = './img/catalogus/Sunny_socks_uni_yellow.jpg';
                    imagePath4 = './img/catalogus/Sunny_socks_uni_blue.jpg';
                    imagePath5 = './img/catalogus/Sunny_socks_uni_pink.jpg';
                    imagePath6 = './img/catalogus/Sunny_socks_green.jpg';
                    imagePath7 = './img/catalogus/Sunny_socks_red.jpg';
                    imagePath8 = './img/catalogus/Sunny_socks_yellow.jpg';
                    imagePath9 = './img/catalogus/Sunny_socks_blue.jpg';
                    imagePath10 = './img/catalogus/Sunny_socks_pink_01.jpg';
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
    <footer>
        <?php include './view/layout/footer.php'; ?>
    </footer>
</body>
</html>
