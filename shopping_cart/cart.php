<?php
session_start();
$product_ids = array();
//session_destroy();



if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        $count = count($_SESSION['shopping_cart']);
        $product_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if(!in_array(filter_input(INPUT_GET, 'id'))){
             $_SESSION['shopping_cart'][$count] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
            );
            
        }
        else{
            for($i = 0; $i < count($products_ids); $i++){
                if ($product_ids[$i] == filter_input(INPUT_GET, 'id')){
                    $_SESSION['shopping_cart'][$i]['quantity']+= filter_input(INPUT_POST, 'quantity');
                }
            }
        }
    }
    else {
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
            );
    }
}
//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart</title>
        <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link rel= "stylesheet" href="cart.css"/>
         <link rel= "stylesheet" href="../style.css"/>
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
					<li><a href="../business.php">Business</a></li>	
					<li><a href="../gaming.php">Gaming</a></li>
					<li><a href="../general.php">General</a></li>
				</ul>
			</li>
				
			  <li><a href= "../cpu.php">Shop</a></li>
        <li><a href= "../newsletter.php">Contact</a></li>
        <li><a href= "cart.php">Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
 <br><br> <br><br> <br><br>
        <div class= "container">
            
            <?php

$connect = mysqli_connect('localhost', 'root', '', 'c9');
$query = 'SELECT * FROM products ORDER by id ASC';
$result = mysqli_query($connect, $query);

if ($result):
    if(mysqli_num_rows($result)>0):
        while($product = mysqli_fetch_assoc($result)):
            //print_r($product);
            ?>
            <div class= "col-sm-4 col-md-3">
                <form method="post" action="cart.php?action=add&id=<?php echo $product['id'];?>">
                    <div class= "products">
                        <img src="<?php echo $product['image']; ?>" class="img-responsive"/>
                        <h4 class="text-info"><?php echo $product['name']; ?></h4>
                        <h4>$ <?php echo $product['price']; ?></h4>
                        <input type="text" name="name" class="form-control" value="1"/>
                        <input type="hidden" name="name" value="<?php echo $product['name'];?>"/>
                        <input type="hidden" name="price" value="<?php echo $product['price'];?>"/>
                        <input type="submit" name="add_to_cart" class="btn btn-info" style="margin-top:5px;" value="Add to Cart"/>
                        
                        
                    </div>
                    </form>
            </div>
            <?php
            endwhile;
            endif;
            endif;
        
?>
<div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $product): 
        ?>  
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['quantity']; ?></td>  
           <td>$ <?php echo $product['price']; ?></td>  
           <td>$ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">$ <?php echo $total; ?></td>  
             <td></td>  
        </tr>  
        <?php
        $paymenturl = "../payment.php?budgetprice=1000000&price=";
        ?>
        
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="../payment.php" class="button">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div>
        </div>
        
        
        
           
    </body>
    
</html>

