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
                              City Details
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post"><div class="form-group">
                                      <label for="state">Select State</label>
                                      <select id="state" name="state" class="form-control">
                                          <option value="">Select State</option>
                                            <?php
                                            foreach($all_state as $state)
                                            {
                                                if($state->state_id==$ct->state_id)
                                                {
                                                ?>
                                                     <option selected value="<?php  echo $state->state_id;?>"><?php  echo $state->state_name;?></option>
                                                <?php
                                                }
                                            else
                                            {
                                                ?>
                                                   <option  value="<?php  echo $state->state_id;?>"><?php  echo $state->state_name;?></option>  
                                                <?php
                                            }
                                            }
                                          ?>
                                      </select>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                      <label for="exampleInputcity">Enter City Name</label>
                                      <input type="text" class="form-control" value="<?php echo $ct->city_name; ?>"  name="city" id="city" placeholder="Enter city">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="upd_city" value="Update" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
