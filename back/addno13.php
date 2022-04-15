<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add no.</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <form method="POST">
        <label>Enter Your First Number:</label><br>
        <input type="number" placeholder="Enter number" name="num1"><br>

        <label>Enter Your Second Number:</label><br>
        <input type="number" placeholder="Enter number" name="num2"><br>

        <input type="submit" name="submit">

    </form>
<?php

    if(isset($_POST['submit'])){

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $add = $num1 + $num2;
        echo "The sum of $num1 and $num2 is:".$add;
    }

?>

</body>
</html>