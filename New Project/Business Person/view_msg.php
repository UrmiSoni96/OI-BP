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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        td
        {
            padding: 8px 8px 8px 8px;
        }
        .hdr
        {
            background-image: url(img/bg.jpg);
            color:whitesmoke;
            font-weight:bold;
            height:20%;
        }
    </style>
    <script>
        function sndmsg(iid)
         {
         //var i=id;
         alert("Hello");
         $.ajax({
	type: "GET",
                   url:"rply_msg.php",
	data:"rid= "+iid,
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
    
    <div class="container">
        <div class="row" style="margin-top: 5%;">
            <h2 style="text-align: center;">Received Messages</h2>
            <table align="center" width="100%" height="50%" style="text-align: center;border:3px #331400 solid;">
            <tr class="hdr">
                <td>Date</td>
                <td>Name</td>
                <td>Message</td>
                <td>Action</td>
            </tr>
            <?php if(isset($allmsg)) {foreach ($allmsg as $a){ if($a->sender!=$_SESSION["actp"]) {?>
            <tr>
                <td><?php echo $a->date; ?></td>
                <td><?php echo $a->name; ?></td>
                <td><pre style="background-color: transparent;border-color: transparent;font-family: arial;font-size: 12pt;"><?php echo $a->message; ?></pre></td>
                <td><a href="#" class="btn btn-primary" onclick="return sndmsg(<?php if($_SESSION["actp"]=='b'){ echo $a->innovator_id; }else {echo $a->user_id; } ?>);">Reply</a>
                <a href="#?dm=<?php echo $a->msg_id; ?>" class="btn btn-danger">Delete</a>
                    </td>
            </tr>
            <?php }}?>
            <?php } else { ?>
            <tr>
                <td colspan="4">0 Messages Received</td>
            </tr>
            <?php } ?>
            </table>
        </div>
       <div class="row" style="margin-top: 5%;">
        <h2 style="text-align: center;">Sent Messages</h2>
            <table align="center" width="100%" height="50%" style="text-align: center;border:3px #331400 solid;">
            <tr class="hdr">
                <td>Date</td>
                <td>Name</td>
                <td>Message</td>
                <td>Action</td>
            </tr>
            <?php if(isset($allmsg1)) {foreach ($allmsg1 as $a){ if($a->sender==$_SESSION['actp']) {?>
            <tr>
                <td><?php echo $a->date; ?></td>
                <td><?php echo $a->name; ?></td>
                <td><pre style="background-color: transparent;border-color: transparent;font-family: arial;font-size: 12pt;"><?php echo $a->message; ?></pre></td>
                <td><a href="view_msg.php?dm=<?php echo $a->msg_id; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php }} ?>
            <?php } else { ?>
            <tr>
                <td colspan="4">0 Messages Sent</td>
            </tr>
            <?php } ?>
            </table>
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