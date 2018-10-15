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
                                              if($subcat_data->category_id==$category->category_id)
                                              {
                                                ?>
                                          <option selected value="<?php  echo $category->category_id;?>"><?php  echo $category->category_name;?></option>
                                                <?php
                                            }
                                            else
                                            {
                                                ?>
                                              <option  value="<?php  echo $category->category_id;?>"><?php  echo $category->category_name;?></option>
                                          <?php
                                            }
                                          }
                                          ?>
                                         
                                         
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="exampleInputsubcategory">Enter Subcategory Name</label>
                                      <input type="text" class="form-control" value="<?php echo $subcat_data->subcategory_name; ?>" id="exampleInputSubcategory" placeholder="Enter subcategory" name="subcategory">
                                  </div>
                                  
                                  
                                  
                                  <input type="submit" id="submit" name="upd_subcat" value="Update" class="btn btn-primary">
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
