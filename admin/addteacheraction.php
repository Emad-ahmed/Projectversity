<?php

include 'config.php';

$name = $_POST['name'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$areaofstudy = $_POST['areaofstudy'];
$biography = $_POST['biography'];

$image = $_FILES['nimg'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'teacherImage/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);

$_name_pattern = "/^[a-zA-Z. ]+$/";
$_emailPattern = "/^[a-zA-Z0-9_-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/";


if (!preg_match($_name_pattern, $name)) {
    echo "<script>alert('Invalid Name')</script>";
    echo "<script>location.href = 'addteacher.php'</script>";
} elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href = 'addteacher.php'</script>";
} else {
    $insert_query = mysqli_query($conn, "INSERT INTO `teacher`(`name`, `designation`, `department`, `mobile`, `email`, `areaofstudy`, `biography`, `image`) VALUES ('$name','$designation','$department','$mobile','$email','$areaofstudy','$biography','$imageDes')");
    echo "<script>alert('Successfully Inserted Teacher')</script>";
    echo "<script>location.href = 'addteacher.php'</script>";
}
