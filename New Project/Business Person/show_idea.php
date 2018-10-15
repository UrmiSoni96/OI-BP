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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script>
        function like(id)
        {
                //alert(id);
                var i=id;
                
                $.ajax({
	type: "GET",
                   url:"like.php",
	data:"lid="+i+" s= "+document.getElementById(i).style.color,
	success:function(result)
	{
		$("#").html(result);
                                       var c=result;
                                       //window.location="category.php";
                                       document.getElementById(i).style.color=c;
	}
					
					
       });
        }
        function getcmnt(id)
        {
            var i=id;
            //alert(i);
            $.ajax({
	type: "GET",
                   url:"comment.php",
	data:"iid="+i,
	success:function(result)
	{
		$("#cmnt").html(result);
                                      document.getElementById("comment").focus();
	}
					
					
       });
       
    }
    function getAllCmnt(iid)
   {
         //var i=id;
         $.ajax({
	type: "GET",
                   url:"view_comment.php",
	data:"iid= "+iid,
	success:function(result)
	{
		$("#allcmnt").html(result);
                                       //document.getElementById("allcmnt").focus();
	}					
       });
       
    }
    
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
    
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row" style="margin-top: 5%;">
            <div class="col-lg-12">
                <h1 class="page-header"><?php if(isset($sid)) { echo $sid->title; } ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <img src="<?php echo "idea_dp/".$rsrc->image;  ?>" width="350" height="350">
            </div>
            <div class="col-lg-8">
                <br>
                <h3><b>Name of The Innovator : </b><?php echo $ind->name; ?></h3>
                <br>
                <h3><b>Email ID : </b><?php echo $ind->email; ?></h3>
                <br>
                <h3><b>Price : </b><?php echo $sid->price." "; ?><i class="fa fa-rupee"></i></h3>
                <br>
                <h3><b>Overview : </b><br><br><?php echo $sid->overview; ?></h3>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h2 class="page-header">Description : </h2>
                <h3>
                    <textarea cols="100" style="border-color: transparent;display: table"><?php echo $sid->description; ?></textarea>
                </h3>
            </div>
        </div>
        <!-- /.row -->
    </div>
        <!-- Project One 
        
        -->
        <!-- Pagination -->
        <!-- /.row -->

        
        
        <!-- Footer -->
        <div class="row" style="margin-top: 109%">
       <?php
            include  './inc/footer.php';
       ?>
        </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
