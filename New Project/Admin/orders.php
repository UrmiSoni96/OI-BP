<?php
include './controller/controller.php';
include './inc/header.php';
?><!--header end-->

      <!--idebar start-->
      <?php include './inc/sidebar.php';?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
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
                              All Order Details
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                            
                               <tr>
                                 <th><i class="icon_profile"></i> Category</th>
                                 <th><i class="icon_calendar"></i> Subcategory</th>
                                 <th><i class="icon_mail_alt"></i> Price</th>
                                 <th><i class="icon_pin_alt"></i> Customer Name</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                      <?php
                          foreach($cat_sub_or_cust as $data)
                          {
                      ?>
                              <tr>
                                 <td><?php echo $data->category_name; ?></td>
                                 <td><?php echo $data->subcategory_name; ?></td>
                                 <td><?php echo $data->price; ?></td>
                                 <td><?php echo $data->first_name; ?> <?php echo $data->last_name; ?></td>
                               
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-danger" href="orders.php?del_order=<?php echo $data->order_id; ?>"><i class="icon_close_alt2"></i></a>
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
