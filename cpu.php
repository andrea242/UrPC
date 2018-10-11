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
			  <li><a href= "cpu.php">Shop</a></li>
        <li><a href= "newsletter.php">Contact</a></li>
        <li><a href= "shopping_cart/cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="landing-text">
 <legend>I</legend>
</div>
<br>
<div class="heading"></div>
<h1 style= "color:#263d66; text-align:center"><b>Processors (CPU)</b></h1>
</div>
<br>

<div class="padding">
<div class="container">
  
  <div class="col-md-3">
      <h4>Intel Core i7-8700K Coffee Lake 6-Core 3.7 GHz</h4>
      <img src="img/cpu1.jpg" alt="CPU" id="images">
      <p class= "price">Price: €415</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Corsair Crystal 570X RGB ATX</h4>
      <img src="img/cpu2.jpg" alt="CPU" id="images">
      <p class= "price">Price: €180</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
  </div>
  <div class="col-md-3">
      <h4>Core Crystal 570X </h4>
      <img src="img/cpu3.jpg" alt="CPU" id="images">
      <p class= "price">Price: €80</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
  </div>
  <div class="col-md-3">
      <h4>G.SKILL TridentZ RGB Series 32GB DDR4</h4>
      <img src="img/cpu4.jpg" alt="CPU" id="images">
      <p class= "price">Price: €435</p>
      <button type ="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
  </div>
  
  
  
  
  </div>
  </div>

<div class="padding">
<div class="container">
  <p>
    
    <br></br>
    
  </p>
</div>
</div>

<footer>
  
</footer>


<?php include 'details-modal-cpu1.php';
      include 'details-modal-cpu2.php';
      include 'details-modal-cpu3.php';
      include 'details-modal-cpu4.php';
      include 'details-modal-cpu5.php';
      
?>
    



</body>
</html>






