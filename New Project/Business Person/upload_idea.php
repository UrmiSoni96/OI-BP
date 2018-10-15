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

    <!-- Custom CSS -->
    <link href="css-lpg/landing-page.css" rel="stylesheet">
    <link href="css/menu_css.css" rel="stylesheet">
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
<script type="text/javascript">
    
    function getsubcat()
    {
            var ctgid= document.getElementById("ctg").value;
            $.ajax({
	type: "GET",
                   url:"sub_dropdown.php",
	data:"ctgid="+ctgid,
	success:function(result)
	{
		$("#sctg").html(result);
	}
					
					
       });
				
    }
    function check()
    {
        var cnt=0;
        var tit=document.getElementById("title").value;
        var tit1=/^[a-zA-Z0-9,- ]{10,50}$/;
        if(tit=='')
        {
            document.getElementById("e1").innerHTML="*";
            document.getElementById("e1").style.color='red';
            cnt++;
        }
        else if(!tit1.test(tit))
        {
            document.getElementById("e1").innerHTML="Invalid Title";
            document.getElementById("e1").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e1").innerHTML="";
        }
        
        var price=document.getElementById("price").value;
        var price1=/^[0-9]{3,5}$/;
        if(price=='')
        {
            document.getElementById("e2").innerHTML="*";
            document.getElementById("e2").style.color='red';
            cnt++;
         }
        else if(!price1.test(price))
        {
            document.getElementById("e2").innerHTML="Invalid Discription";
            document.getElementById("e2").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e2").innerHTML="";
        }
        
        if(cnt>0)
        {
            
            return false;
        }
    }
    </script>
</head>

<body>

    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:7%;">
            <div class="col-lg-12">
                <center>
                <h1>Upload Your Ideas Here</h1>
                </center>
            </div>
        </div>
        <!-- Marketing Icons Section -->
        
        <form method="post" role="form"  class="form-horizontal tasi-form" style="border:2px solid lightgray;margin-top:1%;background-image: url('img/IMG-20170204-WA0012 - Copy.jpg');background-size:75% 100%;" onsubmit="return check()" enctype="multipart/form-data">
        
        <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;margin-top:3%;">
        <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Category:*</label>
        <div class="col-lg-5">
            <select id="ctg" name="ctg" style="padding:5px 7px 5px 7px;" onchange="return getsubcat()">
            <option value="">--Select Category--</option>
            <?php if(isset($ctgry)){foreach($ctgry as $cg){ ?>
            <option value="<?php echo $cg->category_id; ?>"><?php echo $cg->category_name; ?></option>
            <?php }} ?>
             </select>
        </div></div>
        
         <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;margin-top:3%;">
        <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">SubCategory:*</label>
        <div class="col-lg-5">
            <select id="sctg" name="sctg" style="padding: 10px 10px 10px 10px;font-weight: bold;">
            </select>
        </div></div>    
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;margin-top:3%;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Image:*</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" id="dp" name="dp">
                        </div>
                </div>
                
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Title:*</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                            <b id="e1"></b>
                        </div>
                </div>
                
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Overview:*</label>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="4" id="ovrvw" name="ovrvw"></textarea></div>
                </div>
                
                <div class="form-group" style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Description:*</label>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="4" id="dis" name="dis"></textarea>
                         </div> 
                </div>
                
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Price:*</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price">
                            <b id="e2"></b>
                        </div>
                </div>
                
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Resources:*</label>
                        <div class="col-lg-5">
                            <input type="file" class="form-control" id="res" name="res">
                        </div>
                </div>
                
                <div class="form-group ">
                    <center>
                        <button type="submit" name="UI_Submit" value="upload" class="btn btn-primary">Upload</button>
                    </center>
                </div>
            </form>
       
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
