<?php

$id = $_GET['id'];

echo $id;

$deletequery = "DELETE FROM `user` WHERE id='$id'";

mysqli_query($conn, $delete_query);

header("location:home.php");
