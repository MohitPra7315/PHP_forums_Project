<?php

$success = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "./Components/_dbConnection.php";
    $userName = $_POST['name'];
    $password = $_POST['password'];
    $cpassword = $_POST['conPassword'];
    $contact = $_POST['contact'];
    $existSql = "select * from `user` where `name`='$userName'";
    $existResult = mysqli_query($conn, $existSql);

    $num = mysqli_num_rows($existResult);
    if ($num > 0) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Holy guacamole!</strong> User. is Already Exists
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    } else {

        if ($password == $cpassword) {
            $sql = "INSERT INTO `user` ( `name`, `password`, `cpassword`, `contact`) VALUES ( '$userName', '$password', '$cpassword', '$contact')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo $success = true;
            }
        } else {

            $showError = "password do not match";
        }
    }
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

    <title>Signup user</title>
</head>

<body>
    <?php
    require "./Components/_navbar.php"
    ?>

    <?php
    if ($success) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Holy guacamole!</strong> You have Redisterd.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    ?>
    <?php
    if ($showError) {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
 <strong>Holy guacamole!</strong> .'$showError'.
 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }
    ?>
    <div class="container col-mb-6 ">
        <h1 class="text-center">Register</h1>
        <form method="post" action="/signup.php" class="container ">
            <div class=" mb-3">
                <label>userName</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class=" col-mb-6">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class=" mb-3">
                <label>Confirm-Password</label>
                <input type="password" id="conPassword" name="conPassword" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class=" mb-3">
                <label>Contact</label>
                <input type="number" class="form-control" id="contact" name="contact">
            </div>
            <div class=" mb-3">
                <label>Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <button type="submit " name="" class="btn btn-primary">Register</button>
            <a href="./login.php">Go to Login </a>
        </form>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>