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
                              <form role="form"><div class="form-group">
                                      <label for="state">Select State</label>
                                      <select id="state" name="state" class="form-control">
                                          <option value="">Select State</option>
                                            <?php
                                            foreach($all_state as $state)
                                            {
                                                ?>
                                                     <option value="<?php  echo $state->state_id;?>"><?php  echo $state->state_name;?></option>
                                                <?php
                                            }
                                          ?>
                                      </select>
                                  </div>
                                  
                                  
                                  <div class="form-group">
                                      <label for="exampleInputcity">Enter City Name</label>
                                      <input type="text" class="form-control"  name="city" id="city" placeholder="Enter city">
                                  </div>
                                  <input type="submit" id="submit" name="city_sub" value="Add city" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
              
              <div class="row">
                  
                  <div class="col-lg-1"></div>
                  <div class="col-lg-10">
                      <section class="panel">
                         
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> City Id</th>
                                 <th> City Name</th>
                                 <th>State Name</th>
                                  <th>Action</th>
                              </tr>
                        
                       <?php
                          foreach($city_state as $city)
                          {
                       ?>
                              <tr>
                                 <td><?php echo $city->ct_id; ?></td>
                                 <td><?php echo $city->city_name; ?></td>
                                 <td><?php echo $city->state_name?></td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_city.php?edt_city=<?php echo $city->ct_id; ?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="city.php?ct_del=<?php echo $city->ct_id; ?>"><i class="icon_close_alt2"></i></a>
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
              </div>
              <!-- page end-->
          </section>
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
