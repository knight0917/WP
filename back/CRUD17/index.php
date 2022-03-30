<?php
    require_once("db.php");
    $sql = "SELECT * FROM user ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User list</title>
    <link rel="stylesheet" href="../apply.css">
</head>
<body>
    <div>
        <form action="" method="POST">
            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
            <div><a href="add_user.php"> Add User</div>

            <table>
                <tr>
                    <td>Name</td>
                    <td>City</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>

<?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    if($i%2==0)
    $classname="evenRow";
    else
    $classname="oddRow";
?>
                <tr>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["city"] ?></td>

                    <td>
                        <a href="edit_user.php?id=<?php echo $row["id"] ?>">Edit</a>
                    </td>
                    <td>
                    <a href="delete_user.php?id=<?php echo $row["id"] ?>">Delete</a>
                    </td>
                </tr>
<?php

$i++;
}

?>
            </table>
        </form>
    </div>
</body>
</html>