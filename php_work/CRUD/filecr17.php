<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="../apply.css">
</head>
<body>
    
    <h1>Create Form</h1>

    <form method="post" action="filere17.php">

          <label>Full Name</label><br>
          <input type="text" placeholder="Enter Name" name="name"><br>

          <label>Email Address</label><br>
          <input type="email" placeholder="Enter Email" name="email"><br>

          <label>Country</label><br>
          <input type="text" placeholder="Enter Country Name" name="country"><br>

          <button type="submit" name="create">Submit</button>
    </form>

<?php
    include('../db15.php');
    if(isset($_POST['create'])){
    
        $msg=insert_data($conn1);
    }
    // insert query
    function insert_data($conn1){
    
        $name= ($_POST['name']);
        $email = ($_POST['email']);
        $country = ($_POST['country']);

        $sql="INSERT INTO user_detail (name,email,country) VALUES ('$name','$email','$country')";

        $exec= mysqli_query($conn1,$sql);
        if($exec){
            $msg="Data was created sucessfully";
            return $msg;
        
        }else{
            $msg= "Error: " . $query . "<br>" . mysqli_error($conn1);
        }
    }
?>

</head>
<body>

