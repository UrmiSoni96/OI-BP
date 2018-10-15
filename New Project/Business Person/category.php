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
                <h1 class="page-header"><?php if(isset($srow)) echo $srow->s_name;?>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Project One 
        
        -->
        <!-- Pagination -->
        <!-- /.row -->

        
        
        <?php if(isset($cdata)){foreach($cdata as $d) {?>
        <div class="row">
            <div class="col-md-5">
                <img class="img-responsive img-hover" src="<?php if(isset($d->image)) {echo "idea_dp/$d->image"; } else echo "";?>" width="350" style="border:2px black solid;">
                
            </div>
            <div class="col-md-7">
                <h2 style="border: 2px #331400 solid;padding: 13px 13px 13px 13px;box-shadow: 3px 3px 3px 3px rgba(51,20,0,255);"><?php echo $d->title;?></h2>
                
                <div class="row" style="clear:both;">
                     <?php foreach($idata as $d1){ if($d1->innovator_id==$d->innovator_id){?>   
                    <a href="inn_pf.php?inpf=<?php echo $d->innovator_id; ?>"><img src="upload_img/<?php echo $d1->image;?>" width="40" class="img-circle" style="float:right;margin-right:25%;margin-top:1%;"></a>
                    <p style="float:right;font-size:13pt;color: #000000;margin-right:-200px;margin-left:2px;"><?php echo "By"."<br>".$d1->name; ?>
                     <?php break; }} ?>
                    <p><h4 style="float:right;font-weight: bold;color:red;margin-top:1%;margin-left:78%;"><i class="fa fa-fw fa-rupee"></i><?php echo $d->price;?></h4>
                </div>
                
                <pre  style="font-family: arial;font-size:11pt;background-color: transparent;border-color: transparent;"><?php echo $d->overview;?></pre>
                <p><a href="shoppingcart.php?idea_id=<?php echo $d->idea_id; ?>" class="btn btn-info" style="float:right;font-weight: bold;color:#331400;font-size:12pt;margin-top: 10px;">Know More</a>
                    
                    <!--  Icons -->
                    <a href="#" onclick="return like(<?php echo $d->idea_id; ?>);"><b id="lk"><i id="<?php echo $d->idea_id; ?>" class="fa fa-fw fa-heart" style="font-size:30pt;color:
                       <?php
                       if(isset($cdata1)){
                       foreach($cdata1 as $c)
                       {
                                if($_SESSION["actp"]=='b')
                                {
                                    if($c->user_id==$_SESSION["id"])
                                    {
                                        if($c->idea_id==$d->idea_id){
                                        echo "red";}
                                        else{
                                        echo "#ff6666";}
                                    }
                                    else {
                                        echo "#ff6666";
                                    }
                                }
                                else
                                {
                                    if($c->innovator_id==$_SESSION["id"])
                                    {
                                      if($c->idea_id==$d->idea_id){
                                      echo "red";}
                                        else{
                                        echo "#ff6666";}
                                    }
                                    else {
                                        echo "#ff6666";
                                    }
                                }
                        }

                                    }
                        else
                            echo "#ff6666";
                        ?>;float:left;"></i></b></a>
                     <a href="#" onclick="return getcmnt(<?php echo $d->idea_id; ?>);"><i class="fa fa-fw fa-comment" style="color:#000000;float:left;font-size:30pt;"></i></a>
                    <?php if($_SESSION["actp"]=='b'){?>
                    <a href="#" onclick="return sndmsg(<?php echo $d->idea_id; ?>);"><i class="fa fa-fw fa-envelope-square" style="color: #ffcc00;float:left;font-size:30pt;"></i></a>
                    <?php } ?>  
                <p><h5><a href="#" onclick="return getAllCmnt(<?php echo $d->idea_id; ?>);"style="color:blue;float:right;font-weight: bold;margin-top:3%;margin-left: 78%;"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;View Comments</a></h5>
                <!--  Icons -->
                
            </div>
        </div>
        <div class="row" id="allcmnt">
            
        </div>
        
        <!-- /.row -->

        <hr>
        <?php }}?>
        <!-- Project Two -->
        
        <div class="row" id="cmnt">
            
        </div>
        

    </div>
    
    <div class="row" id="msg">
        
    </div>
        <!-- Footer -->
       <?php
   include_once  './inc/footer.php';
       ?>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
