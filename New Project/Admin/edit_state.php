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
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                      <section class="panel">
                          <header class="panel-heading">
                              State Details
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post">
                                  
                                  <div class="form-group">
                                      <label for="exampleInputstate">Enter State Name</label>
                                      <input type="text" class="form-control"  value="<?php echo $st_data->state_name; ?>" name="state" id="State" placeholder="Enter state">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="upd_state" value="Update" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
