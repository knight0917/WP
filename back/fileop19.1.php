<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file operation</title>
</head>
<body>
<?php

$filename = "demo.txt";
$file = fopen( $filename, 'r' );
$size = filesize( $filename );
$filedata = fread( $file, $size );

$file = fopen("demo.txt", 'w');
$text = "Hellogfcgfc world\n";
fwrite($file, $text);
?>

</body>
</html>