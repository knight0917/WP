<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect to the database</title>
</head>
<body>

<?php
    //method 1
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "hjd";

    $conn1 = new mysqli($host, $user, $pass, $dbname);

    if($conn1) {    
        echo "I am connected from connection:1 ";
     }

    //method 2
    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "hjd";
    
    foreach($db as $key => $value){
    define(strtoupper($key), $value);
    }
    
    $conn2 = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
    
    if($conn2) {    
        echo "<br>";
        echo "I am connected from connection:2";
    }
?>

</body>
</html>