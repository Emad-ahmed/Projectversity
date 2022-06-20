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

$_duplicate_email = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$_duplicate_id = mysqli_query($conn, "SELECT * FROM `user` WHERE student_id = '$id_no'");

if (mysqli_num_rows($_duplicate_email) > 0) {
    echo "<script>alert('Email Already Taken')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (!preg_match($_name_pattern, $name)) {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (!preg_match($_idPattern, $id_no)) {
    echo "<script>alert('Invalid Id No')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (mysqli_num_rows($_duplicate_id) > 0) {
    echo "<script>alert('Student Id ALready Taken')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (!preg_match($_mobile_pattern, $phone)) {
    echo "<script>alert('Invalid Mobile Number')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif (!preg_match($_password_pattern, $pass)) {
    echo "<script>alert('Invalid Password')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} elseif ($pass !== $cpass) {
    echo "<script>alert('Password Not Match')</script>";
    echo "<script>location.href = 'resgistration.php'</script>";
} else {
    $insert_query = "INSERT INTO `user`(`name`, `student_id`, `email`, `mobile`, `gender`, `password`) VALUES ('$name','$id_no','$email','$phone','$radiogroup','$pass')";
    mysqli_query($conn,  $insert_query);
    echo "<script>alert('Successfully Inserted')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
