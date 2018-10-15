<html>
    <head>
        <script src="https://code.jquery.com/jquery-1.12.4.js">  </script>
        <script src="jQuery-menu-aim-master/jquery.menu-aim.js"></script>
        <script src="jQuery-menu-aim-master/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="jQuery-menu-aim-master/bootstrap.min.js" type="text/javascript"></script>
        <script>
                                                          function getsubcat()
			{
				var ctgid= document.getElementById("ctg").value;
				$.ajax({
						  type: "GET",
						  url:"sub_dropdown.php",
						  data:"ctgid="+ctgid,
						  success:function(result)
						  {
							  $("#sctg").html(result);
						  }
					
					
					});
				
			}
                        
                        var $menu = $(".dropdown-menu");

        // jQuery-menu-aim: <meaningful part of the example>
        // Hook up events to be fired on menu row activation.
        $menu.menuAim({
            activate: activateSubmenu,
            deactivate: deactivateSubmenu
        });
        
        function activateSubmenu(row) {
            var $row = $(row),
                submenuId = $row.data("submenuId"),
                $submenu = $("#" + submenuId),
                height = $menu.outerHeight(),
                width = $menu.outerWidth();
        $row.find("a").addClass("maintainHover");
        }
        function deactivateSubmenu(row) {
            var $row = $(row),
                submenuId = $row.data("submenuId"),
                $submenu = $("#" + submenuId);

            // Hide the submenu and remove the row's highlighted look
            $submenu.css("display", "none");
            $row.find("a").removeClass("maintainHover");
        }
         </script>
    </head>
</html>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:9% ;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
               <img src="img/lg1 (2).png" width="40" height="40" style="float: left;margin-right: 3px;">Online Innovators & Business Portal</a>
               <div class="row" style="float:right;margin-top:6px;margin-left:440px;">
                   <img src="img/7doMNj30628TETDG-hZ5bTQZn5KNbbcXMDaov_9RO79FLWbRkd7rGkrtk5vQ33_a-eRc2eQ2UBCArWk3H9wrmnqDtvOFl1fyXsywrZ0LZtTA8U1uWDg=w384-h384-nc.png" style="height:50px;">
                   <a href="nwProfile.php?pf='pf'"><img src="img/pf.png" style="height:50px;margin-left:20px;"></a>
                   &nbsp;&nbsp;&nbsp;<a href="login.php?lg='logout'" class="btn btn-primary">LogOut</a>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>    
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>
    
    
<div class="row" >
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-top:60px;">
<div class="container">
               
            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="main-navigation nav navbar-nav navbar-left">
    	<li><a href="#">Navigation</a></li>
                         <li>   
                             <a href="#">Ideas<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><select id="ctg" name="ctg" style="padding: 5px 10px 5px 10px;background-color:#b56969;color: white;font-weight: bold;" onchange="return getsubcat()">
                                            <option value="" style="font-weight: bold;">--Select Category--</option>
                                            <?php foreach($ctgry as $cg){ ?>
                                            <option value="<?php echo $cg->category_id; ?>" style="font-weight: bold"><?php echo $cg->category_name; ?></option>
                                            <?php } ?>
                                          </select>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <select id="sctg" name="sctg" style="padding: 5px 10px 5px 10px;background-color:#b56969;color: white;font-weight: bold;">
                                           
                                          </select>
                                            </li>
                                        </ul>
                                    </li>  
                                </ul>
   	 </li>
                    <li>
                        <a href="#">Latest Ideas</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
            </ul>
   
        
     <div class="col-md-3" style="float:right;top:8px;left:51px;">
             <div class="input-group">
                
                 <input type="text" class="form-control" placeholder="Search For....">
                 <span class="input-group-btn">
                     
                     <button class="btn btn-secondary" type="button"><i class="fa fa-search" style="height:20px;"></i></button>
                     
                 </span>
                 
             </div>
        </div>         
    </div>
</div>
                </nav>
</div>