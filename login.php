
<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dc590dae09.js" crossorigin="anonymous"></script>
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
  <script >





  </script>
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


<div class="container mt-5 mb-4" >

<form action="authenticate.php" method="POST" id="loginForm" novalidate class="jumbotron">
<div class="display-4 text-center">Login</div>

<div class="form-outline mb-4">
<label class="form-label" for="email">User Name</label>
    <input type="text" id="email" class="form-control shadow p-3 mb-5 bg-white rounded" name="email" placeholder="Email" oninput="this.value = this.value.replace(/\s/g, '')" >
    <span id="errorEmail" class="error"></span>

  </div>


  <!-- Password input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="password">Password</label>
    <input type="password" id="password" class="form-control shadow p-3 mb-5 bg-white rounded" name="password" placeholder="Password" required  oninput="this.value = this.value.replace(/\s/g, '')">
    <span id="errorPassword" class="error"></span>

  </div>
  <div class="form-group">
        <input type="submit" value="Login" class="btn btn-primary">
        <div id="error" style="color: red;"><div>
      </div>
      <div class="form-group">
        <a href="forgotpassword.php">Forgot Password?</a>
      </div>
      <div class="form-group">
        <p>Not a member? <a href="signup.php">Register</a></p>
      </div>
      <div class="social-icons">
      <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
      </div>

  
</form>
</div>
    





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script>
window.addEventListener('DOMContentLoaded', () => {
  document.getElementById('loginForm').addEventListener('submit', (event) => {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (!email.trim() || !password.trim()) {
      document.getElementById('error').textContent = 'Please fill in all required fields';
    } else {
      login(email, password);
    }
  });
});

function login(email, password) {
  const xhr = new XMLHttpRequest();
  const url = 'authenticate.php';

  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        const response = JSON.parse(xhr.responseText);
        if (response.success) {
          window.location.href = 'index.php'; // Redirect to index.php
        } else {
          document.getElementById('error').textContent = 'Invalid username or password';
        }
      } else {
        document.getElementById('error').textContent = 'An error occurred. Please try again later.';
      }
    }
  };

  xhr.open('POST', url, true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhr.send(`email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`);
}

</script>

  </body>
</html>


