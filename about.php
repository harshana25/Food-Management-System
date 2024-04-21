
<!doctype html>
<html lang="en">
  <head>
    <title>About</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dc590dae09.js" crossorigin="anonymous"></script>

    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f8f8f8;
}
        .about-section {
  padding: 80px 0;
  background-color: #fff;
}

.section-title {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 30px;
}

.about-section p {
  margin-bottom: 20px;
}
.about-section{
    background-image: url('img/bg3.jpg');
  background-repeat: repeat;
  background-attachment: fixed;
  opacity: 1;
}
.about-section img {
  width: 100%;
  max-height: 400px;
}
.footer {
  padding: 20px 0;
  color: #fff;
}
.image-container {
  position: relative;
  display: inline-block;
}

.image-container:hover::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5); 
}

.image-container img {
  display: block;
  width: 100%;
  height: auto;
}


.image-container .caption {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #fff;
  font-size: 18px;
  text-align: center;
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
          <a class="nav-link" href="#" id="first">Menu</a>
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

  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
            <div class="jumbotron">
            <h2 class="section-title text-center">About Us</h2>
          <p>Welcome to Hungry Burger, the ultimate destination for burger lovers! We take pride in serving the most delicious, mouth-watering burgers made with the finest ingredients. Our mission is to satisfy your cravings and deliver an exceptional dining experience.</p>
        <p>At Hungry Burger, we believe in quality and taste. Each burger is expertly crafted by our talented chefs who blend the perfect combination of flavors. We use premium, locally sourced ingredients to ensure the freshest and tastiest burgers every time.</p>
        <p>Whether you're a meat lover, a vegetarian, or have dietary preferences, we have a wide variety of burger options to cater to everyone's taste buds. From classic cheeseburgers to gourmet specialty burgers, our menu has something for everyone.</p>
        <p>Butit's not just about the burgers! At Hungry Burger, we also offer a range of delicious sides, such as crispy fries, onion rings, and refreshing beverages to complement your meal. Our friendly staff is committed to providing excellent service and creating a warm and inviting atmosphere for you to enjoy your meal.</p>
            </div>
         
            
        </div>
        <div class="col-lg-6">
         <div class=" row image-container mb-1"><img src="img/bg1.jpg" alt="About Image" class="img-fluid rounded float-left"></div>
         <div class="row  image-container mt-3"><img src="img/bg2.jpg" alt="About Image" class="img-fluid rounded float-left"></div>
        </div>
      </div>
    </div>
  </section>

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

