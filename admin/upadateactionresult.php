<?php
include 'config.php';

$id = $_POST['id'];

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
    echo "<script>location.href = 'updateresult.php'</script>";
} elseif (!preg_match($_idPattern, $stu_id)) {
    echo "<script>alert('Invalid Id No')</script>";
    echo "<script>location.href = 'updateresult.php'</script>";
} else {
    $updatequery = mysqli_query($conn, "UPDATE `result` SET `student_id`='$stu_id',`student_name`='$stu_name',`course_name`='$course_title',`course_code`='$course_code',`semister`='$semister',`gpa`='$point' WHERE id = '$id'");
    echo "<script>alert('Successfully Updated Result')</script>";
    echo "<script>location.href = 'view_result.php'</script>";
}
