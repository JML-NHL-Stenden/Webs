<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formhandling example</title>
    <link rel="stylesheet" href="contactstyle.css">
</head>
<body>

<?php
   if($_SERVER['REQUEST_METHOD'] == "POST"){
    
        $count_of_pairs = filter_input(INPUT_POST, "number-input");
        $color = filter_input(INPUT_POST, "color");
        // $fields = filter_input(INPUT_POST, "interestfield", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

        echo "
        <p><b>Color:</b>".$color."</p>
        <p><b>Pair count:</b>".$count_of_pairs."</p>"
        ;
        
    }
?>

</body>
</html>