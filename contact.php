<?php

// Connection to the database
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "burgerdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Validate form fields
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Check if any of the required fields are empty
  if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      echo "Error: All fields are required.";
  } else {
      // Proceed with inserting the data into the database
      $sql = "INSERT INTO contactdetails (name, email, subject, message,date) VALUES ('$name', '$email', '$subject', '$message',NOW())";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    header("Location: contact.php?success=Your Comment Succefully Recived Us");
    exit();
} else {
  echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
  }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/dc590dae09.js" crossorigin="anonymous"></script>
  <title>Contact Form</title>
  <style>
    body{
    background-image: url('img/bg3.jpg');
  background-repeat: none;
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

  <div class="container">
   
    <form id="contactForm" method="post" action="contact.php" class="jumbotron">
    <div class="form-group">
      <div class="display-4 text-center">Tell Something About us</div>

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

        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
    
</form>

  </div>
  <footer class=" footer bg-dark text-light py-4">
  <div class="container mb-0">
    <div class="row">
      <div class="col-lg-4">
        <h5>Contact Us</h5>
        <p>No 37/5, Galle Road, Colombo 03</p>
        <p>Email: hungryburger97@gmail.com</p>
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


  <script src="https://code.jquery.com/jquery-3.5.1.min.js">


  </script>

</body>
</html>
