<!doctype html>
<html lang="en">
  <head>
    <title>Hungry Burger</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <style>

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

#first{
  border-bottom:2px solid rgba(255, 166, 0);
}

#button1 button{
  width:200px;
  height: 35px;
  margin-left:50px;
  letter-spacing: 3px;
  font-weight: bold;
  background-color: rgba(255, 166, 0);
  border: none;
  transition: 0.3s ease;
  cursor: pointer;
}
#button2 ,#btn-next{
  width:150px;
  height: 35px;
  margin-left:20px;
  letter-spacing: 3px;
  font-weight: bold;
  background-color: rgba(255, 166, 0);
  border: none;
  transition: 0.3s ease;
  cursor: pointer;
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

    .blink-badge {
      animation: blink 2s infinite;
    }

    /* .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }*/


</style>
<script>



function openOrderModal(burgername,unitPrice) {
  document.getElementById('burgername').value = burgername;
  document.getElementById('unitPrice').value = unitPrice;
}
    function calculateTotalPrice() {

  var quantity = parseInt(document.getElementById('quantity').value);
  var unitPrice=parseInt(document.getElementById('unitPrice').value);
  var totalPrice = quantity * unitPrice;
  document.getElementById('totalPrice').value = totalPrice;

}
function addToCart() {
 

  // Redirect to cart.php
  window.location.href = "product.php";
}

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

    <div class="container mt-1" >
      <div class="carousel slide carousel-fade" data-ride="carousel" id="Controller">
        <ol class="carousel-indicators">
          <li data-target="#Controller" data-slide-to="0"></li>
          <li data-target="#Controller" data-slide-to="1"></li>
          <li data-target="#Controller" data-slide-to="2"></li>
          <li data-target="#Controller" data-slide-to="3"></li>
          <li data-target="#Controller" data-slide-to="4"></li>

        </ol>

        <div class="carousel-inner">

          <div class="carousel-item active">
          <img src="./img/beefburger.jpg" alt="" class="d-block w-100" width="540" height="560" data-interval="2000" >
            <div class="carousel-caption">
              <h4 style="font-weight:bold">Non-Vegie Burger</h4>
            </div>
          </div>


          <div class="carousel-item ">
            <img src="./img/VegieBurger.jpg" alt="" class="d-block w-100" width="540" height="560" data-interval="2000" >
            <div class="carousel-caption">
              <h4 style="font-weight:bold;color:black">Vegie Burger</h4>
            </div>
          </div>



          <div class="carousel-item ">
          <img src="./img/Cheesy Burger.jpg" alt="" class="d-block w-100" width="540" height="560" data-interval="2000" >
          <div class="carousel-caption">
              <h4 style="font-weight:bold; color:white">Cheesy Burger</h4>
            </div>
          </div>



          <div class="carousel-item ">
          <img src="./img/dessert.jpg" alt="" class="d-block w-100" width="540" height="560" data-interval="2000" >
          <div class="carousel-caption">
              <h4 style="font-weight:bold; color:white">Desserts</h4>
            </div>
          </div>

          <div class="carousel-item ">
          <img src="./img/drinks.jpg" alt="" class="d-block w-100" width="540" height="560" data-interval="2000" >
          <div class="carousel-caption">
              <h4 style="font-weight:bold; color:white">Flavoured Beverages</h4>
            </div>
          </div>



        </div>
        <a href="#Controller" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>

        <a href="#Controller" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
      </div>
 <!-- Add menus as a card deck -->
 <!-- Non vegie Burger -->

 <div class="container mt-3">
    <div><p class="display-4 text-center lead">Non-Vegie Burgers</p></div>
<div class="card-deck">
<div class="card">
<img src="img/burgerbackground.jpg" alt="spicy chicken burger" class="card-img-top">
<div class="card-body">

  <h5 class="card-title text-center">Spicy Chicken Burger<span class="badge bg-danger blink-badge">New</span></h5>
  <p class="card-text">Big, thick, crunchy and juicy fried chicken fillet, lettuce and Signature Spicy Sauce on a toasted soft brioche bun</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:800</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn "id="order-button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Spicy Chicken',800)" role="button">Order Now</button></div>

<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="orderModalLabel">Add to Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" name="burgername" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" name="unitPrice" id="unitPrice"  >
        </div>
     
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" name="totalPrice" id="totalPrice" >
        </div>
        </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Get Total</button>
        <button type="button" class="btn btn-primary" onclick="addToCart()">Add to Cart</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        
      </div>
    </div>
  </div>
</div>
</div>
</div>



<div class="card ">
<img src="img/crispychicken.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Crispy Chicken Burger</h5>
  <p class="card-text">A delicious crispy chicken patty served on a toasted bun with fresh lettuce, juicy tomato slices, and tangy mayo. The chicken is breaded and fried to perfection, giving it a crispy and flavorful coating. Satisfy your cravings with this mouthwatering chicken burger!</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:850</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" data-toggle="modal" data-target="#orderModal" role="button" onclick="openOrderModal('Crispy Chicken Burger',850)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername" readonly >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice" value="850">
        </div>
        <!-- <div class="form-group">
        <label for="orderMethod">Order Method:</label>
        <select class="form-control" id="exampleFormControlSelect1">
        <option>Delivery</option>
       <option>Take Away</option>
        <option>Dine In</option>
      
       </select>
        </div> -->
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" readonly>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>


  </div>
</div>
</div>
</div>




<div class="card">
<img src="img/chilliechicken.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Chilie Chicken Burger</h5>
  <p class="card-text">A spicy and flavorful chicken burger topped with melted cheese, fresh lettuce, sliced tomatoes, and tangy pickles.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:890</p>
</div>
<div class="card-footer bg-secondary">

<div id="button1"><button class="btn" data-toggle="modal" data-target="#orderModal" role="button" onclick="openOrderModal('Chillie Chicken Burger',890)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername" readonly >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice" value="850">
        </div>
    
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" readonly>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
</div>
</div>

</div>
</div>
</div>
</div>



<!-- Beef Burger -->

<div class="container mt-3">
<div class="card-deck">
<div class="card">
<img src="img/beefburger.jpg" alt="spicy chicken burger" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Beef Burger<span class="badge bg-danger blink-badge">New</span></h5>
  <p class="card-text">Our delicious beef burger is made with high-quality, seasoned ground beef patty cooked to perfection.</p>
  <p class="card-text">Topped with fresh lettuce, juicy tomatoes, sliced onions, pickles, and your choice of cheese.</p>
  <p class="card-text">Served on a soft and toasted brioche bun, with a side of crispy golden fries.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs1200</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Beef Burger',1200)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
       
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>





<!-- Fried Fish Burger -->


<div class="card ">
<img src="img/friedfishburger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Fried Fish Burger</h5>
  <p class="card-text">A delicious burger made with crispy fried fish fillet, served on a soft bun.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:750</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Fried Fish Burger',750)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
   
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>


<!-- Sea Food Burger -->

<div class="card">
<img src="img/seafoodburger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Sea Food Burger</h5>
  <p class="card-text">A delicious burger made with fresh seafood ingredients.</p>
  <p class="card-text">It features a juicy fish patty seasoned with special spices, topped with tangy tartar sauce, crisp lettuce, and sliced tomatoes. Served on a soft, toasted bun.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:1000</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Sea-Food Burger',1000)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
    
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>



<!-- Omlet Burger -->
<div class="card">
<img src="img/omletburger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Omlet Burger</h5>
  <p class="card-text">Our delicious omelet burger is a unique twist on the classic burger. It features a juicy beef patty topped with a fluffy omelet, melted cheese, crispy bacon, fresh lettuce, and tangy mayo. Served on a toasted brioche bun, this burger is a breakfast lover's dream come true.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:650</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Omlet Burger',650)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
       
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>
</div>
</div>

<!-- Vegie and Cheesy Burger -->

<div class="container mt-3">
<div><p class="display-4 text-center lead">Vegie & Cheesy Burgers</p></div>
<div class="card-deck">
<div class="card">
<img src="img/Cheesy Burger.jpg" alt="spicy chicken burger" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Cheesy Burger</h5>
  <p class="card-text">A delicious burger with a juicy beef patty topped with melted cheddar cheese.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:900</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Cheesy Burger',900)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
       
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>

<!-- Jumbo Cheese Burger -->
<div class="card ">
<img src="img/jumbocheeseburger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Jumbo Cheese Burger<span class="badge bg-danger blink-badge">New</span></h5>
  <p class="card-text">Indulge in our mouthwatering Jumbo Cheesy Burger that will satisfy your cravings. It features a juicy beef patty topped with layers of melted cheddar cheese, crispy bacon, fresh lettuce, ripe tomatoes, and tangy pickles. All sandwiched between a fluffy sesame seed bun.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:1100</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Jumbo Cheese Burger',1100)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
     
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>

<!-- Double Cheese Burger -->
<div class="card">
<img src="img/doublecheeseburger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Double Cheese Burger</h5>
  <p class="card-text">A mouth-watering burger with double beef patties, topped with melted cheddar and Swiss cheese.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:990</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Double Cheese Burger',990)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
       
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>

<!-- Vegie Burger -->
<div class="card">
<img src="img/VegieBurger.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Vegie Burger</h5>
  <p class="card-text">A delicious and healthy vegetarian option made with a homemade veggie patty.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:500</p>
</div>
<div class="card-footer bg-secondary">
<div id="button2"><button class="btn" id="btn-next" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Vegie Burger',500)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
  
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>




</div>
</div>
</div>
</div>

<!-- Dessrts -->
<div class="container mt-3">
    <div><p class="display-4 text-center lead">Desserts</p></div>
<div class="card-deck">
<div class="card">
<img src="img/appletarte.jpg" alt="apple tarte" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Apple Tarte<span class="badge bg-danger blink-badge">Special</span></h5>
  <p class="card-text">A delicious and classic apple tarte dessert that will satisfy your sweet tooth. Made with fresh, thinly sliced apples layered on a buttery and flaky pastry crust, and topped with a sweet glaze.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:400</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Apple Tarte',400)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
     
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<!-- Choco Brownie -->
<div class="card ">
<img src="img/chocobrownie.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Choco-Brownie</h5>
  <p class="card-text">A delicious and indulgent chocolate brownie served warm with a scoop of vanilla ice cream.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:350</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Choco-Brownie',350)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
   
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<!-- Choco Lava Cake -->

<div class="card">
<img src="img/chocolavacake.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Choco-Lava Cake</h5>
  <p class="card-text">A decadent chocolate dessert with a warm, gooey center.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:450</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Choco Lava Cake',450)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
     
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>



</div>
</div>
</div>
</div>

<!-- Soft Drinks -->

<div class="container mt-3">
    <div><p class="display-4 text-center lead">Soft-Drinks</p></div>
<div class="card-deck">
<div class="card">
<img src="img/citruslemanade.jpg" alt="citrus lemanade" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Citrus Lemanade<span class="badge bg-danger blink-badge">Special</span></h5>
  <p class="card-text">Refreshing and tangy lemonade made with freshly squeezed citrus fruits.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:280</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Citrus Lemanade',280)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
     
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>




</div>
</div>

<!-- Mojito -->
<div class="card ">
<img src="img/mojito.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Classic Cooling Mojhito</h5>
  <p class="card-text">A refreshing blend of fresh mint, lime juice, sugar, and soda water. Served over crushed ice, this classic mojito is the perfect summer drink to beat the heat.</p>
  <p class="card-text text-center" style="font-weight:bold ">Price: Rs:300</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Classic Cooling Mojhito',300)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
 
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<!-- Coke -->
<div class="card">
<img src="img/coke.jpg" alt="" class="card-img-top">
<div class="card-body">
  <h5 class="card-title text-center">Limited Edition Beverages</h5>
  <p class="card-text">Classic carbonated soft drink with a refreshing cola flavor.</p>
  <p class="card-text">Bubbly lemon-lime flavored carbonated beverage.</p>
  <p class="card-text">Fruity and fizzy orange-flavored soda.</p>

  <p class="card-text text-center" style="font-weight:bold "><small class="text-muted">Per Bottle</small> Price: Rs:120</p>
</div>
<div class="card-footer bg-secondary">
<div id="button1"><button class="btn" id="button" role="button" data-toggle="modal" data-target="#orderModal"onclick="openOrderModal('Coke',120)">Order Now</button></div>
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orderModalLabel">Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="burgername">Burger Name:</label>
            <input type="text" class="form-control" id="burgername"  >
          <label for="quantity">Quantity:</label>
          <input type="number" class="form-control" id="quantity" value="1">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price:</label>
          <input type="text" class="form-control" id="unitPrice"  >
        </div>
      
        <div class="form-group">
          <label for="totalPrice">Total Price:</label>
          <input type="text" class="form-control" id="totalPrice" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="calculateTotalPrice()">Place Order</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="funtions.js"></script>
  </body>
</html>


<?php

include 'footer.php';

?>