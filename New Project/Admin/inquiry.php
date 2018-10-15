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
						<li><i class="fa fa-bars"></i>Pages</li>
						<li><i class="fa fa-square-o"></i>Pages</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             All Inquiries
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Name</th>
                                 <th><i class="icon_calendar"></i> Email</th>
                                 <th><i class="icon_mail_alt"></i> Subject</th>
                                 <th><i class="icon_mail_alt"></i> Description</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                        <?php
                           foreach($all_contact as $contact)
                           {
                        ?>
                              <tr>
                                 <td><?php echo $contact->name; ?></td>
                                 <td><?php echo $contact->email; ?></td>
                                 <td><?php echo $contact->subject; ?></td>
                                  <td><?php echo $contact->description; ?></td>
                                 <td>
                                  <div class="btn-group">
                                   
                                      <a class="btn btn-danger" href="inquiry.php?in_del=<?php echo $contact->cont_id; ?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                         <?php
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
