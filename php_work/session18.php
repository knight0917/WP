<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create & Destroy session</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>

<?php
    // Starting session,You must call at beginning at the page
    session_start();

    // Storing session data
    $_SESSION["firstname"] = "Tony";
    $_SESSION["lastname"] = "Stark";

    //accessing session data
    echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"],'.';

    // Destroy session data
    if(isset($_SESSION["lastname"])){
        unset($_SESSION["lastname"]);
    }
    session_destroy();
?>

</body>
</html>