<!DOCTYPE html>
<html>
<head>
  <title>ITP Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="nav-brand" href="#"><img src="img/logo2.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        
       <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Build PC</a>
				<ul class="dropdown-menu">
					<li><a href="business.php">Business</a></li>	
					<li><a href="gaming.php">Gaming</a></li>
					<li><a href="general.php">General</a></li>
				</ul>
			</li>
			</li><li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
				<ul class="dropdown-menu">
					<li><a href="cpu.php">CPU</a></li>	
					<li><a href="ram.php">Ram</a></li>
					<li><a href="graphic.php">Graphic Cards</a></li>
				</ul>
			</li>
        <li><a href= "newsletter.php">Contact</a></li>
        <li><a href= "cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="padding">
<div class="container">
  
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu3.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu4.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu5.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu6.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu7.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Products</h4>
      <img src="img/cpu8.jpg" alt="CPU" id="images">
      <p class= "price">Price: €100.00</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
  </div>
  
  
  
  </div>
  </div>

<div class="padding">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h4>Filler </h4>
      <p>dmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdndmfdfl;kjfdn</p>
  </div>
    <div class="col-sm-6">
      <img src="img/basic1.jpg">
    </div>
  </div>
</div>
</div>

<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3>Contact Us</h3>
      <br
      <h4>Our Contact Info Here.</h4>
    </div>
    <div class="col-sm-4">
      <h3>Connect With Us</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <h3>Sign up to our Newsletter</h3>
      <button type="button" color = "#FFFFFF">Click Me!</button>
    </div>
  </div>
</footer>

<?php include 'details-modal-cpu1.php';
      include 'details-modal-cpu2.php';
      include 'details-modal-cpu3.php';
      include 'details-modal-cpu4.php';
      include 'details-modal-cpu5.php';
      include 'details-modal-cpu6.php';
      include 'details-modal-cpu7.php';
      include 'details-modal-cpu8.php';
?>
    



</body>
</html>







