<?php

include 'config.php';

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `user` WHERE id='$id'";

mysqli_query($conn, $deletequery);

if ($deletequery) {

    echo "<script>alert('Delete Successfull')</script>";
    header("location:home.php");
}
