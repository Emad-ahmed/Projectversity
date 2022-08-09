<?php

include 'config.php';

session_start();


$view = $_SESSION['admin'];


if (!isset($view)) {
    echo "<script>location.href = 'login.php'</script>";
}

$id = $_GET['id'];

$datafetchquery = mysqli_query($conn, "SELECT * FROM `teacher` WHERE id = '$id'");

$data = mysqli_fetch_array($datafetchquery);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css" />
    <title>Home</title>

    <style>
        table,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        img {
            width: 100px;
        }
    </style>
</head>

<body>
    <input type="checkbox" id="check" />
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>Admin</header>
        <ul>
            <li>
                <a href="home.php"><i class="fas fa-qrcode"></i>Dashboard</a>
            </li>
            <li>
                <a href="resultreg.php"><i class="fas fa-link"></i>Add Result</a>
            </li>
            <li>
                <a href="view_result.php"><i class="fas fa-link"></i>View Result</a>
            </li>
            <li>
                <a href="shownews.php"><i class="fas fa-calendar"></i>Show News</a>
            </li>
            <li>
                <a href="addnews.php"><i class="fas fa-calendar"></i>Add News</a>
            </li>
            <li>
                <a href="addteacher.php"><i class="fas fa-calendar"></i>Add Teacher</a>
            </li>
            <li>
                <a href="show_teacher.php"><i class="fas fa-calendar"></i>Show Teacher</a>
            </li>
            <li>
                <a href="../index.php"><i class="fas fa-calendar"></i>Main Home</a>
            </li>

        </ul>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mt-5 mb-4">Update Teacher</h1>
        <form action="updateteacherAction.php" id="form" method="POST" class="w-50 m-auto" enctype="multipart/form-data">


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" value="<?php echo $data['designation'] ?>" class="form-control" id="designation" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <div class="input-group mb-3">

                    <select class="custom-select form-control" id="department" name="department">

                        <option value="CSE" selected><?php echo $data['department'] ?></option>
                        <option value="BBA">BBA</option>
                        <option value="BBA">English</option>
                        <option value="Law">Law</option>
                        <option value="EEE">EEE</option>
                        <option value="Bangla">Bangla</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" name="mobile" value="<?php echo $data['mobile'] ?>" class="form-control" id="mobile" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control" id="email" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="point">Area of Study</label>
                <textarea name="areaofstudy" id="areaofstudy" cols="30" rows="10" class="form-control"><?php echo $data['areaofstudy'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="biography">Biography</label>
                <textarea name="biography" id="biography" cols="30" rows="10" class="form-control"><?php echo $data['biography'] ?></textarea>
            </div>


            <div class="mb-3">
                <label for="nimg" class="form-label">Image</label>
                <input type="file" id="fileupload" id="nimg" name="nimg" value="<?php echo $data['image'] ?>" class="form-control">
            </div>

            <div>
                <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" class="form-control" hidden>
            </div>


            <div>
                <img src="<?php echo $data['image'] ?>" id="upload-img" class="mb-3" alt="Image" width="100px">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update News</button>
        </form>
    </div>



    <script src="js/jquery-latest.min.js"></script>
    <script>
        $(function() {
            $("#fileupload").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#upload-img").attr("src", x);
                console.log(event);
            });
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>