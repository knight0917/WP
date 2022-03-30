<?php
    require_once("db.php");

    $sql = "DELETE FROM user WHERE id='" . $_GET["id"] . "'";
    mysqli_query($conn,$sql);
    header("Location:index.php");
?>