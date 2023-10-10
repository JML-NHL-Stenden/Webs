<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Socks</title>

</head>
<body>

    
    <!-- Color options -->

    <form action="shopping_cart.php" method="post">
        <div class="container">
                <div id="color-options">
                    <div class="color" name="color" onclick="changeImage('red')">R<span class="orange-dot"></span></div>
                    <div class="color" name="color" onclick="changeImage('green')">G<span class="green-dot"></span></div>
                    <div class="color" name="color" onclick="changeImage('blue')">B<span class="blue-dot"></span></div>
                    <div class="color" name="color" onclick="changeImage('yellow')">Y<span class="yellow-dot"></span></div>
                    <div class="color" name="color" onclick="changeImage('pink')">P<span class="pink-dot"></span></div>
                </div>
                
                <!-- Image container -->
                <div id="image-container">
                    <img id="displayed-image" src="img/Sunny_socks_blue.jpg" alt="Default Image">
                </div>

                <div id="enter-pair-number">
                <label for="num-input">Pair count: </label>
                <input type="number" id="num-input" name="number-input" min="0" max="100">

                <input class="add-to-cart-button" type="submit" value="Add to the cart">
    </form>
            <script>
                function changeImage(color) {
                    var imageElement = document.getElementById('displayed-image');
                    var imagePath;
                    
                    // Set the image path based on the selected color
                    switch (color) {
                        case 'red':
                            imagePath = 'img/Sunny_socks_red.jpg';
                            break;
                        case 'blue':
                            imagePath = 'img/Sunny_socks_blue.jpg';
                            break;
                        case 'green':
                            imagePath = 'img/Sunny_socks_green.jpg';
                            break;
                        case 'yellow':
                            imagePath = 'img/Sunny_socks_yellow.jpg';
                            break;
                        case 'pink':
                            imagePath = 'img/Sunny_socks_pink_01.jpg';
                            break;
                        default:
                            imagePath = 'img/Sunny_socks_blue.jpg';
                    }
                    
                    // Update the image source
                    imageElement.src = imagePath;
                }
            </script>
    </div>
    
</body>
</html>
