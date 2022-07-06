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

    </ul>
  </div>
  <div class="container mt-5">
    <form action="resultaction.php" method="POST" class="w-50 m-auto">
      <div class="form-group">
        <label for="id_no">Student Id</label>
        <input type="text" name="stu_id" class="form-control" id="id_no" placeholder="Enter Id">
      </div>
      <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" name="stu_name" class="form-control" id="name" placeholder="name">
      </div>
      <div class="form-group">
        <label for="name">Course Title</label>
        <div class="input-group mb-3">

          <select class="custom-select form-control" id="inputGroupSelect01" name="course_title">
            <option selected>Course Title</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="name">Course Code</label>
        <div class="input-group mb-3">

          <select class="custom-select form-control" id="inputGroupSelect01" name="course_code">
            <option selected>Course Code</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="name">Semister</label>
        <div class="input-group mb-3">

          <select class="custom-select form-control" id="inputGroupSelect01" name="semister">
            <option selected>1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
            <option value="1">5</option>
            <option value="2">6</option>
            <option value="3">7</option>
            <option value="1">8</option>
            <option value="2">9</option>
            <option value="3">10</option>
            <option value="2">11</option>
            <option value="3">12</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="point">Point</label>
        <input type="text" class="form-control" name="point" id="point" placeholder="Point">
      </div>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
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