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


            <div class="row my-6 container">
            what is meaning of monotring in commerece
                <?php
                $id = $_GET['thid'];
                require "./Components/_dbConnection.php";
                $sql = "SELECT * FROM `thread` WHERE `thread_id` = '$id'";
                $rersult = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($rersult)) {
                    $name = $row['thread_name'];
                    $desc = $row['thread_desc'];
                    $Author = $row['Category_user'];
                     echo "
                          <div class='bg-green-200 '  id='offcanvas' aria-labelledby='offcanvasLabel'>
                           <div class='offcanvas-header'>
                            <h5 class='offcanvas-title' id='offcanvasLabel'>$name</h5>
                       </div>
                      <div class='offcanvas-body'> $desc 
                       </div>   ";
                }
                ?>

               

            </div>
        </div>
    </div>
    </div>

</body>

</html>