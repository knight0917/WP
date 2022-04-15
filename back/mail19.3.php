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
    
    $to_mail = "ankitakshay78@gmail.com";

    $sub = "You're invited";

    $body = "Let's go!!!";

    $sender = "From: ankitsinghak07@gmail.com";

    if(mail($to_mail, $sub, $body, $sender)){
        echo "Email successfully sent to $to_mail";
    }else{
        echo "Email sending failed...";
    }

?>
</body>
</html>