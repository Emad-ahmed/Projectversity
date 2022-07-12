<?php
include 'config.php';
$id = $_POST['id'];


$title = $_POST['ntitle'];
$description = $_POST['desc'];
$image = $_FILES['image'];
$oldImage = $_POST['oldImage'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = "newsImage/" . $imageName;


if (strlen($imageDes) > 10) {
    $updateQuery = "UPDATE `news` SET `title`='$title',`description`='$description',`image`='$imageDes' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {

    $updateQuery = "UPDATE `news` SET `title`='$title',`description`='$description',`image`='$oldImage' WHERE id = '$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {

    die("Not updated!");
} else {

    echo "<script>alert('Data updated!!')</script>";
    echo "<script>location.href='shownews.php'</script>";
}
