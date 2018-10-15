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
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Country Details
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post">
                                  
                                   
                                  <div class="form-group">
                                      <label for="exampleInputstate">Enter Country Name</label>
                                      <input type="text" class="form-control"  name="country" id="country" placeholder="Enter country">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="country_sub" value="Add country" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
              
              <div class="row">
                  
                  <div class="col-lg-3"></div>
                  <div class="col-lg-6">
                      <section class="panel">
                         
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th> Country Id</th>
                                 <th> Country Name</th>
                                 <th> Country code</th>
                                  <th>Action</th>
                              </tr>
                             
                               <?php
                                        foreach($cou as $st)
                                           {
                                 ?>

                                            <tr>
                                                <td><?php echo $st->country_id;?></td>
                                                <td><?php echo $st->country_name;?></td>
                                                <td><?php echo $st->c_code;?></td>    
                                                <td>   <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_state.php?edt_state=<?php echo $st->country_id; ?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="state.php?del_state=<?php echo $st->country_id; ?>"><i class="icon_close_alt2"></i></a>
                                  </div></td>
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
