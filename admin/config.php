<?php

$SERVERNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DB_NAME  = "finalproject";


$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB_NAME);

if (!$conn) {
    echo "<script>alert('ERROR! DB Not Connected')</script>";
} else {
    echo "<script>alert('DB Connected')</script>";
}
