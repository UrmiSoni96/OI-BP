<?php
include './Database/Controler.php';
if(isset($_SESSION["id"]))
{
    include './inc/Header3.php';
}
 else 
{
    include './inc/Header2.php';
}

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    
    <!-- Header Carousel -->
    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:5%; ">
            <div class="col-lg-12" >
                <br>
                <center> <h1  style="align-content: center;color: #F05F40;font-family: serif; font-weight: bold; ">We have got what you need.</h1></center>
                <hr style="border-color:#F05F40;border-width:3px;max-width:50px;">
            </div>
        </div>
                        <br>
        <section>
        <!-- Marketing Icons Section -->
        <div class="row">
           <!-- <div class="col-md-6">
                <img class="img-responsive" src="img-lpg/ipad.png" alt="">
            </div>-->
           <div  style="background-color:#F05F40; color: white">
               <div class="container" style="font-size: 25px; font-family: Garamond"> 
                   <br><center>
                       <p> 
                       <i class="fa fa-fw fa-book" style="font-size: 20px;color:white;margin-left: 50px;"></i>
                       Online innovators and business portal has Everything you need to <br style="line-break: 1">  
                get your way to running up or start your business.
                <br><br>
               <i class="fa fa-fw fa-book" style="font-size: 20px;color:white;margin-left: 50px;"></i>
                Our mission is to aware of the needs of our customers <br>and have designed our entire business according to it. 
                <br><br>
           <center>
               <a href="#services" class=" btn btn-default  sr-button" data-sr-id="6" style="color:#F05F40 ;font-weight: bolder;font-size: 22px; font-family: Garamond;border: 2px; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: all 0.35s ease 0s, -webkit-transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; transition: all 0.35s ease 0s, transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; ">Get Started!</a>
           </center>
                       <br>
                       <p></p>
                   </center>
            </div>
           </div>
           
            
           
        </div>
        <!-- /.row -->
        </section>
        <section id="services">
            <div class="row" style="margin-top:5%; ">
            <div class="col-lg-12" >
                <br><br><br><br><br><br>
                <center> <h1  style="font-size: 32px ;align-content: center;color: black;font-family: serif; font-weight: bold; ">Our Services.</h1></center>
                <hr style="border-color:black;border-width:3px;max-width:50px;">
            </div>
        </div>
<!--Service1-->
<br><br>
            <div class="col-md-4">
            <!-- heading part-->
            <div class="panel-heading">
                <i class="fa fa-fw fa-book" style="font-size: 40px;color:#F05F40;margin-left: 50px;"></i>
                <h4 style="font-size: 25px; font-weight: bold;color: black">Innovations.</h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px;" >
          
                <p>We are providing best business solutions by which are professional and innovative.</p>
            </div>
        </div>
            
           <!--Service2-->
        <div class="col-md-4">
            <!-- heading part-->
            <div class="panel-heading">
                <i class="fa fa-fw fa-book" style="font-size: 40px;color:#F05F40;margin-left: 50px;"></i>
                <h4 style="font-size: 25px; font-weight: bold;color: black">Customer services. </h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px;" >
          
                <p>We are providing customer care and  securities for sensitive information and fraudulence.</p>
            </div>
        </div>        
           <!--Service3-->
                   <div class="col-md-4">  
            <!-- heading part-->
            <div class="panel-heading">
                <i class="fa fa-fw fa-book" style="font-size: 40px;color:#F05F40;margin-left: 50px;"></i>
                <h4 style="font-size: 25px; font-weight: bold;color: black">Communication.</h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px;" >
          
                <p>We are providing communication link between customers and innovators to ask for any information which is providing by that particular person.   .</p>
            </div>
                   </div>
        </section>
        
                        <!--core values-->
                        <section>
        <div class="row" style="margin-top:5%; ">
            <div class="col-lg-12" >
                <br>
                <center> <h1  style="font-size: 32px ;align-content: center;color: black;font-family: serif; font-weight: bold; ">Core Values.</h1></center>
                <hr style="border-color:black;border-width:3px;max-width:50px;">
            </div>
        </div>
        <center>
        <div class="container">
            <div class="panel-heading">
                <h4 style="font-size: 25px; font-weight: bold;color: #F05F40">Customer First.</h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px; " >
            Putting customer first when taking decisions.<br>We don't invest in things that don't matter to customers.
            </div>              
                                
        </div>
        </center>

  <center>
        <div class="container">
            <div class="panel-heading">
                <h4 style="font-size: 25px; font-weight: bold;color: #F05F40">Execution.</h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px; " >
            Managing by facts, cross functional working,<br> end-to-end ownership and speed or timely action.
            </div>              
                                
        </div>
        </center>
                            
     <center>
        <div class="container">
            <div class="panel-heading">
                <h4 style="font-size: 25px; font-weight: bold;color: #F05F40"> Availableness </h4>
            </div>
                
            <!--body part-->
            <div class="panel-body " style="color:#333333; font-family:Garamond;font-size: 20px; " >
            We are available whenever you need us.<br>We can help you to solve your all queries according to your business.
            </div>              
                                
        </div>
        </center>



                        </section>
                        
                        <!-- Call to Action Section -->
       
        
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
