<?php

include 'config.php';

$id_no = $_POST['id_no'];
$password = $_POST['password'];
$pass = md5($password);

$_result = mysqli_query($conn, "SELECT * FROM `user` WHERE student_id ='$id_no' And password='$pass'");


if (mysqli_num_rows($_result)) {
    session_start();
    $_SESSION['student_id'] = $id_no;
    echo "<script>alert('Login Successfull')</script>";
    echo "<script>location.href = 'index.php'</script>";
} elseif ($id_no == "admin12@gmail.com" && $password == "12345") {
    session_start();
    $_SESSION['admin'] = $id_no;
    echo "<script>location.href = 'admin/home.php'</script>";
} else {
    echo "<script>alert('Incorrect Username Or Password')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
