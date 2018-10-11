<?php

include_once 'dbc.php';

$email = "njhu84gyt65rd@gmail.com";

$totalPrice = (float)$_GET['price'];

$totalPrice*=100; //in cents for stripe

require_once('stripe/stripe/init.php');

$stripe = array(
  "secret_key"      => "sk_test_C0td8JWqP4YCstl8kuz8HSqX",
  "publishable_key" => "pk_test_xKrs9hAgnBnmDEJ77PbnAA3j"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);





if(isset($_POST['stripeToken'])){
	$token  = $_POST['stripeToken'];

	$customer = \Stripe\Customer::create(array(
	      'email' => $email,
	      'source'  => $token
	  ));

	  $charge = \Stripe\Charge::create(array(
	      'customer' => $customer->id,
	      'amount'   => $totalPrice,
	      'currency' => 'eur'
	  ));



/*
	$statement = $conn->prepare("INSERT INTO payment (bus_ref, stu_ref, total_amount, stu_amount, studevs_cut) VALUES (?, ?, ?, ?, ?)");

	$statement->bind_param("sssss", $pr1, $pr2, $pr3, $pr4, $pr5);

	$pr1 = $busRef;
	$pr2 = $stuRef;
	$pr3 = $price;
	$pr4 = $studentReceive;
	$pr5 = $studevsCut;

	$statement->execute();

	$respay = $conn->query($statement);

	$s1 = $conn->prepare("UPDATE student SET bus_proj=NULL WHERE acc_ref=?");
	$s1->bind_param("s", $p1); //this must be "s" !
	$p1 = $stuRef;
	$s1->execute();
	$r1 = $conn->query($s1);

	$s2 = $conn->prepare("UPDATE business SET stu_proj=NULL WHERE acc_ref=?");
	$s2->bind_param("s", $p2); //this must be "s" !
	$p2 = $busRef;
	$s2->execute();
	$r2 = $conn->query($s2);

	$_SESSION['busRef'] = NULL;
	$_SESSION['stuRef'] = NULL;


	$s3 = $conn->prepare("DELETE FROM project WHERE project_id=?");
	$s3->bind_param("s", $p3); //this must be "s" !
	$p3 = $projId;
	$s3->execute();
	$r3 = $conn->query($s3);

  

*/

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>URPC</title>
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

<div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
<div class="container">
  	<div class="row margin-top-60">
					<div class="col-xs-4"></div>
					<div class="col-xs-4">
					  <h3>Total Price &euro;<?php echo $totalPrice/100; ?> </h3><br>
					<form action="index.php?transaction_complete" method="post">
					  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			  		        data-key="<?php echo $stripe['publishable_key']; ?>"
			  		        data-currency="eur" 
			   		       data-description="<?php echo 'Payment for components'; ?>"
			   		       data-amount="<?php echo $totalPrice; ?>"
			  		        data-locale="auto">        
					  </script>
					</form>
					</div>
					<div class="col-xs-4"></div>
				</div>
</div>



<div>
  <br><br><br><br><br><br><br><br><br><br><br><br>
  </div>
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
<br>
<br>
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