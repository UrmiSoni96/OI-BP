<?php
        include './Database/Controler.php';
        include './inc/Header1.php'; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Online innovators and busine portal</title>

    <!-- Bootstrap core CSS use of aasets folder-->
      <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
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
    <!--[endif]-->
    
    <script type="text/javascript">
    
    function check()
    {
        var cnt=0;
        
        var unm=document.getElementById("unm").value;
        var unm1=/^[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
        if(unm=='')
        {
            document.getElementById("mg").innerHTML="*";
            document.getElementById("mg").style.color='red';
            cnt++;
        }
        else if(!unm1.test(unm))
        {
            document.getElementById("mg").innerHTML="Invalid Username";
            document.getElementById("mg").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("mg").innerHTML="";
        }
        
        var pwd=document.getElementById("pwd").value;
        var pwd1=/^[a-zA-Z0-9._@$#]{3,15}$/;
        if(pwd=='')
        {
            document.getElementById("mg1").innerHTML="*";
            document.getElementById("mg1").style.color='red';
            cnt++;
        }
        else if(!pwd1.test(pwd))
        {
            document.getElementById("mg1").innerHTML="Invalid Password";
            document.getElementById("mg1").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("mg1").innerHTML="";
        }
        
        
        //alert(cnt);
        if(cnt>0)
        {
                  return false;
        }
    }
    </script>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
      <div id="login-page" style="margin-top:5%;">
             <div class="container">
	  	
                    <form class="form-login" method="post" onsubmit="return check()">
		        <h2 class="form-login-heading" style="background-color: #c43235">sign in now</h2>
		        <div class="login-wrap">
                            <input type="text" class="form-control" placeholder="User ID" autofocus id="unm" name="unm" id="unm"><b id="mg"></b>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd"><b id="mg1"></b>
                            <br>   
                            <select id="acctype" name="acctype" class="form-control">
                                          
                                          <option value="b">Business Person</option>
                                          <option value="i">Innovator</option>
                                      </select>
                            
                            <label class="checkbox">
		                
		            </label>

                            <button class="btn btn-theme btn-block" type="submit" name="L_submit" value="submit" style="background-color: #c43235"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
                                <a href="registration 1.php">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Change Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                          <button class="btn btn-theme" type="submit" id="submit" name="submit">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
                          
                         
		          <!-- modal -->
                          
		
		      </form>	  	
	  	
	  	</div>
	  </div>
      
      
      <?php
            include './inc/footer.php';
      ?>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/intro-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
