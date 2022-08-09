<?php
session_start();


$view = $_SESSION['admin'];


if (!isset($view)) {
    echo "<script>location.href = 'login.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kufam:wght@600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reg.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Home</title>

    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        form {
            background: #000;
            padding: 2rem;
            color: white;
            border-radius: 1rem;
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
                <a href="shownews.php"><i class="fas fa-stream"></i>Show News</a>
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
        <form action="addteacheraction.php" method="POST" class="formview" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="department">Department</label>
                <div class="input-group mb-3">

                    <select class="custom-select form-control" id="department" name="department">

                        <option value="CSE" selected>CSE</option>
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
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Designation">
            </div>
            <div class="form-group">
                <label for="point">Area of Study</label>
                <textarea name="areaofstudy" id="areaofstudy" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="biography">Biography</label>
                <textarea name="biography" id="biography" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="nimg" class="form-label">Image</label>
                <input type="file" id="nimg" name="nimg" class="form-control">
            </div>
            <button type="submit" class="btn btn-outline-light col-12 mt-3">Submit</button>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="js/validation.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>