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

        td img {
            width: 100px;
            height: 100px;
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
                <a href="../index.php"><i class="fas fa-calendar"></i>Main Home</a>
            </li>
        </ul>
    </div>

    <div class="container mt-5">
        <h1 class="text-center mb-3 mt-4">Show News</h1>
        <div class="col-lg-12">
            <input class="form-control mb-3" type="text" name="" id="myInput" placeholder="Student Name" onkeyup="searchFun()" />
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Title</th>
                        <th>Full News</th>
                        <th>News Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'config.php';

                    $alldata = mysqli_query($conn, "SELECT * FROM `news`");

                    while ($row = mysqli_fetch_array($alldata)) {
                        echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[title]</td>
                    <td>$row[description]</td>
                    <td><img src='$row[image]' alt=''></td>
                    <td><a href='updatenews.php? id=$row[id]' class='btn btn-info'>Edit</a></td>
                    <td><a href='deletenews.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    </tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>