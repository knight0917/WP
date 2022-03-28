<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data into the database</title>
</head>
<body>

<?php
    include 'db15.php';

    $sql = "INSERT INTO admin (firstname, lastname, email)
    VALUES ('KIT', 'YUV', 'kit@ad.com')";

    if ($conn1->query($sql) === TRUE) {
        echo "<br>";
        echo "YUP!!! Your record created successfully.";
    } else {
    echo "Error: " . $sql . "<br>" . $conn1->error;
    }
    $conn1->close();
?>

</body>
</html>