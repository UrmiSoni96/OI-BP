
<?php
 include './inc/header.php';
 ?><!--header end-->

      <!--idebar start-->
      <?php include './inc/sidebar.php';?>
      <!--sidebar end-->


 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              
                <!-- Horizontal Forms-->
              
              <div class="row">
                  <div class="col-lg-3">
                  </div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                                   Form
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" role="form">
                                  
                                  <div class="form-group">
                                      <label for="inputName" class="col-lg-2 control-label">Name</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputName" placeholder="Name">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                      <div class="col-lg-10">
                                          <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                                          <p class="help-block">Example block-level help text here.</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                      <div class="col-lg-10">
                                          <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox"> Remember me
                                              </label>
                                          </div>
                                      </div>
                                  </div>
                                  
                                   <div class="form-group">
                                      <label for="inputAddress" class="col-lg-2 control-label">Address</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="inputGender" class="col-lg-2 control-label">Gender</label>
                                      <div class="col-lg-10">
                                          
                                          <input type="radio" id="rdo1"  name="gender" value="male">Male
                                           <input type="radio"  id="rdo2"  name="gender" value="female">Female
                                      </div>
                                  </div>
                                  
                                   <div class="form-group">
                                      <label for="inputCity" class="col-lg-2 control-label">City</label>
                                      <div class="col-lg-10">
                                           <select id="city" name="city">
                                       
                                        <option value="">Select city</option>
                                        <option value="abd">Ahmedabad</option>
                                        <option value="surat">Surat</option>
                                        <option value="raj">Rajkot</option>
                                       
                                        </select>
                                      </div>
                                  </div>
                                  
                                   <div class="form-group">
                                      <label for="inputEducation" class="col-lg-2 control-label">Education</label>
                                      <div class="col-lg-10">
                                             <input type="checkbox" id="c1" name="c1" value="ssc">SSC
                                             <input type="checkbox" id="c2" name="c1" value="hsc">HSC
                                             <input type="checkbox" id="c3" name="c1" value="be">BE
                                             <input type="checkbox" id="c4" name="c1" value="me">ME
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Submit</button>
                                          <button type="reset" class="btn btn-danger">Cancel</button>
                                              
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                    
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form role="form">
                                                  <div class="form-group">
                                                      <label for="exampleInputEmail1">Email address</label>
                                                      <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputPassword1">Password</label>
                                                      <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="exampleInputFile">File input</label>
                                                      <input type="file" id="exampleInputFile3">
                                                      <p class="help-block">Example block-level help text here.</p>
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Check me out
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">

                                              <form class="form-horizontal" role="form">
                                                  <div class="form-group">
                                                      <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-10">
                                                          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
                                                      <div class="col-lg-10">
                                                          <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <div class="checkbox">
                                                              <label>
                                                                  <input type="checkbox"> Remember me
                                                              </label>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-info">Sign in</button>
                                                      </div>
                                                  </div>
                                              </form>

                                          </div>

                                      </div>
                                  </div>
                              </div>
                              <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                              <h4 class="modal-title">Form Tittle</h4>
                                          </div>
                                          <div class="modal-body">
                                              <form class="form-inline" role="form">
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                      <input type="email" class="form-control sm-input" id="exampleInputEmail5" placeholder="Enter email">
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                      <input type="password" class="form-control sm-input" id="exampleInputPassword5" placeholder="Password">
                                                  </div>
                                                  <div class="checkbox">
                                                      <label>
                                                          <input type="checkbox"> Remember me
                                                      </label>
                                                  </div>
                                                  <button type="submit" class="btn btn-success">Sign in</button>
                                              </form>

                                          </div>

                                      </div>
                                  </div>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
            

                    
              </form>