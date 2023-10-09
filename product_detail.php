<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Webs/css/style.css">
    <title>Socks</title>

</head>
<body>

    
    <!-- Color options -->


    <div class="container">
            <div id="color-options">
                <div class="color" onclick="changeImage('red')"><span class="orange-dot"></span></div>
                <div class="color" onclick="changeImage('green')"><span class="green-dot"></span></div>
                <div class="color" onclick="changeImage('blue')"> <span class="blue-dot"></span></div>
                <div class="color" onclick="changeImage('yellow')"><span class="yellow-dot"></span></div>
                <div class="color" onclick="changeImage('pink')"><span class="pink-dot"></span></div>
            </div>
            
            <!-- Image container -->
            <div id="image-container">
                <img id="displayed-image" src="../Webs/img/Sunny_socks_blue.jpg" alt="Default Image">
            </div>
            
            <script>
                function changeImage(color) {
                    var imageElement = document.getElementById('displayed-image');
                    var imagePath;
                    
                    // Set the image path based on the selected color
                    switch (color) {
                        case 'red':
                            imagePath = '../Webs/img/Sunny_socks_red.jpg';
                            break;
                        case 'blue':
                            imagePath = '../Webs/img/Sunny_socks_blue.jpg';
                            break;
                        case 'green':
                            imagePath = '../Webs/img/Sunny_socks_green.jpg';
                            break;
                        case 'yellow':
                            imagePath = '../Webs/img/Sunny_socks_yellow.jpg';
                            break;
                        case 'pink':
                            imagePath = '../Webs/img/Sunny_socks_pink_01.jpg';
                            break;
                        default:
                            imagePath = '../Webs/img/Sunny_socks_blue.jpg';
                    }
                    
                    // Update the image source
                    imageElement.src = imagePath;
                }
            </script>
    </div>
    
</body>
</html>
