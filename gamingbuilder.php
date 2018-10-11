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
      <a class="nav-brand" href="#"><img src="img/logo2.png">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href= "builder.php">Build</a></li>
        <li><a href="shop.php">Pre-Built</a></li>
        <li><a href="components.php">Components</a></li>
        <li><a href= "newsletter.php">Contact</a></li>
        <li><a href= "cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="landing-text">
 <legend>I</legend>
</div>

<form class="form-horizontal" name="question-form" action="results.php">
<fieldset>

<br>
<!-- Form Name -->
<legend>Gaming Builder</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aim">Pc Build Aim?</label>
  <div class="col-md-4">
    <select id="aim" name="aim" class="form-control">
      <option value="ansGaming">Gaming</option>
      <option value="ansBusiness">Business</option>
      <option value="ansGeneral">General</option>
    </select>
  </div>
</div>
<br>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="budgetprice">Budget Range</label>
  <div class="col-md-4">
    <select id="budgetprice" name="budgetprice" class="form-control">
      <option value="500">500 Euro</option>
      <option value="1000">1000 Euro</option>
      <option value="1500+">1500+ Euro</option>
    </select>
  </div>
</div>

<br>
<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radioPerformance">Graphic's Performance</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radioPerformance-0">
      <input type="radio" name="radioPerformance" id="radioPerformance-0" value="entry" checked="checked">
      Entry Level Medium FPS Range
    </label>
	</div>
  <div class="radio">
    <label for="radioPerformance-1">
      <input type="radio" name="radioPerformance" id="radioPerformance-1" value="modest">
      Modest Medium / High FPS Range
    </label>
	</div>
  <div class="radio">
    <label for="radioPerformance-2">
      <input type="radio" name="radioPerformance" id="radioPerformance-2" value="enthusiast">
      Enthusiast Gaming High/Ultra FPS Range
    </label>
	</div>
  </div>
</div>
<br>
<?php

     $iter = 0;
if ($result->num_rows > 0) {
  
  
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $iter++;
      $radioNum = "radio" . $iter;
    
        ?>
        <!-- Multiple Radios -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="radios"><?php echo $row['QuestionID'] . ": " . $row['Question']?></label>
          <div class="col-md-4">
          <div class="radio">
            
            <label for="<?php echo $radioNum; ?>">
                     <!--in other php file::: if(value === 'Yes'){ do whatever } -->
              <input type="radio" name="<?php echo $radioNum; ?>" id="<?php echo $radioNum; ?>" value="Yes">
              Yes
            </label>
        	</div>
          <div class="radio">
            <label for="<?php echo $radioNum; ?>">
              <input type="radio" name="<?php echo $radioNum; ?>" id="<?php echo $radioNum; ?>" value="No">
              No
            </label>
        	</div>
          </div>
        </div>
        <br>
        
        <?php
        
    }
} else {
    echo "0 results";
}
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





<!--- iOS Landing Page Fix
<section>
	<div class="landing-text">
		<h1>BOOTSTRAP</h1>
		<h3>Learn the basic building blocks.</h3>
		<a href="#" class="btn btn-default btn-lg">Get Started</a>
	</div>
	<div class="home-wrap">
        <div id="home">
		</div>
    </div>
</section>
-->

<!--- iOS Fixed Image Fix
<figure>
	<div class="fixed-wrap">
        <div id="fixed">
		</div>
    </div>
</figure>
-->
