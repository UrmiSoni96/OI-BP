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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Online Innovators & Business Portal</title>
    <!-- LPG -->
    <link href="css/menu_css.css" rel="stylesheet">
    <link href="css-lpg/bootstrap.min.css" rel="stylesheet">

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
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      
  <center>
      
      <section style="width:800px;" >
      
          <section class="wrapper" style="height:500px;margin-top:90px;background-image: url('img/ipad - Copy.png');background-size: 100% 100%;background-repeat: no-repeat">
              <div class="pager">
               <h1 style="color:black;margin-top: 12%;">Contact Details</h1> 
              </div>  
              <!-- INLINE FORM ELELEMNTS -->
              <center>
                  
              <div class="col-md-13"style="color: black; font-size: 24px;margin-top:10%; " >
                
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (+91) 9898659253</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="#">oibportal98@gmail.com</a>
                </p>
                <br>
                
            </div>
             </center>          
            </section>
      </section>
    	
        <?php
            include './inc/footer.php';
      ?>

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
    

</center>
  </body>
</html>
