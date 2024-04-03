



</div>
   <div class="col">
    <h1>Add New category</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
   
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
    </div>
   </div>
</div>
  
  </body>
</html>