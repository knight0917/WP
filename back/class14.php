<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class in PHP</title>
</head>
<body>
<?php

class Nums{
    private $a = 7;
    private $b = 8;

    public function sum() {
        return $this->a + $this->b;
    }
}
$obj = new Nums();
$c = $obj->sum();
echo "By adding two no.:".$c;

?>
</body>
</html>