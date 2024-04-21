
<!doctype html>
<html lang="en">
  <head>
    <title>Sign uP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dc590dae09.js" crossorigin="anonymous"></script>
    <style>
body{
    background-image: url('img/bg3.jpg');
  background-repeat: repeat;
  background-attachment: fixed;
  
  opacity: 1;
}
.nav-link:hover{
  background-color: rgba(255, 166, 0);
  box-shadow: 0 0 5px rgba(255, 166, 0),
               0 0 20px rgba(255, 166, 0),
               0 0 60px rgba(255, 166, 0),
               0 0 150px rgba(255, 166, 0);
               color: black;
}
.navbar-brand:hover{
  margin:left;
  font-weight: bold;
  color: rgba(255, 166, 0);

}
    </style>
  </head>
  <body>

  <div class="container-background">
    <nav class="navbar navbar-expand-lg bg-dark" id="navbar-color">

    <a class="navbar-brand" href="index.php"><img src="img/burgericon.png" alt="" width="50" height="50">Hungry Burger</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php" >Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu.php" id="first">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Sign Up</a>
        </li>
      </ul>
    </div>
  </nav>


    </div>


    <form action="register.php" id="registrationForm" method="POST" novalidate class="jumbotron">
    <h2 class="text-center display-4">Signup</h2>
    <?php
    if (isset($_GET['message'])) {
     
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'. $_GET['message'] .'</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';



    }
    ?>
<?php
    if (isset($_GET['message2'])) {
     
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>'. $_GET['message2'] .'</strong> 
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';



    }
    ?>


      <div class="form-group">
        <label for="name">User Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a username" name="name" required >
       
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
        
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
        
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" class="form-control" id="confirm_password" placeholder="Confirm your password" name="confirm_password" required>
      </div>
      <button type="submit" class="btn btn-primary" >Signup</button>
      <a class="btn btn-primary" href="login.php" role="button">Login</a>
      <p id="registrationMessage"  style="color: red;"class="mt-3"></p>
      <?php
      if (isset($_GET['success'])) {
       
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>'. $_GET['success'] .'</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      ?>
    </form>
  </div>


  <footer class=" footer bg-dark text-light py-4">
  <div class="container mb-0">
    <div class="row">
      <div class="col-lg-4">
        <h5>Contact Us</h5>
        <p>No 37/5, Galle Road, Colombo 03</p>
        <p>Email: info@hungryburger.com</p>
        <p>Phone: +94777 120658</p>
      </div>
      <div class="col-lg-4">
        <h5>Opening Hours</h5>
        <p>Monday - Friday: 9am - 9pm</p>
        <p>Saturday - Sunday: 10am - 8pm</p>
      </div>
      <div class="col-lg-4">
        <h5>Follow Us</h5>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
      </div>
      <span>&copy; 2023 Hungry Burger. All rights reserved.</span>
    </div>
</div>
  </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    </script>
  </body>
</html>


