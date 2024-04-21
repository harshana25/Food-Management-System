<!doctype html>
<html lang="en">
  <head>
    <title>Hungry Burger</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./CSS/style.css">  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<style>
 
</style>
    
  </head>
  <body>
    <div class="container-background">
    <nav class="navbar navbar-expand-md  bg-dark">

    <a class="navbar-brand" href="index.php" id="logo-color"><i><img src="img/burgericon.png" alt=""></i>Hungry Burger</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link "  href="index.php" id="first" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="login.php">Login</a>
        </li>

        <li class="nav-item">
          <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Admin</button>
           
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
    <div class="modal-content" style="background-color:grey;">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Admin Form -->
        <div class="container">
        <h5 class="modal-title display-4 text-center text-justify" id="exampleModalLabel">Admin Login</h5>

        
        <form id="loginForm" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"> <i class="bi bi-lock-fill mr-2"></i> Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div id="errorMessage" class="text-danger"></div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

<!-- Form End -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- Modal End -->
        </li>


        <li class="nav-item">
          <a class="nav-link"  href="signup.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>


    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">

</script>
<script >
 
 document.getElementById('loginForm').addEventListener('submit', (event) => {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Perform authentication with the provided credentials
    if (username === 'Admin' && password === 'admin@789') {
        window.location.href = 'dashboard.php'; // Redirect to the dashboard page
    } else {
        document.getElementById('errorMessage').textContent = 'Invalid username or password';
    }
});
</script>

  </body>
</html>