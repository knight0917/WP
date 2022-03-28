<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php 

    include "db15.php";

        if (isset($_POST['update'])) {

            $name = $_POST['name'];

            $email = $_POST['email'];

            $country = $_POST['country']; 

            $sql = "UPDATE `user_detail` SET `name`='$name',`email`='$email',`country`='$country' WHERE `name`='$name'"; 

            $result = $conn1->query($sql); 

            if ($result == TRUE) {

                echo "Record updated successfully.";

            }else{

                echo "Error:" . $sql . "<br>" . $conn->error;

            }

        } 

    if (isset($_GET['name'])) {

        $user_id = $_GET['name']; 

        $sql = "SELECT * FROM `user_detail` WHERE `name`='$name'";

        $result = $conn1->query($sql); 

        if ($result->num_rows > 0) {        

            while ($row = $result->fetch_assoc()) {

                $first = $row['name'];

                $email = $row['email'];

                $country  = $row['country'];

            } 

        ?>

            <h2>User Update Form</h2>

            <form action="" method="post">

                <fieldset>

                    First name:<br>

                    <input type="text" name="firstname" value="<?php echo $name; ?>"><br>

                    Email:<br>

                    <input type="email" name="email" value="<?php echo $email; ?>"><br>

                    Country:<br>

                    <input type="text" name="country" value="<?php echo $country; ?>"><br>

                    <input type="submit" value="Update" name="update">

                </fieldset>

            </form> 

</body>

</html> 

        <?php

        } else{ 

            header('Location: filere17.php');

        } 

    }

?> 
