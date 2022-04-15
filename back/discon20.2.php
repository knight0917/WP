<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <?php
    
    $conn1=mysqli_connect("localhost","root","","crud");

    mysqli_close($conn1);
    if($conn1){
        echo "disconnect to the databse";
    }
    ?>
</body>
</html>