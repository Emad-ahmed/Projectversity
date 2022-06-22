<?php
include 'config.php';

$title = $_POST['ntitle'];
$description = $_POST['desc'];
$image = $_FILES['nimg'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'newsImage/' . $imageName;


move_uploaded_file($imageLocation, $imageDes);



$insert_product = mysqli_query($conn, "INSERT INTO `news`(`title`, `description`, `image`) VALUES ('$title','$description','$imageDes')");


if ($insert_product) {
    echo "<script>alert('Product Successfully Inserted')</script>";
    echo "<script>location.href = 'shownews.php'</script>";
} else {
    echo "<script>alert('Not Inserted!')</script>";
    echo "<script>location.href = 'addnews.php'</script>";
}
