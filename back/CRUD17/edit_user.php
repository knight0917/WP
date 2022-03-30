<?php

    require_once("db.php");

    if(count($_POST)>0) {
        $sql = "UPDATE user set name='" . $_POST["name"] . "', city='" . $_POST["city"];
        mysqli_query($conn,$sql);
        $message = "Dta Modified Successfully";
    }
    $select_query = "SELECT * FROM user WHERE id='" . $_GET["id"] . "'";
    $result = mysqli_query($conn,$select_query);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link rel="stylesheet" href="../apply.css">
</head>
<body>
    <form action="" method="POST">
        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
        <div><a href="index.php">User List</a></div>

        <table>
            <tr>
                <td colspan="2">Edit user</td>
            </tr>
            <tr>
                <td><label>Name</label></td>
                <td><input type="hidden" name="id" value="<?php echo $row['id']; ?>"><input type="text" name="name" placeholder="Your Name" value="<?php echo $row['name']; ?>"></td>
            </tr>
            <tr>
                <td><label>City</label></td>
                <td><input type="text" name="city" placeholder="Your City" value="<?php echo $row['city'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit" value="submit" ></td>
            </tr>
        </table>
    </form>
</body>
</html>