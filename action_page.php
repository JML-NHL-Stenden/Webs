<?php

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $search = filter_input(INPUT_POST, "search");
        $errors = array();
        $errorFlag = false;
        $search_strip = ["Sunny's Striped Socks", "Striped Socks", "Striped", "striped", "sunny's striped socks"];
        $search_uni = ["Sunny's Uni-Color Socks", "Uni-Color Socks", "Uni-Color", "uni-color", "sunny's uni-color socks", "Uni", "uni"];
        $search_blue = ["Sunny's Socks Blue", "Socks Blue", "Blue", "blue", "sunny's socks blue"];
        $search_pink = ["Sunny's Socks Pink", "Socks Pink", "Pink", "pink", "sunny's socks pink"];
        $search_green = ["Sunny's Socks Green", "Socks Green", "Green", "green", "sunny's socks green"];
        $search_yellow = ["Sunny's Socks Yellow", "Socks Yellow", "Yellow", "yellow", "sunny's socks yellow"];
        $search_red = ["Sunny's Socks Red", "Socks Red", "Red", "red", "sunny's socks red"];

        if (empty($search)) {
            array_push($errors, "Please type again");
            $errorFlag = true;
        } else {
            if (in_array($_POST["search"], $search_blue)) {
                include("catalog-blue.php");
            } elseif (in_array($_POST["search"], $search_pink)) {
                include("catalog-pink.php");
            } elseif (in_array($_POST["search"], $search_green)) {
                include("catalog-green.php");
            } elseif (in_array($_POST["search"], $search_yellow)) {
                include("catalog-yellow.php");
            } elseif (in_array($_POST["search"], $search_red)) {
                include("catalog-red.php");
            } elseif (in_array($_POST["search"], $search_uni)) {
                include("product_detail_uni.php");
            } elseif (in_array($_POST["search"], $search_strip)) {
                include("product_detail_strip.php");
            } else {
                echo "We unluckily have not had the product that you want!";
            }
        }
    } else {
        echo "We unluckily have not had the product that you want!";
    }

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