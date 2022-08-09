<?php

include 'config.php';
$id = $_POST['id'];

$name = $_POST['name'];
$designation = $_POST['designation'];
$department = $_POST['department'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$areaofstudy = $_POST['areaofstudy'];
$biography = $_POST['biography'];

$image = $_FILES['nimg'];

$oldImage = $_POST['oldImage'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = "teacherImage/" . $imageName;


if (strlen($imageDes) > 13) {
    $updateQuery = "UPDATE `teacher` SET `name`='$name',`designation`='$designation',`department`='$department',`mobile`='$mobile',`email`='$email',`areaofstudy`='$areaofstudy',`biography`='$biography',`image`='$imageDes' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {
    $updateQuery = "UPDATE `teacher` SET `name`='$name',`designation`='$designation',`department`='$department',`mobile`='$mobile',`email`='$email',`areaofstudy`='$areaofstudy',`biography`='$biography',`image`='$oldImage' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='show_teacher.php'</script>";
}
