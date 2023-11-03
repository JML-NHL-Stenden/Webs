<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Information</title>
    <link rel="stylesheet" href="./css/contact_detail.css">
    <link rel="icon" href="./img/Sunny_socks_Pink.png">
</head>
<body>
    <header>
        <?php
        include "./view/layout/header.php";
        ?>
    </header>
    <main>
        <div class="nav_bar">
            <p><a href="Project1.php" class="home">Home </a> > <a href="contact_details.php" class="my_account"> My Account</a></p>
        </div>
        <div class="content_container">
        <div class="name">
            <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              $username = filter_input(INPUT_POST, "username");
              $errorFlag = false;
                $errors = array();
            if (empty($username)) {
                array_push($errors, "Please select a name");
                 $errorFlag = true;
                }
            else {
                echo "<h1>Hello $username!</h1>";}}       
            ?>
            <p>Welcome to your Account</p>
            <h3><img src="./img/user.svg"> My infor</h3>
            <h4><a href="Sign_In_Page.php" target="_blank"><img src="./img/signout.svg"> Sign out</a></h4>
        </div>
        <div class="info">
            <h1>My Info</h1>
            <h2>Contact Details</h2>
                <p>Your Name</p>
                <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              $username = filter_input(INPUT_POST, "username");
              $errorFlag = false;
                $errors = array();
            if (empty($username)) {
                array_push($errors, "Please select a name");
                 $errorFlag = true;
                }
            else {
                echo "<h3>$username</h3>";}}       
            ?>
            <hr class="y-name-hr">
            <p>Email Address</p>
                <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
              $errorFlag = false;
                $errors = array();
            if (empty($email)) {
                array_push($errors, "Please enter your email address");
                 $errorFlag = true;
                }
            else {
                echo "<h3>$email</h3>";}}       
            ?>
            <hr>
            <p>Phone Number</p>
                <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){
              $phonenumber= filter_input(INPUT_POST, "phonenumber");
              $errorFlag = false;
                $errors = array();
            if (empty($phonenumber)) {
                array_push($errors, "Please enter your phone number");
                 $errorFlag = true;
                }
            else {
                echo "<h3>$phonenumber</h3>";}}       
            ?>
            <hr>
            <p>Password</p>
                <?php
            // if($_SERVER['REQUEST_METHOD'] == "POST"){
            //   $password= filter_input(INPUT_POST, "password");
            //   $errorFlag = false;
            //     $errors = array();
            // if (empty($password)) {
            //     array_push($errors, "Please enter your password");
            //      $errorFlag = true;
            //     }
            // else {
            //     echo "<h3>$password</h3>";}}       
            // ?>
            </div>
        </div>
        </div>

    </main>
    <footer>
        <?php
        include "./view/layout/footer.php";
        ?>
    </footer>
</body>
</html>