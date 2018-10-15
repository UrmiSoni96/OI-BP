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
        tr
        { 
                border:1px black solid;
        }
        td
        {
            padding: 8px 5px 8px 5px;
            font-size: 13pt;
        }
        pre
        {
            font-size: 13pt;
            background-color: transparent;
            border-color: transparent;
            font-family:arial;
        }
        .hdr
        {
            background-image: url(img/bg.jpg);
            color:whitesmoke;
            font-weight:bold;
            height:20%;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    
    <!-- First -->
    
    <!-- Header Carousel -->
    
    
    <!-- Page Content -->
    <div class="container">
        <div class="row" style="margin-top:5%;">
            <div class="col-lg-12">
                <h1 class="page-header">My Profile
                <?php if($_SESSION["actp"]=='i')
                    {
                    ?>
                    <a href="upload_idea.php?ui='ui'" class="btn btn-primary" style="float:right;background-color: #c43235;border-color: #c43235;">Upload Idea</a>
                    <?php }
                    else{?>
                    <a href="show_idea.php?si='si'" class="btn btn-primary" style="float:right;background-color: #c43235;border-color: #c43235;">My Idea</a>
                    <?php } ?>
                    <a href="view_msg.php?vm='vm'" class="btn btn-primary" style="float:right;background-color: #c43235;border-color: #c43235;margin-right: 2%;">View Messages</a>
                    
                </h1>
            </div>
        </div>
        <!-- Marketing Icons Section -->
        <?php if(isset($all1)){foreach ($all1 as $all) {?>
        <div class="row">
            <div class="col-md-6">
                <img class="img-circle" src="<?php if(isset($all->image)) {echo "upload_img/$all->image"; } else echo "";?>" height="250" width="250" style="border:10px solid #f1f1f1;">
                <h3 style="margin-left:50px;"><?php echo $all->name; ?></h3>
            </div>
            
            <div class="col-md-6">
                <h2>Personal Information</h2>
                <hr style="border: 1.5px solid lawngreen;">
                <h4>
                <p><b>Name :</b> <?php echo $all->name; ?></p>
                
                <p><b>Gender : </b>
                    <?php if($all->gender==0) echo 'Male'; else echo 'Female'; ?></p>
                
                <p><b>Contact No : </b><?php echo "+".$all->c_code." ".$all->contact_no; ?></p>
                <p><b>Resident : </b><pre style="border-color: transparent; margin: -41px 10px 10px 86px; background-color: transparent;font-family: arial;font-size: 18px;"><?php echo $all->address; ?></pre>
                <p><b>Country : </b><?php echo $all->country_name; ?></p>
                </h4>
                
                <h2>Professional Information</h2>
                <hr style="border: 1.5px solid lawngreen;">
                <h4>
                <p><b>Qualification : <pre style="border-color: transparent; margin: -41px 10px 10px 115px; background-color: transparent;font-family: arial;font-size: 18px;"><?php echo $all->qualification; ?></b></pre>
                
                <p><b>Working As : </b><?php echo $all->designation; ?></p>
                
                <p><b>Experience : </b><?php echo $all->experience; ?></p>
                
                <p><b>Working At :</b><?php echo $all->company; ?></p>
                
                <p><b>E-Mail : </b><?php echo $all->email; ?></p>
                </h4>
            </div>
        <?php }} ?>
            
        </div>
        
        <div class="row">
            <div class="col-md-12" style="margin-top:5%;">
                    <center>
                        <a href="editPf.php?editPf=<?php if($_SESSION["actp"]=='b') {echo $all->user_id; }else {echo $all->innovator_id; } ?>" class="btn btn-primary" style="background-color: #c43235;border-color: #c43235;"><i class="fa fa-fw fa-edit"></i>Edit</a>
                    </center>
            </div>
        </div>
        
        <?php if($_SESSION["actp"]=='i')
                    {
                        if(isset($idea)) {
                    ?>
        <div class="row">
            <div class="col-md-12" style="margin-top:5%;">
                <h3 align="center" class="page-header"><b>Uploaded Idea</b></h3>
                
                
                <table align="center"  width="100%" style="border:5px solid black;text-align: center;">
                    <tr class="hdr">
                        <td><h4><b>Sr No. </b></h4></td>
                        <td><h4><b>Title </b></h4></td>
                        <td><h4><b>Overview </b></h4></td>
                        <td colspan='2'><h4><b>Price </b></h4></td>
                    </tr>
                    
                    <?php $cnt=1; foreach($idea as $ida) { ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo $ida->title; ?></td>
                        <td><?php echo $ida->overview; ?></td>
                        <td><i class="fa fa-rupee"></i><?php echo $ida->price; ?></td>
                        <td><a href="edit_idea.php?deleteID=<?php echo $ida->idea_id; ?>"><i class="fa fa-fw fa-close"></i></a><a href="edit_idea.php?editID=<?php echo $ida->idea_id; ?>"><i class="fa fa-fw fa-edit"></i></a></td>
                    </tr>
                    <?php $cnt++; } ?>
                </table>
                    
            </div>
        </div>
                        <?php }} ?>
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
