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
    <script type="text/javascript">
        function sndmsg(iid)
         {
            //var i=id;
            $.ajax({
	type: "GET",
                   url:"snd_msg.php",
	data:"iid= "+iid,
	success:function(result)
	{
		$("#msg").html(result);
                                       document.getElementById("message").focus();
	}				
             });
       
        }
    </script>
</head>

<body>
    <!-- Navigation -->
    
    <!-- Header Carousel -->
    <!-- Page Content -->
    
    <div class="container" style="height:700px;margin-left:180px;;margin-top: 6%;background-image: url('img/dog - Copy.png');background-size: 85% 100%;background-repeat: no-repeat">
        <div class="row" style="margin-top:10%;">
            <div class="col-md-6">
             
             <?php if(isset($det)){ ?>
            <img  src="<?php if(isset($det->image)) {echo "upload_img/$det->image"; }?>" class="img-circle" style="margin-left:20%;border:10px solid #cccccc;" width="210" height="210">
            
            
            </div>
            
            <div class="col-md-6">
             
                <h3 style="margin-left:-10%;"><p><b>Name :&nbsp;&nbsp;</b><?php echo $det->name; ?></h3>
                <h3 style="margin-left:-10%;"><p><b>Email :&nbsp;&nbsp;</b><?php echo $det->email; ?></h3>
                <h3 style="margin-left:-10%;"><p><b>Company :&nbsp;&nbsp;</b><?php echo $det->company; ?></h3>
                <h3 style="margin-left:-10%;"><p><b>Designation :&nbsp;&nbsp;</b><?php echo $det->designation; ?></h3>
                
            </div>
             <!--<?php //if($_SESSION["actp"]=='b'){?>
             <a href="#" onclick="return sndmsg(<?php //echo $d->idea_id; ?>);"><i class="fa fa-fw fa-envelope-square" style="color: #ffcc00;font-size:30pt;margin-top:3%;margin-left:5%;"></i></a>-->
             <?php //}
             } ?>
        </div>
                        
    </div>
    
    <div class="row" id="msg">
        
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
