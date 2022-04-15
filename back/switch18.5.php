<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <form method="POST">
        <input type="text" placeholder="Enter your Fav. color" name="fav">
        <input type="submit" name="submit">
    </form>
    
<?php

    if(isset($_POST['submit'])){
        $favcolor = $_POST['fav'];

        switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Sorry, Your favorite color is not available into our cases!!";
        }
    }
?>

</body>
</html>