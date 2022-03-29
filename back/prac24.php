<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested if</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>

<form method="POST">   
    <input type="number" placeholder="Enter your AGE" name="age">
    <input type="submit" name="submit">
</form>

<?php  

    if(isset($_POST['submit'])){

        $age = $_POST['age'];  
        $nationality = "Indian";  
        
        if ($nationality == "Indian"){  
            if ($age >= 18){  
                echo "Eligible to give vote.";  
            }  
            else {    
                echo "Not eligible to give vote.";  
            }  
        } 
    } 
?>

</body>
</html>