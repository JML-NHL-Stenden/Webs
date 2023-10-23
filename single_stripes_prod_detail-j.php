<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel ="stylesheet" href = "./css/strip_prod_style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>




<body>

<!-- --------------------------------- HEADER ------------------------------- -->
<header>
<?php
include "./view/layout/header.php"
?>
</header>
<!-- --------------------------------- HEADER - END  ------------------------------- -->



<main>

    <!-- Color options -->
    <div class="product-custom">

    
    
    <div class="prod-info-holder">

        <h1> Sunny’s Striped Socks</h1>

       <!----------------- Stars rating  ---------------->

       <fieldset class="rate">
  <div id="rating-label"><span id="current-rating">0</span></div>

       <input type="radio" id="rating5"     name="rating" value="5 / 5" />  <label for="rating5"                    title="5 stars"></label>
       <input type="radio" id="rating4.5"   name="rating" value="4.5 / 5" /><label class="half" for="rating4.5"     title="4 1/2 stars"></label>
       <input type="radio" id="rating4"     name="rating" value="4 / 5" />  <label for="rating4"                    title="4 stars"></label>
       <input type="radio" id="rating3.5"   name="rating" value="3.5 / 5" /><label class="half" for="rating3.5"     title="3 1/2 stars"></label>
       <input type="radio" id="rating3"     name="rating" value="3 / 5" />  <label label for="rating3"              title="3 stars"></label>
       <input type="radio" id="rating2.5"   name="rating" value="2.5 / 5" /><label class="half" for="rating2.5"     title="2 1/2 stars"></label>
       <input type="radio" id="rating2"     name="rating" value="2 / 5" />  <label for="rating2"                    title="2 stars"></label>
       <input type="radio" id="rating1.5"   name="rating" value="1.5 / 5" /><label class="half" for="rating1.5"     title="1 1/2 stars"></label>
       <input type="radio" id="rating1"     name="rating" value="1 / 5" />  <label for="rating1"                    title="1 star"></label>
       <input type="radio" id="rating0.5"   name="rating" value="0.5 / 5" /><label class="half" for="rating0.5"     title="1/2 star"></label>
       
        </fieldset>

    <script>
        const rating = document.querySelector('.rate');
        const currentRating = document.getElementById('current-rating');
        
        rating.addEventListener('click', (e) => {
            if (e.target.type === 'radio') {
                const value = e.target.value;
                currentRating.innerText = value;
            }
        });
    </script>

            <!----------------- Stars rating - end ---------------->

            <h2><b> $ 3.99 </b></h2>
            <p class='p-materials'> Made from 100% organic cotton Produced in Portugal </p>

            <p>Select colors</p>
    <div class="circle-container">
        <div class="circle red" onclick="changeImage('red')"></div>
        <div class="circle green" onclick="changeImage('green')"></div>
        <div class="circle blue" onclick="changeImage('blue')"></div>
        <div class="circle yellow" onclick="changeImage('yellow')"></div>
        <div class="circle pink" onclick="changeImage('pink')"></div>
    </div>
    </div>

    <!-- Image container for the first image -->
    <div id="image-container">
        <img id="displayed-image" src="../Webs/img/Sunny_socks_blue.jpg" alt="Default Image">
    </div>

    <!-- Image container for the second image -->
    <div id="image-container-2">
        <img id="displayed-image-2" src='../Webs/img/packaging/catalogus_sokken_stripes_blue.jpg' alt="Second Image">
    </div>

    <script>
        function changeImage(circle) {
            var imageElement = document.getElementById('displayed-image');
            var imageElement2 = document.getElementById('displayed-image-2');
            var imagePath;
            var imagePath2;

            // Set the image paths based on the selected color
            switch (circle) {
                case 'red':
                    imagePath = '../Webs/img/Sunny_socks_red.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_red.jpg' ;
                    break;
                case 'blue':
                    imagePath = '../Webs/img/Sunny_socks_blue.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_blue.jpg';
                    break;
                case 'green':
                    imagePath = '../Webs/img/Sunny_socks_green.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_green.jpg';
                    break;
                case 'yellow':
                    imagePath = '../Webs/img/Sunny_socks_yellow.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_yellow.jpg';
                    break;
                case 'pink':
                    imagePath = '../Webs/img/Sunny_socks_pink_01.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_pink.jpg';
                    break;
                default:
                    imagePath = '../Webs/img/Sunny_socks_blue.jpg';
                    imagePath2 = '../Webs/img/packaging/catalogus_sokken_stripes_blue.jpg';
            }

            // Update the image sources
            imageElement.src = imagePath;
            imageElement2.src = imagePath2;

            
        }
    </script>

</div>

<div class="h-nav">
<div class =" s-nav ">
        <ul class="menu">
            <li><a href="#section1">Section 1</a></li>
            <li><a href="#section2">Section 2</a></li>
            <li><a href="#section3">Section 3</a></li>
        </ul>
    </div>
    <section id="section1">
        <h1>Section 1</h1>
        <p>This is the content of Section 1.</p>
    </section>
    <section id="section2">
        <h1>Section 2</h1>
        <p>This is the content of Section 2.</p>
    </section>
    <section id="section3">
        <h1>Section 3</h1>
        <p>This is the content of Section 3.</p>
    </section>
    <script src="js/script.js"></script>

    </div>





    </main>







<!-- --------------------------------- FOOTER ------------------------------- -->

<footer>
<?php
include "./view/layout/footer.php"
?>
</footer>
<!-- --------------------------------- FOOTER - END ------------------------------- -->



</body>




</html>
