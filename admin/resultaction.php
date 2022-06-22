<?php

include 'config.php';

$stu_id = $_POST['stu_id'];
$stu_name = $_POST['stu_name'];
$course_title = $_POST['course_title'];
$course_code = $_POST['course_code'];
$semister = $_POST['semister'];
$point = $_POST['point'];

$_name_pattern = "/^[a-zA-Z. ]+$/";
$_idPattern = "/^[0-9]{5,15}$/";


if (!preg_match($_name_pattern, $stu_name)) {
    echo "<script>alert('Invalid Name')</script>";
    echo "<script>location.href = 'resultreg.php'</script>";
} elseif (!preg_match($_idPattern, $stu_id)) {
    echo "<script>alert('Invalid Id No')</script>";
    echo "<script>location.href = 'resultreg.php'</script>";
} else {
    $insert_query = mysqli_query($conn, "INSERT INTO `result`(`student_id`, `student_name`, `course_name`, `course_code`, `semister`, `gpa`) VALUES ('$stu_id','$stu_name','$course_title','$course_code','$semister','$point')");
    echo "<script>alert('Successfully Inserted Result')</script>";
    echo "<script>location.href = 'resultreg.php'</script>";
}
