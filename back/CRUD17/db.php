<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "crud";

    $conn = new mysqli($host, $user, $pass, $dbname);

    if($conn) {    
        echo "I am connected to the database ";
     }
    
?>