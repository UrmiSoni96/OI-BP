<?php
    
    include 'Database/Controler.php';
    include './inc/Header3.php';
    
    $paypalURL = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
 $paypalID = 'thakornirali13@gmail.com'; //Business Email

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Innovators & Business Portal</title>
    <!-- LPG -->
    <link href="css-lpg/bootstrap.min.css" rel="stylesheet">
    <link href="css/menu_css.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css-lpg/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-lpg/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
    <!-- End LPG -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Navigation -->
    
    <!-- First -->
    
<br><br><br><br>
     <form method="post">
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Price</th>
                  <th>Total</th>
                  <th>Actions</th>
	       </tr>
              </thead>
              <tbody>
                  <?php
                  $total = 0;
                  $cnt=1;
                  foreach($_SESSION["cart"]  as $cart)
                  {
                      $p= $cart["price"];
                      //$q= $cart["quantity"];
					  $total = $total+$cart["price"];
                      ?>
                         <tr>
                            <td><?php echo $cnt;?></td>
                            <td><?php echo $cart["title"];?></td>
                            <td><?php echo $cart["price"];?></td>
                            <td><?php echo  $p;?></td>
                            <td class="center">
                                <a class="btn btn-danger" href="shoppingcart.php?remove_cartid=<?php echo $cart["idea_id"];?>">
                                Remove
                                </a>
                             </td>
        
                </tr>	 
                      <?php
                      $cnt++;
                  }
                  
                  
                  ?>
               
          
		
                <tr><td class="center" colspan="3" align="right">
                        
             <button type='submit' name='updatecart' class="btn btn-info" value="update">Update Cart</button>
                       
                               
        </td>
        
        <th>Total Order</th>
        <td><?php echo $total;?></td>
          </tr>
        
                
				</tbody>
            </table>
           
          </form>  
		
        <form method="post" action="<?php echo $paypalURL; ?>">
       <?php
	      foreach($_SESSION['cart'] as $ca)
		  {
	   ?> 
        <input type="hidden" name="business" value="<?php echo $paypalID; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $ca['title']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $ca['idea_id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $total; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/OIBP/User/cancel.php'>
		<input type='hidden' name='return' value='http://localhost/OIBP/User/success.php'>
        
        <!-- Display the payment button. -->
          <?php
			}
     ?>
        <i style="margin-left: 85%;"><b>pay here..</b></i>
        <h3 style="margin-left: 85%;"><input type="image" name="submit" border="0"
        src="images/paypal-pay-now.png" height="50" width="100" alt="PayPal - The safer, easier way to pay online"></h3>
    </form>
 
     
     
        <!-- /.container -->
    
        <!-- Footer -->
        

    </div>
       <?php
            include './inc/footer.php';
      ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
