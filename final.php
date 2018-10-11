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
        <li><a href= "cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="home">
  <div class="landing-text">
      <br></br>
    <h3>UrPC is Processing your ORDER!</h3>
    <h3>Thank You!</h3>
  </div>
</div>
<footer class="foot text-center">
  <div class="row">
    <div class="col-sm-4">
      <h3 style= "color:#FFF;"><b>Contact</h3>
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