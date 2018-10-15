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
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
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
                              Category Details
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post">
                                  <div class="form-group">
                                      <label for="exampleInputcategory">Enter Category Name</label>
                                      <input type="text" class="form-control" value="<?php echo $edit->category_name; ?>" id="Category" placeholder="Enter category" name="category">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="upd_cat" value="Update" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
                           
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
