
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up first!</title>
    <link rel="stylesheet" href="./css/Sign_In_Page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/Sunny_socks_Pink.png">
</head>
<header>
    <div class="Frame1-container">
        <div> <header>
            <a class="Frame1-content" href="Sign_Up_Page.php">Sign up and get 20% off to your first order. Sign Up Now</a>
        </header>
    </div>
    </div>
    <div class="Menu">
        <div class="logo">
        <a href="Project1.php" target="_blank"><img src="img/sunnylogo.png" alt=""></a>
        </div>
        <div class="search-container">
            <form action="action_page.php" method="POST">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Search for products..." name="search">
              </form>
        </div>
        <div class="Login_button"><a href="Sign_In_Page.php" target="_blank"><p>Login</p></a></div>
        <div class="Signup_button"><a href="Sign_Up_Page.php" target="_blank"><p>Sign Up</p></a></div>
        <div class="carticon"><a href="shoppingcart.php"><img src="img/cart.svg"> </a> </div>
        <div class="signinicon"><a href="Sign_Up_Page.php"><img src="img/Vector.png"></a> </div>
    </div>   
</header>
<body>
    <div class="content_container">
        <div class="picture"><img src="img/sunny1.png" alt="backimg"></div>
        <div class="form">
            <form action="contact_details.php" method="POST">
            <h1>Sign Up Page</h1>
            <p>User Name</p>
            <input type="text" name="username" id="username" placeholder="Text here...">
            <p>Phone Number</p>
            <input type="text" name="phonenumber" id="phonenumber" placeholder="Text here...">
            <p>Email address</p>
            <input type="text" name="email" id="email" placeholder="Text here...">           
            <p>Password</p>
            <input type="password" name="password" id="password">
            <input id="Sign_in_btn" type="submit" name="submit" value="Sign Up">
            <p>Already have an account? <a href="Sign_In_Page.php" target="_blank">Log in</a></p>
            </form>
        </div>
    </div>
    <div class="footer-container">
        <div class="slogan">
            <img src="img/sunny_logos_slogan_blue.png">
            <p>Sunny’s mission is to brighten peoples day by providing high quality, ethically produced socks.</p>
        </div>
        <div class="company">
            <h1>COMPANY</h1>
           <a href="about_us.php" ><P>About</P></a>
           <a href="about_us.php" ><p>Contact</p></a>
          <a href="#"><img src="img/2.png" alt="img"></a>
          <a href="#"><img src="img/3.png" alt="img"></a>
        </div>
        <div class="third-party">
            <h1>Third-Party Vendors</h1>
            <div class="brand-logo-container">
<div><a href="https://www.bol.com/nl/nl/" target="_blank"><img src="img/bolcom.jpg" alt="bol"></a></div>
<div><a href="https://www.hema.nl/?&msclkid=9a19646100131d0c16dc01402850574c&utm_source=bing&utm_medium=cpc&utm_campaign=Algemeen%20%7C%20Search%20%7C%20HEMA%20%7C%20Focus%20%7C%20BRD%20%7C%20M311%20-%2042341-G393348416&utm_term=hema&utm_content=Hema%20%7C%20Focus%20%7C%20EX%2FMB&gclid=9a19646100131d0c16dc01402850574c&gclsrc=3p.ds" target="_blank"><img src="img/hema.jpg" alt=""></a></div></div>
<div class="payment_method">
    <div><a href="#"><img src="img/applepay.jpg"></a></div>
    <div><a href="#"><img src="img/googlepay.jpg"></a></div>
    <div><a href="#"><img src="img/Visa logo.png"></a></div>
    <div><a href="#"><img src="img/Mastercard-logo.svg.png"></a></div>
    <div><a href="#"><img src="img/logo-ideal.svg"></a></div>
</div>
            </div>
        </div>
</body>
</html>