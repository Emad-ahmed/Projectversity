<?php
include 'config.php';

$id = $_POST['id'];

$title = $_POST['ntitle'];
$description = $_POST['desc'];
$image = $_FILES['nimg'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'newsImage/' . $imageName;



move_uploaded_file($imageLocation, $imageDes);



$updatequery = mysqli_query($conn, "UPDATE `news` SET `title`='$title',`description`='$description',`image`='$imageDes' WHERE id = '$id'");
echo "<script>alert('Successfully Updated Newws')</script>";
echo "<script>location.href = 'shownews.php'</script>";
