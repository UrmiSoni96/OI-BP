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
                                      <input type="text" class="form-control" id="Category" placeholder="Enter category" name="category">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="cat_sub" value="Add category" class="btn btn-primary">
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
                                 <th> Category Id</th>
                                 <th> Category Name</th>
                                  <th>Action</th>
                              </tr>
                             
                              
                               <?php
                                       foreach($all_category as $category)
                                           {
                                 ?>

                                            <tr>
                                                <td><?php echo $category->category_id;?></td>
                                                <td><?php echo $category->category_name;?></td>
                                                <td>
                                      <a class="btn btn-primary" href="edit_category.php?edt_cat=<?php echo $category->category_id; ?>"><i class="icon_plus_alt2"></i></a>                
                          <a class="btn btn-danger" href="category.php?did=<?php echo $category->category_id ;?>"><i class="icon_close_alt2"></i></a>                          
                   
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
