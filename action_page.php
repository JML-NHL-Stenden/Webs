<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
$search = filter_input(INPUT_POST, "search");
$errors = array();
$errorFlag = false;
$search_blue = ["Sunny's Socks Blue", "Socks Blue", "Blue", "blue", "sunny's socks blue"];
$search_pink = ["Sunny's Socks Pink", "Socks Pink", "Blue", "pink", "sunny's socks pink"];
$search_green = ["Sunny's Socks Green", "Socks Green", "Green", "green", "sunny's socks green"];
$search_yellow= ["Sunny's Socks Yellow", "Socks Yellow", "Yellow", "yellow", "sunny's socks yellow"];
$search_red= ["Sunny's Socks Red", "Socks Red", "Red", "red", "sunny's socks red"];
if (empty($search)) {
    array_push($errors, "Please type again");
    $errorFlag = true;
}
else{
    if (in_array($_POST["search"], $search_blue)) {
        echo readfile("catalog-blue.php");
    }
    if (in_array($_POST["search"], $search_pink)) {
        echo readfile("catalog-pink.php");
    }
    if (in_array($_POST["search"], $search_green)) {
        echo readfile("catalog-green.php");
    }
    if (in_array($_POST["search"], $search_yellow)) {
        echo readfile("catalog-yellow.php");
    }
    if (in_array($_POST["search"], $search_red)) {
        echo readfile("catalog-red.php");
    }
    else {
     echo "We unluckily have not had the product that you want!";
    }

}}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search_bar</title>
</head>
<body>
    
</body>
</html>