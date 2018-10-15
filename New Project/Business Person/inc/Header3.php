<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="height:9% ;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="img/lg1 (2).png" width="40" height="40" style="float: left;margin-right: 3px;">Online Innovators & Business Portal</a>
               <div class="row" style="float:right;margin-top:6px;margin-left:440px;">
                   <a href="shoppingcart.php"><img src="img/shopping_cart red.png" style="height:50px;"></a>
                   <a href="nwProfile.php?pf='pf'"><img src="img/pf.png" style="height:50px;margin-left:20px;"></a>
                   &nbsp;&nbsp;&nbsp;<a href="Home.php?lg='logout'" class="btn btn-primary" style="background-color: #c43235;border-color: #c43235;">LogOut</a>
               </div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>    
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>
    
    
<div class="row">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-top:55px;">
<div class="container">
               
            <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="main-navigation nav navbar-nav navbar-left">
            <li><a href="navigation.php">Navigation</a></li>
                    <li>
                        <a href="Home1.php">Home</a>
                    </li>
                         <li>   
                             <a href="#">Ideas<span class="caret"></span></a>
                                <ul>
                                    
                                    <?php foreach($ctgry as $cg){ ?>
                                    <li><a href="#?cgid=<?php echo $cg->category_id; $where=array("category_id"=>$cg->category_id);$res=$md->dis_mul($con,"subcategory", $where); ?>"><b><?php echo $cg->category_name; ?></b></a>
                                        <ul><?php if(isset($res)){ foreach($res as $rs){?><li><a href="category.php?<?php echo "sgid=".$rs->s_id; ?>"><?php echo $rs->s_name; ?></a></li>  <?php }} ?></ul>
                                    </li>
                                    <?php } ?>
                                
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
   
        
     <!--<div class="col-md-3" style="float:right;top:8px;left:51px;">
             <div class="input-group">
                
                 <input type="text" class="form-control" placeholder="Search For....">
                 <span class="input-group-btn">
                     
                     <button class="btn btn-secondary" type="button"><i class="fa fa-search" style="height:20px;"></i></button>
                     
                 </span>
                 
             </div>
        </div>  -->       
    </div>
</div>
                </nav>
</div>