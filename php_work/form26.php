<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="apply.css">
</head>
<body>
    <h1>Enter your details</h1>
    <form action="" method="GET">
        <label>Name:</label>
        <input type="text" placeholder="Enter Here" name="name" required><br>

        <label>E-mail:</label>
        <input type="email" placeholder="Enter Here" name="email"><br>

        <label>Phone:</label>
        <input type="number" placeholder="Enter Here" name="phone"><br>

        <label>DOB:</label>
        <input type="date" placeholder="Enter Here" name="dob"><br>

        <label>Gender:</label>
        <input type="radio" name="m">
        <label>Male</label>
        <input type="radio" name="f">
        <label>Female</label>
        <input type="radio" name="o">
        <label>Other</label><br>

        <label>Department</label>
        <select name="dept">
            <option value="WD">WD</option>
            <option value="CS">CS</option>
            <option value="ML">ML</option>
            <option value="AI">AI</option>
        </select><br>
        

        <label>Address:</label>
        <textarea type="text" placeholder="Enter Here" name="address"></textarea><br>

        <input type="submit" name="submit">  
    </form>

    Welcome <?php echo $_GET["name"]."!!!"; ?>

</body>
</html>