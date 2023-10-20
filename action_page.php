<?php

if ($_SERVER['REQUEST_METHOD']=="POST") {
$search = filter_input(INPUT_POST, "search");
$errors = array();
$errorFlag = false;
$search = ["Sunny's", "Pink", "Striped", "Socks", "Blue"];

//explode search on space " " --> result is an array
//use function in_array() to see if keyword is in array
//use above in an if/else
if (empty($search)) {
    array_push($errors, "Please type again");
    $errorFlag = true;
}
else{
    if (in_array($_POST["search"], $search)) {
        echo readfile("single_stripes_prod_detail-j.php");
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