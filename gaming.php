<?php

//any file where you want to interact with database, include_once 'dbc.php' 
include_once 'dbc.php';

$sql = "SELECT * FROM question"; //renamed table
$result = $mysqli->query($sql);

$questionArr = array();



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
			</li><li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
				<ul class="dropdown-menu">
					<li><a href="cpu.php">CPU</a></li>	
					<li><a href="ram.php">Ram</a></li>
					<li><a href="graphic.php">Graphic Cards</a></li>
					<li><a href="graphic.php">Power Supply</a></li>
					<li><a href="graphic.php">Storage</a></li>
				</ul>
			</li>
        <li><a href= "newsletter.php">Contact</a></li>
        <li><a href= "shopping_cart/cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="landing-text">
 <legend>I</legend>
</div>

<form class="form-horizontal" name="question-form" id="question-form" action="results.php">
<fieldset>

<br>
<!-- Form Name -->
<div class="heading"></div>
<h1 style= "color:#263d66; text-align:center"><b><u>Gaming Pc Builder</b></u></h1>
</div>
<br>


<br>
<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radioPerformance">What type of games do you regularly play?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radioPerformance-0">
      <input type="radio" name="q1" id="radioPerformance-0" value="11" checked="checked">
      Indie Gaming (Small Publisher Game Titles, Low Intensive Gaming)
    </label>
	</div>
  <div class="radio">
    <label for="radioPerformance-1">
      <input type="radio" name="q1" id="radioPerformance-1" value="12">
      Casual Gaming (General Standard Gaming Without Extra Power)
    </label>
	</div>
  <div class="radio">
    <label for="radioPerformance-2">
      <input type="radio" name="q1" id="radioPerformance-2" value="13">
      AAA Gaming (Big Titlesitle Games, High Intensive Gaming)
    </label>
	</div>
  </div>
</div>
<br>
<?php
/*
     $iter = 0;
if ($result->num_rows > 0) {
  
  
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $iter++;
      $radioNum = "radio" . $iter;
    */
        ?>
        
      

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cpuQ">What matters most to you playing games?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="cpuQ-0">
      <input type="radio" name="q2" id="cpuQ-0" value="14" checked="checked">
      Graphical Aesthetics
    </label>
	</div>
  <div class="radio">
    <label for="cpuQ-1">
      <input type="radio" name="q2" id="cpuQ-1" value="15">
      Performance Stability
    </label>
	</div>
  <div class="radio">
    <label for="cpuQ-2">
      <input type="radio" name="q2" id="cpuQ-2" value="16">
      An Even Balance of Both
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ramQ">How many applications do you generally run?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="ramQ-0">
      <input type="radio" name="q3" id="ramQ-0" value="41" checked="checked">
      Few Applications, Just What I Need
    </label>
	</div>
  <div class="radio">
    <label for="ramQ-1">
      <input type="radio" name="q3" id="ramQ-1" value="42">
      A Moderate Amount of Applications
    </label>
	</div>
  <div class="radio">
    <label for="ramQ-2">
      <input type="radio" name="q3" id="ramQ-2" value="43">
      I Like To Have Many Applications Running At Once
    </label>
	</div>
  <div class="radio">
    <label for="ramQ-3">
      <input type="radio" name="q3" id="ramQ-3" value="44">
      My Overall Build Aim is For Ultra Gaming Performance
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="hdd">Storage HDD (Hard Disk Drive)</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="hdd-0">
      <input type="radio" name="q4" id="hdd-0" value="51" checked="checked">
     500GB
    </label> 
    <label class="radio-inline" for="hdd-1">
      <input type="radio" name="q4" id="hdd-1" value="52">
      1000GB (1TB)
    </label> 
    <label class="radio-inline" for="hdd-2">
      <input type="radio" name="q4" id="hdd-2" value="53">
      2000GB (2TB)
    </label> 
    <label class="radio-inline" for="hdd-3">
      <input type="radio" name="q4" id="hdd-3" value="54">
      4000GB (4TB)
    </label> 
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="ssd">Storage SSD (Sold State Drive, Avg SSD is up to 20x Faster Than HDD)</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="ssd-1">
      <input type="radio" name="q5" id="ssd-1" value="65" checked="checked">
      None
    </label>
    <label class="radio-inline" for="ssd-1">
      <input type="radio" name="q5" id="ssd-2" value="61">
      128GB
    </label> 
    <label class="radio-inline" for="ssd-2">
      <input type="radio" name="q5" id="ssd-3" value="62">
      256GB
    </label> 
    <label class="radio-inline" for="ssd-3">
      <input type="radio" name="q5" id="ssd-4" value="63">
      500GB
    </label> 
    <label class="radio-inline" for="ssd-4">
      <input type="radio" name="q5" id="ssd-5" value="64">
      1000GB (TB)
    </label>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="op">Operating System</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="op-0">
      <input type="radio" name="q6" id="op-0" value="71" checked="checked">
      Windows 10
    </label>
	</div>
  <div class="radio">
    <label for="op-1">
      <input type="radio" name="q6" id="op-1" value="72">
      Windows 7
    </label>
	</div>
  <div class="radio">
    <label for="op-2">
      <input type="radio" name="q6" id="op-2" value="73">
      Linux
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="accessories">Extra Modifications</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="accessories-0">
      <input type="radio" name="q7" id="accessories-0" value="81" checked="checked">
      Internal Lighting
    </label>
	</div>
  <div class="radio">
    <label for="accessories-1">
      <input type="radio" name="q7" id="accessories-1" value="82">
      Water Cooling
    </label>
	</div>
  <div class="radio">
    <label for="accessories-2">
      <input type="radio" name="q7" id="accessories-2" value="83">
      Blue Ray Drive
    </label>
	</div>
	<div class="radio">
    <label for="accessories-2">
      <input type="radio" name="q7" id="accessories-2" value="none">
      None
    </label>
	</div>
  </div>
</div>
<br>
        
        <?php
        /*
    }
} else {
    
    echo "0 results";
}
*/
?>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Are you finished? Hit Submit to see your results!</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
<br>

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



