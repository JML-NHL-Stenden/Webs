<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Socks</title>

</head>
<body>

    
    <!-- Color options -->

    <form action="shopping_cart.php" method="POST">
        <div class="container">
            <div id="color-options">
                <div class="color">
                    <input type="radio" name="color" id="orange=id" value="orange" onclick="changeImage('red')"><span class="orange-dot"></span>
                </div><br>
                <div class="color">
                    <input type="radio" name="color" id="green-id" value="green" onclick="changeImage('green')"><span class="green-dot"></span>
                </div><br>
                <div class="color">
                    <input type="radio" name="color" id="blue-id" value="blue" onclick="changeImage('blue')" checked><span class="blue-dot"></span>
                </div><br>
                <div class="color">
                    <input type="radio" name="color" id="yellow-id" value="yellow" onclick="changeImage('yellow')"><span class="yellow-dot"></span>
                </div><br>
                <div class="color">
                    <input type="radio" name="color" id="pink-id" value="pink" onclick="changeImage('pink')"><span class="pink-dot"></span>
                </div><br> 
            </div>    
            <!-- Pair count -->
            <div id="enter-pair-number">
                <label for="num-input">Pair count: </label>
                <input type="number" id="number-input" name="number-input" min="0" max="100">
            </div>
            <!-- Image container -->
            <div id="image-container">
                <img id="displayed-image" src="../img/Sunny_socks_blue.jpg" alt="Default Image">
            </div>
                
            <input class="add-to-cart-button" type="submit" value="Add to the cart">
                
            <script>
                function changeImage(color) {
                    var imageElement = document.getElementById('displayed-image');
                    var imagePath;
                    var typeofsocks = "strips"
                        
                    // Set the image path based on the selected color
                    switch (color) {
                        case 'red':
                                imagePath = '../img/Sunny_socks_red.jpg';
                                break;
                        case 'blue':
                                imagePath = '../img/Sunny_socks_blue.jpg';
                                break;
                        case 'green':
                                imagePath = '../img/Sunny_socks_green.jpg';
                                break;
                        case 'yellow':
                                imagePath = '../img/Sunny_socks_yellow.jpg';
                                break;
                        case 'pink':
                                imagePath = '../img/Sunny_socks_pink.jpg';
                                break;
                        default:
                                imagePath = '../img/Sunny_socks_blue.jpg';
                    }
                        
                    // Update the image source
                    imageElement.src = imagePath;
                }
            </script>
        </div>
    </form> 
</body>
</html>
