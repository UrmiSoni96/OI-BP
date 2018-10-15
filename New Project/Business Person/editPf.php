<?php
     include './Database/Controler.php';
    include './inc/Header3.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Online innovators and Business portal</title>

    <!-- Bootstrap core CSS use of aasets folder-->
      <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    
    
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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">
    
    function check()
    {
        var cnt=0;
        
        var fnm=document.getElementById("firstname").value;
        var fnm1=/^[a-zA-Z]{3,30}$/;
        if(fnm=='')
        {
            document.getElementById("e1").innerHTML="*";
            document.getElementById("e1").style.color='red';
            cnt++;
        }
        else if(!fnm1.test(fnm))
        {
            document.getElementById("e1").innerHTML="Invalid Firstname";
            document.getElementById("e1").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e1").innerHTML="";
        }
        
        var lnm=document.getElementById("lastname").value;
        var lnm1=/^[a-zA-Z]{3,30}$/;
        if(lnm=='')
        {
            document.getElementById("e2").innerHTML="*";
            document.getElementById("e2").style.color='red';
            cnt++;
        }
        else if(!lnm1.test(lnm))
        {
            document.getElementById("e2").innerHTML="Invalid Lastname";
            document.getElementById("e2").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e2").innerHTML="";
        }
        
        /*var adrs=document.getElementById("address").value;
        var adrs1=/^[a-zA-Z0-9]{20,200}$/;
        
        if(adrs=="")
        {
            document.getElementById("e3").innerHTML="*";
            document.getElementById("e3").style.color='red';
            cnt++;
        }
        else if(!adrs1.test(adrs))
        {
            document.getElementById("e3").innerHTML="Invalid Address";
            document.getElementById("e3").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e3").innerHTML="";
        }*/
        
        var cont=document.getElementById("cnt").value;
        var cont1=/^[0-9+()]{12,15}$/;
        if(cont=='')
        {
            document.getElementById("e4").innerHTML="*";
            document.getElementById("e4").style.color='red';
            cnt++;
        }
        else if(!cont1.test(cont))
        {
            document.getElementById("e4").innerHTML="Invalid Contact No";
            document.getElementById("e4").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e4").innerHTML="";
        }
        
        
        var em=document.getElementById("email").value;
        var em1=/^[a-zA-Z0-9._]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
        if(em=="")
        {
            document.getElementById("e9").innerHTML="*";
            document.getElementById("e9").style.color='red';
            cnt++;
        }
        else if(!em1.test(em))
        {
            document.getElementById("e9").innerHTML="Invalid Email";
            document.getElementById("e9").style.color='red';
            cnt++;
        }
        else
        {
            document.getElementById("e9").innerHTML="";
        }
        
        if(cnt>0)
        {
            return false;
        }
    }
    </script>
  </head>

  <body>
      
      <!-- Navigation -->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
  <center>
      
      <section style="width:800px;margin-top:5%;"align='center' >
          <section class="wrapper">
              
                <h1 style="color:whitesmoke">Edit Profile</h1>
                
                <br>
                
                
      <hr class="intro-divider" >
              <!-- INLINE FORM ELELEMNTS -->

              <div >
              <div class="row mt">
          		
                  <div class="form-panel" style="background-color: #c7ad88;"> <!-- for white bg -->
               
                                <form method="post" role="form"  class="form-horizontal tasi-form" onsubmit="return check()" enctype="multipart/form-data">
                          <br>
                          <div class="form-group " style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2 " for="inputSuccess">Profile:</label>
                                  <div class="col-lg-5">
                                      <img class="img-circle" src="<?php echo "upload_img/$row->image"; ?>" height="150" width="150" style="border:5px solid #f1f1f1;margin-bottom:5px;">
                                      <input type="file" class="form-control" id="pfpc" name="pfpc">
                                  </div>
                              </div>
                          
                          <div class="form-group " style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2 " for="inputSuccess">First Name:</label>
                                  <div class="col-lg-5">
                                      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter first name" value="<?php echo $d[0]; ?>">
                                      <b id="e1"></b>
                                  </div>
                              </div>
                          
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Last Name:</label>
                                  <div class="col-lg-5">
                                     <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" value="<?php echo $d[1]; ?>">
                                     <b id="e2"></b>
                                  </div> 
                          </div>
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Address:</label>
                                  <div class="col-lg-5">
                                      <textarea class="form-control" id="address" name="address" rows="5"><?php echo $row->address; ?></textarea>
                                      <b id="e3"></b>
                                  </div> 
                          </div>
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Country:</label>
                                  <div class="col-lg-5">
                                      <select class="form-control" id="country" name="country" style="">
                                          
                                          <?php foreach($cntrm as $c){
                                              if($row->country_id==$c->country_id) 
                                              {
                                               ?>   
                                          <option value="<?php echo $c->country_id; ?>"selected="selected"><?php echo $c->country_name; ?></option>
                                          
                                              <?php }}?>
                                      </select>    
                                  </div> 
                          </div>
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Contact no:</label>
                                  <div class="col-lg-5">
                                      <input type="text" class="form-control" id="cnt" name="cnt" value="<?php echo $row->contact_no; ?>">
                                      <b id="e4"></b>
                                  </div> 
                          </div>
                          
                          	
                
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess" >Qualification:</label>
                                  <div class="col-lg-5">
                                      <textarea class="form-control" id="qualification" name="qualification"><?php echo $row->qualification; ?></textarea>
                                      
                                  </div> 
                          </div>
                          
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Company:</label>
                                  <div class="col-lg-5">
                                     <input type="text" class="form-control" id="company" name="company" value="<?php echo $row->company; ?>">
                                     
                                  </div> 
                          </div>
                          
                          <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess" >Experience:</label>
                                  <div class="col-lg-5">
                                      <textarea class="form-control" id="experience" name="experience"><?php echo $row->experience; ?></textarea>
                                      
                                  </div> 
                          </div>
                          
                           <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">Designation:</label>
                                  <div class="col-lg-5">
                                     <input type="text" class="form-control" id="designation" name="designation" value="<?php echo $row->designation; ?>">
                                     
                                  </div> 
                          </div>
                          
                           <div class="form-group" style="margin-left:200px;">
                              <label class="col-md-3 control-label col-sm-2" for="inputSuccess">E-Mail:</label>
                                  <div class="col-lg-5">
                                     <input type="email" class="form-control" id="email" name="email" value="<?php echo $row->email; ?>">
                                     <b id="e9"></b>
                                  </div> 
                          </div>
                          
                        
                          
                          <button type="submit" id="submit" name="E_submit" value="submit" class="btn btn-theme" style="background-color: #c43235">Save</button>
                          
                      </form>
                            
                            </div><!-- /form-panel -->
          	</div><!-- /col-lg-12 -->
              
          </div><!-- /row -->
                        
                       	
	</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->
      
      
      <!-- Footer -->
        

    
    <?php
    include './inc/footer.php';
    ?>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
 

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/intro-bg.jpg", {speed: 500});
    </script>

</center>
  </body>
</html>
