<?php
include 'config.php';

$name = $_POST['name'];
$id_no = $_POST['id_no'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$radiogroup = $_POST['radiogroup1'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];

$_name_pattern = "/^[a-zA-Z. ]+$/";
$_idPattern = "/^[1-9]{5,15}$/";
$_mobile_pattern = "/^(\+88|88)?01[3-9]\d{8}$/";
$_emailPattern = "/^[a-zA-Z0-9_-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/";
$_password_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";



if (!preg_match($_name_pattern, $name)) {
    echo "<script>alert('Invalid Username')</script>";
} elseif (!preg_match($_idPattern, $id_no)) {
    echo "<script>alert('Invalid Id No')</script>";
} elseif (!preg_match($_mobile_pattern, $phone)) {
    echo "<script>alert('Invalid Mobile Number')</script>";
} elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
} elseif (!preg_match($_password_pattern, $pass)) {
    echo "<script>alert('Invalid Password')</script>";
} elseif ($pass !== $cpass) {
    echo "<script>alert('Password Not Match')</script>";
} else {
    $insert_query = "INSERT INTO `user`(`name`, `student_id`, `email`, `mobile`, `gender`, `password`) VALUES ('$name','$id_no','$email','$phone','$radiogroup','$pass')";
    mysqli_query($conn,  $insert_query);
}
