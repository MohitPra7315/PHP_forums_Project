<?php

$show = false;

if (isset($_SESSION['userName']) && $_SESSION['loggedin'] == true) {
    $show = true;
}
echo ' <nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
       <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/welcome.php">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/welcome.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/welcome.php">Contact</a>
                </li>
                ';
if (!$show) {

    echo
    '<li class="nav-item">
                    <a class="nav-link" href="/login.php">login</a>
                </li>
               
                
                <li class="nav-item">
                    <a class="nav-link" href="/signup.php">signup</a>
                </li>';
}
if ($show) {

    echo

    '<li class="nav-item">
                    <a class="nav-link" href="/logout.php">Logout</a>
                </li>';
}
echo '
            </ul>
             <form class="d-flex">
             
             
             </form>
        </div>
    </div>
</nav>';
