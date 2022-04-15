<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strln and strops</title>
</head>
<body>

<?php
    echo strlen("You get hurt, hurt themem back.");
?>

<?php
    echo ("<br>");
    $str = 'To do or not to do';
    $position = strpos($str, 'or');

    echo $position;

?> 

</body>
</html>