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
    <h1>How can we improve?</h1>
    <form>
<ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" /></li>
    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" placeholder="Email" />
    </li>
    <li>
        <label>Your Message<span class="required">*</span></label>
        <input type="message" name="field4" class="field-long" placeholder="Message" />
    </li>
    <li>
        <label>Message Details</label>
        <select name="field4" class="field-select">
        <option value="Advertise">Complaint</option>
        <option value="Partnership">Question</option>
        </select>
    </li>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>
  </div>
</div>
<br>
<div class="padding">
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <h2>Keep up to date</h2>
      <p style="font-size:155%;">URPC team keeps our system up to date with all the new technologies released on the market. Connect with us on all social media plantforms by simply clicking the icons below to keep up to date with new pc releases. The team regularly writes blogs on new components released from Invidia, Intel, AMD and more, If you would like to take a sneak peak at whats new in the technology world sign up to our newsletter.</p>
  </div>
    <div class="col-sm-6">
      <img src="img/media2.jpg">
    </div>
  </div>
</div>
</div>
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