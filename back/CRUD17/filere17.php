<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <link rel="stylesheet" href="../apply.css">
</head>
<body>

<h1>Read data</h1>

<?php
     include('../db15.php');

    $sql = "SELECT name, email, country FROM user_detail";
    $result = $conn1->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>email</th>
                    <th>country</th>
                </tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["name"]."</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["country"]."</td>
                <tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn1->close();
?>
</body>
</html>