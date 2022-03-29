<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Function</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>

<?php  
    $str="i am iron man.";  
    $str=strtoupper($str);  
    echo $str; 
    echo "<br>";

    $str="i am groot!!!";  
    $str=strrev($str);  
    echo $str;  
    echo "<br>";

    $str="i am steve rogers.";  
    $str=ucwords($str);  
    echo $str;  

?>

</body>
</html>