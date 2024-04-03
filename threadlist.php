<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ThreadList!</title>
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
        <div class="container bg-green-200">

            <div class="row my-6 container">
                <?php
                $id = $_GET['Catid'];
                require "./Components/_dbConnection.php";
                $sql = "SELECT * FROM `category` WHERE `Category_Id` = $id";
                $rersult = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($rersult)) {
                    $name = $row['Category_name'];
                    $desc = $row['Category_desc'];
                    $Author = $row['Author'];
                    $Lcation = $row['Lcation'];
                    $id = $row['Category_name'];
                    echo "
                          <div class='bg-green-200 '  id='offcanvas' aria-labelledby='offcanvasLabel'>
                           <div class='offcanvas-header'>
                            <h5 class='offcanvas-title' id='offcanvasLabel'>$name</h5>
                       </div>
                      <div class='offcanvas-body'> $desc 
                       </div>   ";
                }
                ?>

                <?php

                session_start();
                $showAlert = false;
                $Author = $_SESSION['userName'];
                $id = $_GET['Catid'];
                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $th_title = $_POST['title'];
                    $th_desc = $_POST['desc'];
                    echo $th_title;
                    echo $th_desc;
                    $conn =  include "./Components/_dbConnection.php";
                    $sql = "INSERT INTO `thread` ( `thread_name`, `thread_desc`, `Category_id`, `Category_user`, `date`) VALUES ( '$th_title', '$th_desc', '$id', '$Author', current_timestamp())";
                    $rersult = mysqli_query($conn, $sql);
                    $showAlert = true;


                    if ($showAlert) {
                        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
 <strong>Hurry !</strong>  question is submitted
 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
                    }
                }
                ?>
                <form class="border border-1 bg-black-50  p-5" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <h1>Asked Your Question here</h1>
                    <div class=" mb-3">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" ,id="title" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>

                    <div class=" mb-3">
                        <label>Question</label>
                        <textarea type="text" class="form-control" name="desc" id="desc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        </textarea>
                    </div>


                    <button type="submit" name="newthread" class="btn btn-primary">submit Question</button>
                </form>


                <h1>Browser Question</h1>
                <?php
                $id = $_GET['Catid'];
                $conn =include "./Components/_dbConnection.php";

                $sql = "SELECT * FROM `thread` WHERE `Category_id` = '$id'";
                $result = mysqli_query($conn, $sql);
                $isdata = true;
                while ($rows = mysqli_fetch_assoc($result)) {
                    $isdata = false;
                    $id=$rows['thread_id'];
                    $name = $rows['thread_name'];
                    $desc = $rows['thread_desc'];
                    $Author = $rows['Category_id'];
                    echo " <div class='d-flex my-4 bg-light'>
                       <div class='flex-shrink-0 '>
                       <img src='...' alt='...'>
                        </div>
                        <div class='flex-grow-1 ms-3'>
                        lalu
                        <h2><a href='/thread.php/?thid=$id'>$name</a></h2>
                        <p>$desc</p>
                      </div>
                    </div>                     
                         ";
                }


                if ($isdata == true) {
                    echo "<div class='d-flex my-4 bg-light text-dark p-5'>
                     <div class='flex-grow-1 ms-3'>
                     <h2>Not Data Found</h2>
                     <p>yor will be  the First in </p>
                    </div>
                    </div>   ";
                }
                ?>


            </div>
        </div>
    </div>
    </div>

</body>

</html>