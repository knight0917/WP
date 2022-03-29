<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
</head>
<body>

<?php
    // the message
    $msg = "First line of text\nSecond line of text";

    $msg = wordwrap($msg,70);

    // send email
    mail("ankitakshay78@gmail.com","My subject",$msg);
?>

</body>
</html>