<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./CSS/style.css">  


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
 .change-content:after{
  content: ' ';
  animation:changetext 10s infinite linear;
  color: rgba(255, 166, 0);

}
@keyframes changetext {
  0%{content:"Spicy Chicken Burger";}
  20%{content:"Onion French Fries";}
  60%{content:"Fried Drumsticks";}
  80%{content:"Special Falvoured Coke";}
  
  
}
#btn2 a {
  width:200px;
  height: 35px;
  margin-top: 20px;
  letter-spacing: 3px;
  margin-left:5px;
  font-weight: bold;
  background-color: rgba(255, 166, 0);
  border: none;
  transition: 0.3s ease;
  cursor: pointer;
}
#btn2 a:hover{

background-color: rgba(255, 166, 0);
box-shadow: 0 0 5px rgba(255, 166, 0),
             0 0 20px rgba(255, 166, 0),
             0 0 60px rgba(255, 166, 0),
             0 0 150px rgba(255, 166, 0);
             color: black;  
}

@keyframes blink {
  0% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.blinking {
  animation: blink 1s infinite;
}

</style>
<script>
  $(document).ready(function() {
  $('#btn2').addClass('blinking');
});
</script>
 
  </head>
  <body>
  <div class="main-content " style=" width:100%; height: 90vh; background-image: url(./img/burgerbackground.jpg); background-size:cover;
  background-position: 73%;">
    <div class="content" style="padding-top:160px; margin-left:40px; color:white; font-size:20px;font-weight:bold;letter-spacing:3px">
        <h1 style="font-size:70px;font-weight:bold;letter-spacing:3px;">Best Deals</h1>
        <h2>Special Chicken Burger</h2>
        <div id="btn1"><a name="button" id="button" class=" btn rounded" href="menu.php" role="button">Order Now</a></div>

    </div>
  </div>
  <div class="container" style="margin-top:50px">
    <div class="best-card">
      <div class="row">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img class="card-image-top" src="./img/freshburger.jpg" alt="">
            <div class="card-img-overlay">
              <h1 class="card-title">Fresh Burgers</h1>
              <p class="card-text" >Special Receipies Included Burgers</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img class="card-image-top" src="./img/freshdesrts.jpg" alt="">
            <div class="card-img-overlay">
              <h1 class="card-title" >Fresh Deserts</h1>
              <p class="card-text" >Deserts with Your Favourations</p>
            </div>
          </div>
        </div>

        <div class="col-md-4 py-3 py-md-0">
          <div class="card">
            <img class="card-image-top" src="./img/delivery.jpg" alt="" height="230px">
            <div class="card-img-overlay">
              <h1 class="card-title" >Fast Delivery</h1>
              <p class="card-text" >Secured and Deliverd foods ontime</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- New Card -->
  <div class="container">
    <div class="card-content">
      <div class="row">
        <div class="col-md-6 py-3 py-md-0 mt-5">
          <h1 style="font-size: 30px;font-weight: bold;">Super Deal</h1>
          <h1 style="font-size: 30px;font-weight: bold;">Spicy Chiken Burger</h1>
          <h3 style="font-size: 30px;font-weight: bold;">50% Save</h3>
          <h5 style="font-size: 30px;font-weight: bold;">Rs:850.00</h5>
          <p class="text-muted font-italic"style="font-weight:bold; font-size:24px;">We will offer you an ultimate treate for just Rs:850.00 with 4 pces of fried chicken drumstics, packet of french fries and special falovoured coke</p>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img  class=" card-img-top" src="./img/Burgerdeal.jpg" alt="" height="500">

          </div>

        </div>

      </div>

    </div>
  </div>
  <div class="container">
    <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url(./img/Burgerdeal.jpg);
    background-repeat:no-rpeat; background-size:cover; background-position:73%; height:90vh;">
      <h1 style="font-size: 70px;color: white;font-weight: bold;padding-top: 15px;margin-left: 5px;text-shadow: 2px 1px 5px black;"  >Best <span class="change-content" style="content: ' ';animation:changetext 10s infinite linear; color: rgba(255, 166, 0);"><span></h1>
      <h2 style="font-size: 50px;color:rgba(255,166,0);font-weight: bold;padding-top: 15px;margin-left: 5px;">
      50% save</h2>
      <div id="btn2"><a name="button"  class=" btn rounded" href="product.php" role="button">Order Now</a></div>

    </div>

  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

include 'footer.php';

?>