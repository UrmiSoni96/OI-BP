<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
                              Subcategory Details
                          </header>
                          <div class="panel-body">
                              <form role="form" method="post">
                                  
                                  <div class="form-group">
                                      <label for="exampleInputsubcategory">Select Category</label>
                                      <select id="cat" name="category" class="form-control">
                                          <option value="">Select Category</option>
                                          <?php
                                          foreach($all_category as $category)
                                          {
                                                ?>
                                                     <option value="<?php  echo $category->category_id;?>"><?php  echo $category->category_name;?></option>
                                                <?php
                                            }
                                          ?>
                                         
                                         
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputsubcategory">Enter Subcategory Name</label>
                                      <input type="text" class="form-control" id="exampleInputSubcategory" placeholder="Enter subcategory" name="subcategory">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="subcat_sub" value="Add subcategory" class="btn btn-primary">
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
                                 <th> Category Name</th>
                                 <th> Subcategory Name</th>
                                  <th>Action</th>
                              </tr>
                           <?php
                             foreach($cat_sub as $subcategory)
                             {
                           ?>
                              <tr>
                                 <td><?php echo $subcategory->category_name;?></td>
                                 <td><?php echo $subcategory->s_name; ?></td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_subcategory.php?edtsubcat=<?php echo $subcategory->subcat_id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="subcategory.php?delsub=<?php echo $subcategory->s_id;?>"><i class="icon_close_alt2"></i></a>
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
