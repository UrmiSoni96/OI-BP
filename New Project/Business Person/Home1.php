<?php
    
    include './Database/Controler.php';
    include './inc/Header3.php';
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
    

        <!-- /.container -->
    
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill"><img src='' style="margin-left:35%;"></div>
                <div class="carousel-caption">
                    <h2 style="color: whitesmoke;">If it does not challenge it won't change...</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill"><img src='' style="margin-left:35%;"></div>
                <div class="carousel-caption">
                    <h2 style="color: whitesmoke;">Be Creative,Be Innovative</h2>
                </div>
            </div>
            
            <div class="item">
                <div class="fill"><img src='' style="margin-left:35%;"></div>
                <div class="carousel-caption">
                    <h2 style="color: whitesmoke;">Business is combination of war and sport..</h2>
                </div>
            </div>
            
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-family: Harrington;font-weight: bold;">
                    <img src="img/lg1 (2).png" height="60" width="60">
                    Online Innovators & Business Portal
                </h1>
                
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color: #331400;font-weight: bold;font-family:Footlight MT;font-size: 20pt;"><img src='img/bulb.png' width="30">&nbsp;&nbsp;Flower Shop</h4>
                    </div>
                    <div class="panel-body">
                        <img src="img/img1.jpg" height="250px" class="img-hover">
                        <p><i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star-half-empty"></i></p>
                        <a href="category.php?sgid=13" class="btn btn-default">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color: #331400;font-weight: bold;font-family:Footlight MT;font-size: 20pt;"><img src='img/bulb.png' width="30">&nbsp;&nbsp;Social Media Consultant</h4>
                    </div>
                    <div class="panel-body">
                        <img src="idea_dp/rks_software.jpg" height="250px" width="330px" class="img-hover">
                        <p><i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star-o"></i></p>
                        <a href="category.php?sgid=3" class="btn btn-default">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 style="color: #331400;font-weight: bold;font-family:Footlight MT;font-size: 20pt;"><img src='img/bulb.png' width="30">&nbsp;&nbsp;Translator</h4>
                    </div>
                    <div class="panel-body">
                        <img src="idea_dp/translator.jpg" height="250px" width="330px" class="img-hover">
                        <p><i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star"></i>
                        <i class="fa fa-fw fa-star-half-empty"></i></p>
                        <a href="category.php?sgid=4" class="btn btn-default">Know More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

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
