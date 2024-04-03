<?php
$show = false;
session_start();
if (!isset($_SESSION['userName']) || $_SESSION['loggedin'] != true) {
    header("location:login.php");
} else {
    $show = true;
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <?php
    require "./Components/_navbar.php"
    ?>
    </div>
    <div class="col">
        <h1 class="text-center">Welcome Page</h1>
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
        <div style="height: 1800px;">
            <?php
            require "./Components/carasol.php";
            ?>
            <div class="row my-6 container">
                <?php
                require "./Components/_dbConnection.php";
                $sql = "SELECT * FROM `category`";
                $rersult = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($rersult)) {
                    $name = $row['Category_name'];
                    $desc = $row['Category_desc'];
                    $Author = $row['Author'];
                    $Lcation = $row['Lcation'];
                    $id = $row['Category_Id'];
                    echo "
                    <div class='card' style='width: 18rem;'>
  <img src='https://api.unsplash.com/500*400/?code,python' class='card-img-top' alt'...'>
  <div class='card-body'>
    <h5 class='card-title'><a href='/threadlist.php?Catid=$id'>$name</a></h5>
    <p class='card-text'>$desc</p>
        <h6 class='card-text'>$Author</h6>
        <h3 class='card-text'>$Lcation</h3>

    <a href='/threadlist.php?Catid=$id' class='btn btn-primary'>Go thread</a>
  </div>
</div>";
                }
                ?>


            </div>
        </div>
    </div>
    </div>

</body>

</html>