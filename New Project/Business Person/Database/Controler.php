<?php
    session_start();
    include 'Model.php';
    $md=new model();
    date_default_timezone_set('asia/kolkata'); 
    
    $cntrm=$md->display($con,"country");
    $ctgry1=$md->sel_limit($con,"category");
    $ctgry=$md->display($con,"category");

    //Registration
    if(isset($_REQUEST["R_submit"]))
    {
        $nm=$_REQUEST["firstname"]." ".$_REQUEST["lastname"];
        $adrs=$_REQUEST["address"];
        $cntr=$_REQUEST["country"];
        $cont=$_REQUEST["cnt"];
        $gen=$_REQUEST["gender"];
        $qul=$_REQUEST["qualification"];
        $cmp=$_REQUEST["company"];
        $exp=$_REQUEST["experience"];
        $des=$_REQUEST["designation"];
        $email=$_REQUEST["email"];
        $pwd=$_REQUEST["password"];
        
        $filename= $_FILES["pfpc"]["name"];
        
        $data=array("name"=>$nm,"email"=>$email,"password"=>$pwd,"contact_no"=>$cont,"address"=>$adrs,
            "country_id"=>$cntr,"gender"=>$gen,"qualification"=>$qul,"experience"=>$exp,"company"=>$cmp,"designation"=>$des);
        
        if(isset($filename))
        {
            $filename1=explode(".",$filename);
            $ext= end($filename1);
            $php_path= $_FILES["pfpc"]["tmp_name"];	
            $path= "upload_img/$filename";
	
		
	if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif' ||$filename=="")
	{
                             move_uploaded_file($php_path,$path);
                             $data["image"]=$filename;
                    }
	else
	{
		echo "<script>alert('invalid file..try again');</script>";
	}
	
        }
        
        if($_REQUEST["acctype"]=='b')
        {
            //print_r($data);exit;
               $md->insert($con, $data, "user");
               header("location:login.php");
        }
        else 
        {
            //print_r($data);exit;
            $md->insert($con, $data, "innovators");
            header("location:login.php");
        }
        
    }
    
    //Login
    if(isset($_REQUEST["L_submit"]))
    {
        $unm=$_REQUEST["unm"];
        $pwd=$_REQUEST["pwd"];
        
        $where=array(
            "email"=>$unm,
            "password"=>$pwd
        );
        if($_REQUEST["acctype"]=='b')
        {
                $all=$md->login($con, "user", $where);
                $n=$all->num_rows;
                if($n!=0)
                {
                    $row=$all->fetch_object();
                    $_SESSION["id"]=$row->user_id;
                }
        }
        else 
        {
                $all=$md->login($con,"innovators", $where);
                $n=$all->num_rows;
                if($n!=0)
                {
                    $row=$all->fetch_object();
                    $_SESSION["id"]=$row->innovator_id;
                }
        }
        
        if($n==1)
        {
            
            $_SESSION["actp"]=$_REQUEST["acctype"];
            header('location:Home1.php');
        }
        else
        {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
    
    //Log Out
    if(isset($_REQUEST["lg"]))
    {
      // echo "<script>alert('hello')</script>";
       //exit; 
        //echo "<script>alert('Successfully Logout....')</script>";
        session_destroy();
        header('location:Home.php');
        //header("Refresh:5;url:'Home.php'");
    }
    
        //View Profile
    if(isset($_REQUEST["pf"]))
    {
        
        $i=$_SESSION["id"];
        
        if($_SESSION["actp"]=='b')
        {
             $all1=$md->dis_join($con,"user","country","user.country_id=country.country_id AND user_id='$i'");
        }
        else 
        {
            $all1=$md->dis_join($con,"innovators","country","innovators.country_id=country.country_id AND innovator_id='$i'");
            $where=array(
                "innovator_id"=>$_SESSION["id"]
                    );
            $idea=$md->dis_mul($con,"idea", $where);
        }
       
    }
            //Edit Profile
    if(isset($_REQUEST["editPf"]))
    {
        //print_r($_REQUEST);
        //echo $_SESSION["id"];exit;
         if($_SESSION["actp"]=='b')
        {
                $where=array(
                    "user_id"=>$_SESSION["id"]
                        );
                $all=$md->login($con,"user", $where);
        }
        else 
        {
               $where=array(
                    "innovator_id"=>$_SESSION["id"]
                        );
            $all=$md->login($con,"innovators", $where);
        }
        $row=$all->fetch_object();
        $str[]=explode(" ",$row->name); 
   
        //print_r($row);exit;
        foreach ($str as $v)
        {
            $d=$v;
        }
       
    }
    
    //Update Profile
    if(isset($_REQUEST["E_submit"]))
    {
        
        $nm=$_REQUEST["firstname"]." ".$_REQUEST["lastname"];
        $adrs=$_REQUEST["address"];
        $cntr=$_REQUEST["country"];
        $cont=$_REQUEST["cnt"];
        $qul=$_REQUEST["qualification"];
        $cmp=$_REQUEST["company"];
        $exp=$_REQUEST["experience"];
        $des=$_REQUEST["designation"];
        $email=$_REQUEST["email"];
        
        $data=array("name"=>$nm,"email"=>$email,"contact_no"=>$cont,"address"=>$adrs,
            "country_id"=>$cntr,"qualification"=>$qul,"experience"=>$exp,"company"=>$cmp,"designation"=>$des);
        $filename= $_FILES["pfpc"]["name"];
        
        if(isset($filename))
        {
            //echo $filename;
            $filename1=explode(".",$filename);
            $ext= end($filename1);
            $php_path= $_FILES["pfpc"]["tmp_name"];	
            $path="upload_img/$filename";
            
		
	if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
	{
                             move_uploaded_file($php_path,$path);
                             $data["image"]=$filename;
	}
	else
	{
		echo "<script>alert('invalid file..try again');</script>";
	}
	
        }
        
        $i=$_SESSION["id"];
        
        if($_SESSION["actp"]=='b')
        {
                $where=array(
                "user_id"=>$_SESSION["id"] 
                                );
                $od=$md->edit($con,"user", $where);
                if(isset($filename) && !isset($od->image))
                {
                    unlink("upload_img/$od->image");
                }
                $md->updt($con, $data,"user", $where);
                 header("location:nwProfile.php?pf=$i");
        }
        else 
        {
             $where=array(
                "innovator_id"=>$_SESSION["id"] 
                                );
            $od=$md->edit($con,"innovators", $where);
            if(isset($filename) && !isset($od->image))
            {
                    unlink("upload_img/$od->image");
            }
            //print_r($data);exit;
            $md->updt($con, $data,"innovators", $where);
            header("location:nwProfile.php?pf=$i");
        }
        //header("location:nwProfile.php?pf=$i");
        
    }
        
    //Category page
    if(isset($_REQUEST["cgid"]))
    {
            $where=array(
                "category_id"=>$_REQUEST["cgid"]
            );
            
            $all=$md->login($con,"category", $where);
            if($all->num_rows!=0)
            {
                    $crow=$all->fetch_object();
            }
    }
    
    //Subcategory page
    if(isset($_REQUEST["sgid"]))
    {
            $where=array(
                "s_id"=>$_REQUEST["sgid"]
            );
            $arr[]=explode("/",$_SERVER["HTTP_REFERER"]);
            //echo $_SERVER["HTTP_REFERER"];
            
            $all=$md->login($con,"subcategory", $where);
            if($all->num_rows!=0)
            {
                    $srow=$all->fetch_object();
            }
            //$cdata=$md->dis_idea($con,"idea","resource","idea.idea_id=resource.idea_id", $where);
            $cdata=$md->dis_join_con($con,"idea", "resource","idea.idea_id=resource.idea_id",$where);
            $idata=$md->dis_join_con($con,"innovators", "idea","idea.innovator_id=innovators.innovator_id",$where);
            if(is_null($cdata))
            {
                foreach($arr as $a)
                {
                   $bk=count($a);
                   $bkp=$a[$bk-1];
                }
                header('location:'.$bkp);
            }
            $cdata1=$md->dis_join_con($con, "likes","idea", "idea.idea_id=likes.idea_id", $where);
            //$cdata2=$md->dis_join_con1($con, "idea","comment", "idea.idea_id=comment.idea_id", $where);
    } 
    
    //Upload Idea
    if(isset($_REQUEST["UI_Submit"]))
    {
        
        $t=time();
        $date=date('Y-m-d',$t);
        $data=array(
          "date"=>$date,
          "title"=>$_REQUEST["title"],
          "overview"=>$_REQUEST["ovrvw"],
          "description"=>$_REQUEST["dis"],
          "price"=>$_REQUEST["price"],
          "innovator_id"=>$_SESSION["id"],
           "s_id"=>$_REQUEST["sctg"]
        );
        
        $md->insert($con, $data, "idea");
        
        $lidea=$md->display($con,"idea");
        if(isset($lidea))
        {
                $data=array("idea_id"=>$lidea[count($lidea)-1]->idea_id);
            
                $filename= $_FILES["dp"]["name"];
                if(isset($filename))
                {
                    $filename1=explode(".",$filename);
                    $ext= end($filename1);
                    $php_path= $_FILES["dp"]["tmp_name"];	
                    $path= "idea_dp/$filename";
	
		
	if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
	{
                             move_uploaded_file($php_path,$path);
                             $data["image"]=$filename;
	}
	else
	{
		echo "<script>alert('invalid file..try again');</script>";
	}
	
                 }
                $filename= $_FILES["res"]["name"];
                 if(isset($filename))
                {
                    $filename1=explode(".",$filename);
                    $ext= end($filename1);
                    $php_path= $_FILES["res"]["tmp_name"];	
                    $path= "resource/$filename";
	
                    move_uploaded_file($php_path,$path);
                    $data["document_name"]=$filename;
	
                    $md->insert($con, $data,"resource");
                }
        }
        
        header("location:nwProfile.php?pf=$i");
        //print_r($data);exit;
    }
    
    //Edit Idea
    if(isset($_REQUEST["editID"]))
    {
             //echo $_REQUEST["editID"];exit;
             $where=array(
                "idea.idea_id"=>$_REQUEST["editID"]
                                );
             $id=$_REQUEST["editID"];
             $all=$md->dis_join_con($con,"idea", "resource","idea.idea_id=resource.idea_id",$where);
             foreach($all as $a)
             {
                 $ex=$a->s_id;
             }
             
             $where1=array(
                "subcategory.s_id"=>$ex
                                );
             $curr_sid=$md->edit($con,"subcategory", $where1);
             $curr_cgid=$curr_sid->category_id;
             
             if(isset($_REQUEST["EI_Submit"]))
            {
        
                $t=time();
                $date=date('Y-m-d',$t);
                $data=array(
                "date"=>$date,
                "title"=>$_REQUEST["title"],
                "overview"=>$_REQUEST["ovrvw"],
                "description"=>$_REQUEST["dis"],
                "price"=>$_REQUEST["price"],
                "innovator_id"=>$_SESSION["id"],
                 "idea_id"=>$id,
                 );
                 if(isset($_REQUEST["sctg"]))
                {
                    $data["s_id"]=$_REQUEST["sctg"];
                }
                else 
                 {
                    $data["s_id"]=$ex;
                }
                 
                $where=array(
                    "idea_id"=>$id
                );
                $md->updt($con, $data, "idea", $where);
                
                
                $data=array(
                    "idea_id"=>$id
                        );
                $filename= $_FILES["dp"]["name"];
                if(isset($filename))
                {
                    $filename1=explode(".",$filename);
                    $ext= end($filename1);
                    $php_path= $_FILES["dp"]["tmp_name"];	
                    $path= "idea_dp/$filename";
                    foreach($all as $a)
                    {
                        //echo $a->image."<br>";
                        $od=$a->image;
                        $odcmnt=$a->document_name;
                    }
                    if(isset($filename) && !isset($od))
                    {
                        //echo "od".$od;exit;
                        unlink("idea_dp/$od");
                    }
                    
                if($ext=='jpg' || $ext=='jpeg' || $ext=='png' || $ext=='gif')
                {
                                     move_uploaded_file($php_path,$path);
                                     $data["image"]=$filename;
                }
                else
                {
                        echo "<script>alert('invalid Image file..try again');</script>";
                }

                }
                $filename= $_FILES["res"]["name"];
                
                if(isset($filename) && isset($odcmnt))
                {
                        unlink("resource/$odcmnt");
                }
                if(isset($filename))
                {
                    $filename1=explode(".",$filename);
                    $ext=end($filename1);
                    $php_path= $_FILES["res"]["tmp_name"];	
                    $path= "resource/$filename";
                    
                    move_uploaded_file($php_path,$path);
                    $data["document_name"]=$filename;

                }
                
                $ars=$md->display($con,"resource");
                //$md->updt($con, $data, "resource", $where);
                //header("location:nwProfile.php?pf=$i");
                $f=0;
                foreach ($ars as $rs)
                {
                    if($rs->idea_id==$id)
                    {
                        $f=1;break;
                    }
                }
                if($f==1)
                {
                    $md->updt($con, $data, "resource", $where);
                }
                else 
                {
                    $md->insert($con,$data,"resource");
                }
                header("location:nwProfile.php?pf=$i");
            }
    }
    
    //Delete Idea
    if(isset($_REQUEST["deleteID"]))
    {
        $where=array(
            "idea_id"=>$_REQUEST["deleteID"]
                    );
        $bdata=$md->edit($con,"resource", $where);
        //$md->delete1($con,"idea", $where);
        if(isset($bdata->image))
            unlink("idea_dp/$bdata->image");
        if(isset($bdata->document_name))
            unlink("resource/$bdata->document_name");
        $md->delete1($con,"idea", $where);
        $md->delete1($con,"resource", $where);
        header("location:nwProfile.php?pf=$i");
    }
    
    //Comment
    if(isset($_REQUEST["CMNT_Submit"]))
    {
        $data=array(
            "comment"=>$_REQUEST["comment"],
            "idea_id"=>$_REQUEST["iid"]
            );
        if($_SESSION["actp"]=='b')
        {
            $data["user_id"]=$_SESSION["id"];
        }
        else 
        {
            $data["innovator_id"]=$_SESSION["id"];
        }
        $md->insert($con, $data, "comment");
    }
    
    //Show Full Idea
    if(isset($_REQUEST["si"]))
    {
        $where=array(
            "idea_id"=>6
                );
        $sid=$md->edit($con, "idea", $where);
        $rsrc=$md->edit($con,"resource", $where);
        $where=array(
                "innovator_id"=>$sid->innovator_id
                    );
        $ind=$md->edit($con,"innovators", $where);
    }
    
    //Message from Business Person
    if(isset($_REQUEST["MSG_Submit"]))
    {
        //print_r($_REQUEST);exit;
        $t=time();
        $date=date('Y-m-d',$t);
        
        $data=array(
                "message"=>$_REQUEST["message"],
                "date"=>$date,
                "sender"=>$_SESSION["actp"]
                );
        if($_SESSION["actp"]=='b')
        {
            $where=array(
                "idea_id"=>$_REQUEST["mid"]
                    );
            $msgid=$md->edit($con,"idea", $where);
            
                $data["user_id"]=$_SESSION["id"];
                $data["innovator_id"]=$msgid->innovator_id;
        }
        //print_r($data);exit;
        $md->insert($con, $data,"message");
    }
    
    //Reply for Messages
    if(isset($_REQUEST["RPLY_Submit"]))
    {
        $t=time();
        $date=date('Y-m-d',$t);
        
            $data=array(
                "message"=>$_REQUEST["message"],
                "date"=>$date,
                "sender"=>$_SESSION["actp"]
                );
        if($_SESSION["actp"]=='b')
        {
            $data["innovator_id"]=$_REQUEST["mid"];
            $data["user_id"]=$_SESSION["id"];
         }
        else
        {
            $data["user_id"]=$_REQUEST["mid"];
            $data["innovator_id"]=$_SESSION["id"];
        }
        $md->insert($con, $data,"message");
    }
    //View Messgae
    if(isset($_REQUEST["vm"]))
    {
        if($_SESSION["actp"]=="b")
        {
            //Received
            $where=array(
                "message.user_id"=>$_SESSION["id"],
                //"message.sender"=>'i'
                        );
            $allmsg=$md->dis_join_con1($con,"message","innovators","message.innovator_id=innovators.innovator_id", $where);
            
            //Sent
            $where1=array(
                "message.user_id"=>$_SESSION["id"],
                //"message.sender"=>'b'
                        );
            
            $allmsg1=$md->dis_join_con1($con,"message","innovators","message.innovator_id=innovators.innovator_id", $where);
        }
        else
        {
            //Received
            $where=array(
                "message.innovator_id"=>$_SESSION["id"],
                //"message.sender"=>'b'
                    );
            $allmsg=$md->dis_join_con1($con,"message","user","message.user_id=user.user_id", $where);
            
            //Sent
            $where=array(
                "message.innovator_id"=>$_SESSION["id"],
                //"message.sender"=>'i'
                    );
            
            $allmsg1=$md->dis_join_con1($con,"message","user","message.user_id=user.user_id", $where);
        }  
        //print_r($allmsg1);exit;
    }
    
    //Delete the message
    if(isset($_REQUEST["dm"]))
    {
        $where=array(
            "msg_id"=>$_REQUEST["dm"]
                );
                
        $md->delete1($con,"message", $where);
        
        header("location:view_msg.php?vm='vm'");
        
    }
    
    //Feedback
    if(isset($_REQUEST["smsg"]))
    {
        $t=time();
        $date=date('Y-m-d',$t);
        $data=array(
                "date"=>$date,
                "message"=>$_REQUEST["message"]
                );
        //echo $_SESSION["id"];exit;
        if($_SESSION["actp"]=='b')
        {
            $data["user_id"]=$_SESSION["id"];
        }
        else
        {
            $data["innovator_id"]=$_SESSION["id"];
        }
        $md->insert($con, $data, "feedback");
        header('location:Home1.php');
        //print_r($data);exit;
    }
    
    if(isset($_REQUEST["inpf"]))
    {
        $where=array(
            "innovator_id"=>$_REQUEST["inpf"]
                );
        $det=$md->edit($con, "innovators", $where);
    }
    
    
    
    
    
    
        /// add to cart
if(isset($_REQUEST["idea_id"]))
{
   
    $idea_id= $_REQUEST["idea_id"];
    $data = array("idea_id" => $idea_id);
    $idea_data = $md->edit($con, "idea", $data);
    //$idea_data = $idea->fetch_object();
    
  //  echo count($_SESSION['cart']);
    
    if(count($_SESSION["cart"])!=0)
    {
       // echo "1"; exit;
        $count=0;
        foreach($_SESSION["cart"] as $cart_items)
        {
           
            if($cart_items["idea_id"]==$idea_id)
            {
                $count++;
                $_SESSION["cart"][$idea_id]["quantity"]= $_SESSION["cart"][$idea_id]["quantity"]+1; 
                //header('location:../shoppingcart.php');
            }
       
        }
        if($count==0)
        {
            
        $_SESSION["cart"][$idea_id]["idea_id"]=$idea_data->idea_id;
        $_SESSION["cart"][$idea_id]["title"]=$idea_data->title;
        $_SESSION["cart"][$idea_id]["overview"]=$idea_data->overview;
	 $_SESSION["cart"][$idea_id]["price"]=$idea_data->price;
        /*$_SESSION["cart"][$idea_id]["myfile"]=$idea_data->file;
			$_SESSION["cart"][$idea_id]["category"]=$idea_data->category;
			$_SESSION["cart"][$idea_id]["subcategory"]=$idea_data->subcategory;
			$_SESSION["cart"][$idea_id]["cust_id"]=$idea_data->cust_id;
 */           //$_SESSION["cart"][$idea_id]["quantity"]=1;

            header('location:shoppingcart.php');
        }
     
    }
    else
    {
        
        $_SESSION["cart"][$idea_id]["idea_id"]=$idea_data->idea_id;
        $_SESSION["cart"][$idea_id]["title"]=$idea_data->title;
        $_SESSION["cart"][$idea_id]["overview"]=$idea_data->overview;
        $_SESSION["cart"][$idea_id]["price"]=$idea_data->price;
/*		$_SESSION["cart"][$idea_id]["myfile"]=$idea_data->file;
		$_SESSION["cart"][$idea_id]["category"]=$idea_data->category;
	    $_SESSION["cart"][$idea_id]["subcategory"]=$idea_data->subcategory;
	    $_SESSION["cart"][$idea_id]["cust_id"]=$idea_data->cust_id;
  */      //$_SESSION["cart"][$idea_id]["quantity"]=1;
        
        header('location:shoppingcart.php');
  
    }  
            
}

/// delete values from cart

if(isset($_REQUEST["remove_cartid"]))
{
    $idea_id= $_REQUEST["remove_cartid"];
    unset( $_SESSION["cart"][$idea_id]);
    header('location:shoppingcart.php');
}

if(isset($_REQUEST["updatecart"]))
{
   
      foreach($_SESSION["cart"] as $cart_items)
        {
          
            foreach($_REQUEST["cart"] as $data )
            {
                foreach($data as $k=>$v)
                {
                    if($cart_items["idea_id"]==$k)
                    {
                       $_SESSION["cart"][$k]["quantity"]=$v;
                    }
                }
            }
            
        }
    
        header('location:shoppingcart.php');
     
     
}


if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $where = array("category_id" => $id);
    $subcat = $obj->select_where($con, "subcategory", $where);

    while ($detail = $subcat->fetch_object()) {
        $ff[] = $detail;
    }

    foreach ($ff as $sub) {
        ?> 
        <option value="<?php echo $sub->subcat_id; ?>"><?php echo $sub->subcategory_name; ?></option>
        <?php
    }
}


if (isset($_REQUEST['catid'])) {
    $catid = $_REQUEST['catid'];
    $subcatid = $_REQUEST['subcatid'];

    $where = array("category" => $catid, "subcategory" => $subcatid);
    $subcat = $obj->select_where($con, "my_idea", $where);

    while ($detail = $subcat->fetch_object()) {
        $ff[] = $detail;
    }
    //print_r($ff);
    foreach ($ff as $sub) {
        ?> 

        <div class="span2">
            <img src="<?php echo "../Innovators/images/" . $sub->file; ?>">
        </div>   
        <div class="span4">    
            <h3>New | Available</h3>				
            <hr class="soft"/>
            <h5><?php echo $sub->title; ?> </h5>
            <p>
        <?php echo $sub->short_description; ?>
            </p>
            <a class="btn btn-small pull-right" href="product_details.php?idd=<?php echo $sub->mi_id; ?>">View Details</a>
            <br class="clr"/>
        </div>
        <div class="span3 alignR">
            <form class="form-horizontal qtyFrm">
                <h3> <?php echo $sub->price; ?> Rs.</h3>
                <br/>
                <a href="Ideas_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
                <a href="Ideas_details.php" class="btn btn-large"><i class="icon-zoom-in"></i></a>
            </form>
        </div>

        <?php
    }
}
?>