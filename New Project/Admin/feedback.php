<?php
include './controller/controller.php';
include './inc/header.php';
include './inc/sidebar.php';

?>

<section id="main-content">
          <section class="wrapper">
		  <div class="row">
                                                <div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
                                                                    <ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
				<!--<li><i class="fa fa-bars"></i>Pages</li>
				<li><i class="fa fa-square-o"></i>Pages</li>-->
				</ol>
                                                </div>
                                        </div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             All Feedback
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_calendar"></i>Feedback</th>
                                 <th><i class="icon_mail_alt"></i> Customer Name</th>
                              
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              
                        <?php
                            if(isset($fb_cust))
                            {
                           foreach($fb_cust as $fb)
                           {
                        ?>
                              <tr>
                                 <td><?php echo $fb->message; ?></td>
                                 <td><?php echo $fb->name; ?> </td>
                               
                                 <td>
                                  <div class="btn-group">
                                   
                                      <a class="btn btn-danger" href="feedback.php?fb_del=<?php echo $fb->fb_id; ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                         <?php
                           }
                           }
                           if(isset($fb_cust1))
                           {
                           foreach($fb_cust1 as $fb)
                           {
                          ?>
                             <tr>
                                 <td><?php echo $fb->message; ?></td>
                                 <td><?php echo $fb->name; ?> </td>
                               
                                 <td>
                                  <div class="btn-group">
                                   
                                      <a class="btn btn-danger" href="feedback.php?fb_del=<?php echo $fb->fb_id; ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <?php
                           }
                           }
                              ?>
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div></section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
