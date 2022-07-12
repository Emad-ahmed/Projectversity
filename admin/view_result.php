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
        <h1 class="text-center mb-3 mt-4">Result List</h1>
        <div style="overflow-x:auto;">
            <input class="form-control mb-3" type="text" name="" id="myInput" placeholder="Student Name" onkeyup="searchFun()" />
            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Id No</th>
                        <th>Student name</th>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Semister</th>
                        <th>Point</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include 'config.php';

                    $alldata = mysqli_query($conn, "SELECT * FROM `result`");

                    while ($row = mysqli_fetch_array($alldata)) {
                        echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[student_id]</td>
                    <td>$row[student_name]</td>
                    <td>$row[course_name]</td>
                    <td>$row[course_code]</td>
                    <td>$row[semister]</td>
                    <td>$row[gpa]</td>
                    <td><a href='deleteresult.php? id=$row[id]' class='btn btn-danger'>Delete</a></td>
                    <td><a href='updateresult.php? id=$row[id]' class='btn btn-info'>Edit</a></td>

                    </tr>";
                    }

                    ?>
                </tbody>
            </table>
        </div>



        <script>
            const searchFun = () => {
                let filter = document.getElementById("myInput").value.toUpperCase();

                let myTable = document.getElementById("myTable");
                let tr = myTable.getElementsByTagName("tr");

                for (var i = 0; i < tr.length; i++) {
                    let td = tr[i].getElementsByTagName("td")[2];

                    if (td) {
                        let textvalue = td.textContent || td.innerHTML;
                        if (textvalue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            };
        </script>
    </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>