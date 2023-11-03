<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's sign in!</title>
    <link rel="stylesheet" href="./css/Sign_In_Page.css">
    <link rel="icon" href="img/Sunny_socks_Pink.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <a href="Project1.php" ><img src="img/sunnylogo.png" alt=""></a>
        </div>
        <div class="search-container">
            <form action="action_page.php" method="POST">
                <button type="submit"><i class="fa fa-search"></i></button>
                <input type="text" placeholder="Search for products..." name="search" class ="search_bar">
              </form>
        </div>
        <div class="Login_button"><a href="Sign_In_Page.php" ><p>Login</p></a></div>
        <div class="Signup_button"><a href="Sign_Up_Page.php" ><p>Sign Up</p></a></div>
        <div class="carticon"><a href="shoppingcart.php"><img src="img/cart.svg"> </a> </div>
        <div class="signinicon"><a href="Sign_Up_Page.php"><img src="img/Vector.png"></a> </div>
    </div>   
</header>
<main>
    <body>
    <div class="content_container">
            <div class="picture"><img src="img/sunny1.png" alt=""></div>
            <div class="form">
                <form action="Sign_IN_Page.php" method="POST">
                <h1>Sign In Page</h1>
                <p>Email address</p>
                <input type="text" name="email" id="email" placeholder="Text here...">
                <?php             
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $email = filter_input(INPUT_POST, "email");    
                if(strlen($email) == 0){
                echo "<h5>Please enter your Email address...</h5>";}
                else{
                    if(!strpos($_POST["email"], "@" || !strpos($_POST["email"], ".com"))){
                    echo "<h5>Wrong email address!</h5>";}
                }           
        }
    ?>
                <p>Password</p>
                <input type="password" name="password" id="password">
                <?php
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                if (empty($_POST["password"])) {
                                    echo "<h5>Please enter your password...</h5>";
                                }
                                if (strlen($_POST["password"]) <= '8') {
                                    echo "<h5>Your Password Must Contain At Least 8 Characters!</h5>";
                                }
                                elseif(!preg_match("/[0-9]+/",$password)) {
                                    echo "<h5>Your Password Must Contain At Least 1 Number!</h5>";
                                }
                                elseif(!preg_match("/[A-Z]+/",$password)) {
                                    echo "<h5>Your Password Must Contain At Least 1 Capital Letter!</h5>";
                                }
                                elseif(!preg_match("/[a-z]+/",$password)) {
                                    echo "<h5>Your Password Must Contain At Least 1 Lowercase Letter!</h5>";
                                }
                                elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
                                    echo "<h5>Your Password Must Contain At Least 1 Special Character!</h5>";}
                                else {
                                    echo readfile("Project1.php");
                            }}
                ?>
                <input id="Sign_in_btn" type="submit" name="submit" value="Sign In">
                </form>
                <p>Have not had an account yet? <a href="Sign_Up_Page.php" target="_blank">Let's sign up!</a> </p>
            </div>
                        </div>
                        <div class="footer-container">
        <div class="slogan">
            <img src="img/sunny_logos_slogan_blue.png">
            <p>Sunny’s mission is to brighten peoples day by providing high quality, ethically produced socks.</p>
        </div>
        <div class="company">
            <h1>COMPANY</h1>
           <a href="about_us.php"><P>About</P></a>
           <a href="about_us.php"><p>Contact</p></a>
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
                        </main>
</html>