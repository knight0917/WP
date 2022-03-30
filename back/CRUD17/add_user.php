<?php

    if(count($_POST)>0) {

        require_once("db.php");

        $sql = "INSERT INTO user (name, city) VALUES ('" . $_POST["name"] . "','" . $_POST["city"] . "')";
        mysqli_query($conn,$sql);
        $current_id = mysqli_insert_id($conn);
        if(!empty($current_id)) {
            $message = "Your detail is added to the database!!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add user</title>
    <link rel="stylesheet" href="../apply.css">
</head>
<body>
    <form action="" method="POST">
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <div><a href="index.php">User List</a></div>

        <table>
            <tr>
                <td colspan="2">Add new user</td>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name" placeholder="Your Name"></td>
            </tr>
            <tr>
                <td><label>City</label></td>
                <td><input type="text" name="city" placeholder="Your City"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="submit" ></td>
            </tr>
        </table>
    </form>
</body>
</html>