<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error message</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    
<?php
    if(file_exists("mytestfile.txt")) {
        $file = fopen("mytestfile.txt", "r");
        }
        else {
            die("Error: The file does not exist.");
        }
?> 

</body>
</html>