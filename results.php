<?php

//any file where you want to interact with database, include_once 'dbc.php' 
include_once 'dbc.php';

$sql = "SELECT * FROM question"; 
$result = $mysqli->query($sql);

$questionArr = array();

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$msg = false;

if(strpos($url, "too_high")){
  $msg = true;
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>ITP Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <a class="nav-brand" href="index.php"><img src="img/logo2.png">
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

<br>

<!-- Form Name -->
<div class="landing-text">
 <legend>Builder</legend>
</div>

<div class="heading"></div>
<h1 style= "color:#263d66; text-align:center"><b><u>Here Are Your Results!</b></u></h1>
</div>
<br>
<div class="container">
  <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php if($msg!==false){
        echo "<h4><b>Price too high in comparison to budget</b></h4>";
        exit();
      }
      else{
        echo "<h4><b>Components : </b></h4>";
      }
      ?>
     
   </div>
    <div class="col-sm-6">
     <h4><b>Price in Euro : </b></h4>
    </div>
  </div>
   
  
  <div class="row">
    <br><br>
    
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
 
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q1"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>Graphics Card:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q1"]; 
      $result = $mysqli->query($sql);
      $price1 = "";
       while ($row = $result->fetch_assoc()){
    	  $price1 = substr($row['price'], 1);
      }
   $price1 = (float)$price1;
      echo $price1;
      ?>
      </p>
    </div>
  </div>
  
  
  <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q2"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>Processor:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q2"]; 
      $result = $mysqli->query($sql);
      $price2 = "";
       while ($row = $result->fetch_assoc()){
    	  $price2 = substr($row['price'], 1);
      }
   $price2 = (float)$price2;
      
      echo $price2;
      ?>
      </p>
    </div>
  </div>
   
   
   
   <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q3"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>Ram:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q3"]; 
      $result = $mysqli->query($sql);
      $price3 = "";
       while ($row = $result->fetch_assoc()){
    	  $price3 = substr($row['price'], 1);
      }
   $price3= (float)$price3;
      echo $price3;
      ?>
      </p>
    </div>
  </div>
   
   
   
   <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q4"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>HDD Storage:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q4"]; 
      $result = $mysqli->query($sql);
      $price4 = "";
       while ($row = $result->fetch_assoc()){
    	  $price4 = substr($row['price'], 1);
      }
   $price4 = (float)$price4;
      echo $price4;
      ?>
      </p>
    </div>
  </div>
   
   
   
   <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q5"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>SSD Storage:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q5"]; 
      $result = $mysqli->query($sql);
      $price5 = "";
       while ($row = $result->fetch_assoc()){
    	  $price5 = substr($row['price'], 1);
      }
   $price5 = (float)$price5;
      echo $price5;
      ?>
      </p>
    </div>
  </div>
   
   
   
   <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php 
      
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q6"]; 
      $result = $mysqli->query($sql);
      $name = "";
       while ($row = $result->fetch_assoc()){
    	  $name = $row['name'];
      }
      echo '<strong>Operating System:</strong> '.$name;
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $sql = "SELECT * FROM component WHERE component_id=".$_GET["q6"]; 
      $result = $mysqli->query($sql);
      $price6 = "";
       while ($row = $result->fetch_assoc()){
    	  $price6 = substr($row['price'], 1);
      }
   $price6 = (float)$price6;
      echo $price6;
      ?>
      </p>
    </div>
  </div>
   
   
   
   <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <?php 
      $name  = "";
      if($_GET["q7"]==="none"){
        $name = "none";
      }else{
        $sql = "SELECT * FROM component WHERE component_id=".$_GET["q7"]; 
        $result = $mysqli->query($sql);
     
         while ($row = $result->fetch_assoc()){
      	  $name = $row['name'];
        }
        
      }
      echo '<strong>Extra Accessories:</strong> '.$name;
     
      ?>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php
      $price7  = "";
      if($_GET["q7"]==="none"){
        $price7 = "none";
      }else{
        
         $sql = "SELECT * FROM component WHERE component_id=".$_GET["q7"]; 
        $result = $mysqli->query($sql);
        $price7 = "";
         while ($row = $result->fetch_assoc()){
      	  $price7 = substr($row['price'], 1);
        }
        
      }
      $price7 = (float)$price7;
      echo $price7;
      ?>
      </p>
    </div>
  </div>
  
  
  <div class="row">
    <br><br>
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <b>Total Price:</b>
   </div>
    <div class="col-sm-6">
      <p>&euro;
      <?php $total = $price1 + $price2 + $price3 + $price4 + $price5 + $price6 + $price7;
      echo $total;
      ?>
      </p>
    </div>
  </div>
  
  
    <div class="row">
    <br><br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
      
     </div>
    <div class="col-sm-3">
    </div>
  </div>
  </div>

<form class="form-horizontal" name="results-form" id="results-form" action="payment.php">
<fieldset>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="op"></label>
  <div class="col-md-4">
  <div class="radio">
    <label for="op-0">
      <input type="hidden" name="price" id="op-0" value="<?php echo $total ?>" checked="checked">
   
    </label>
	</div>
 
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Are you finished? Hit Submit to see your results!</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
    <br><br>
  </div>
</div>
<footer class="foot text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Our Contact Info Here</h3>
      <h5 style= "color:#FFF;"><b>info@urpc.com</h5>
    </div>
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Connect With Us</h3>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-google"></a>
      <a href="#" class="fa fa-instagram"></a>
    </div>
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Sign up to our Newsletter  </h3>
      <button type="button" color = "#263d66">Click Me!</button>
    </div>
  </div>
</footer>
</body>
</html>
