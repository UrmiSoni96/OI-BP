<?php
ob_start();
$htdocs_path = $_SERVER['DOCUMENT_ROOT']; 
include "model/model.php";
     
    if(!isset($_SESSION))
        {
            session_start();
        }
       
    date_default_timezone_set('Asia/kolkata');
    
    $obj = new mymodel();
              
              $tot_bp=$obj->count_records($con,"user");
              $tot_inn=$obj->count_records($con,"innovators");
              $tot_ui=$obj->count_records($con,"idea");
              //$tot_sd=$obj->count_records($conn,"orderdetails");	
            
    //  Fetch Subcategory Data using Ajax
    
      if(isset($_REQUEST['id']))
      {
          $id = $_REQUEST['id'];
          $where = array("category_id"=>$id);
          $subcat = $obj->select_where($con, "subcategory", $where);
         
          while($detail = $subcat->fetch_object())
          {
              $ff[]=$detail;
          }
        
             foreach($ff as $sub)
             {
                 ?> 
                         <option value="<?php echo $sub->s_id;?>"><?php echo $sub->s_name; ?></option>
<?php
             }
      }
    
      
      
      
      
      // Search Idea details
      
          if(isset($_REQUEST['search_sub']))
          {
              $cat = $_REQUEST['category'];
              $subcat = $_REQUEST['subcategory'];
              
              $data = array("category"=>$cat,"subcategory"=>$subcat);
              
              $ser = $obj->search($con,"idea",$data);
          }
      
      //Select All Rows
	
      $all_category = $obj->select_all($con,"category");
      
      //print_r($all_category[0]);
     
      $all_subcategory = $obj->select_all($con, "subcategory");
      
      $all_country = $obj->select_all($con, "country");
      
      //$all_state = $obj->select_all($con, "state");
      
      //$all_contact = $obj->select_all($con, "contact_us");
      
      
      
      // Fetch Business Person Records
    /*  if($_REQUEST["acctype"]=='b')
        {
                $md->insert($con, $data, "user");
                header("location:login.php");
        }
      */    
      //$where = array("cust_type"=>"1");
     // $all_bp = $obj->select_all($con,"user");
           //echo '<pre>';
           //print_r($all_bp);
           
             //    $business_person[]=$bp_rows;
             

      // Fetch Innovators Details
      
//      $where = array("cust_type"=>"2");
      //$all_inn = $obj->select_all($con,"innovators");
      /*      while($inn_rows = $all_inn->fetch_object())
                  {
                      $innovators[]=$inn_rows;
                  }
      */
      
     //Join two Tables
     $all_bp=$obj->dis_join($con,"user","country","user.country_id=country.country_id");
     $all_in=$obj->dis_join($con,"innovators","country","innovators.country_id=country.country_id");
    /* echo '<pre>';
     print_r($cntry);exit;
      */
     $cat_sub = $obj->join_two($con, "category", "subcategory", "category.category_id=subcategory.category_id");
        $cou=$obj->select_all($con, "country");
//       $state_cou = $obj->join_two($con, "country", "state", "country.cid=state.cid");
       
  //     $city_state = $obj->join_two($con,"state","city","state.state_id=city.state_id");
       
       $fb_cust = $obj->join_two($con, "feedback", "user", "user.user_id=feedback.user_id");
       $fb_cust1 = $obj->join_two($con, "feedback", "innovators", "innovators.innovator_id=feedback.innovator_id");
       
       $cmnt = $obj->join_three($con, "comment", "idea", "idea.idea_id=comment.idea_id","user","user.user_id=comment.user_id");
       
         //Join Four
   
      // $cat_sub_or_cust = $obj->join_four($con, "orders", "category", "orders.category=category.category_id","subcategory","orders.subcategory=subcategory.subcat_id","customer","orders.cust_id=customer.cust_id");
           
      //$cu_ca_sub_mi = $obj->join_four($con,"my_idea","customer","my_idea.cust_id=customer.cust_id","category","my_idea.category=category.category_id","subcategory","my_idea.subcategory=subcategory.subcat_id"); 
    // Insert Contact Us Details
    
    if(isset($_REQUEST["contact_sub"]))
    {
        $name= $_REQUEST["name"];
        $email= $_REQUEST["email"];
        $sub= $_REQUEST["subject"];
        $desc= $_REQUEST["description"];

        $data = array("name"=>$name,"email"=>$email,"subject"=>$sub,"description"=>$desc);
        
        $cont_ins = $obj->insert($con,"contact_us",$data);
        if($cont_ins==true)
        {      
            echo "<script>alert('Data Submitted Successfully')</script>";
    
        }
        
    }
    
    // View Idea detailed description
    
     if(isset($_REQUEST['idd']))
     {
         $idd = $_REQUEST['idd'];
         $where = array("mi_id"=>$idd);
         $mi_idea = $obj->join_four_where($con,"my_idea","customer","my_idea.cust_id=customer.cust_id","category","my_idea.category=category.category_id","subcategory","my_idea.subcategory=subcategory.subcat_id",$where);
         
     }
    
    //Admin  Login
    
      if(isset($_REQUEST['login']))
      {
          $uname = $_REQUEST['uname'];
          $pass = $_REQUEST['pass'];
        //  $rem = $_REQUEST['remember']; 
                  
          $data = array("user_name"=>$uname,"password"=>$pass);
          $login = $obj->select_where($con,"admin1",$data);
          $fe = $login->fetch_object();
              
          
          
          if($login->num_rows==1)
          {
              if($rem==1)
              {
                  setcookie("name",$uname,time()+3600);
              }
              else
              {
              }
              $_SESSION['name'] = $fe->user_name;
              $_SESSION['id'] = $fe->admin_id;
              $_SESSION['img']=$fe->image;
              
              
              header("location:dashboard.php");
          }
          else
          {
              echo "<script>alert('Wrong username Or password');</script>";
          }
      }
    
      // Insert Category Details
      
      if(isset($_REQUEST["cat_sub"]))
       {
         $cat =$_REQUEST["category"];
         
         $data = array("category_name"=>$cat);
         $cat_ins = $obj->insert($con,"category",$data);
         if($cat_ins==true)
         {
               header("location:category.php");
         }
       }  
       
       
       // delete Category Details
       
       if(isset($_REQUEST['did']))
       {
           $did = $_REQUEST['did'];
           $where = array("category_id"=>$did);
           $cat_del = $obj->delete($con, "category", $where);
           if($cat_del==true)
           {
               header("location:category.php");
           }
       }
       
       //Insert Subcategory Details
       
       if(isset($_REQUEST["subcat_sub"]))
       {
            $category =$_REQUEST["category"];
            $subcategory =$_REQUEST["subcategory"];
            
            $data = array("category_id"=>$category,"subcategory_name"=>$subcategory);
            $subcat_ins = $obj->insert($con,"subcategory",$data);
            
            if($subcat_ins==true)
            {
                header("location:subcategory.php");
            }
       }
  
       // Delete Subcategory Records
       
       if(isset($_REQUEST['delsub']))
       {
           $did = $_REQUEST['delsub'];
           
           $where = array("subcat_id"=>$did);
           $subcat_del = $obj->delete($con, "subcategory", $where);
           if($subcat_del==true)
           {
               header("location:subcategory.php");
           }
       }
       
       // Edit Subcategory Details
       
         if(isset($_REQUEST['edtsubcat']))
         {
             $eid = $_REQUEST['edtsubcat'];
             $where = array("subcat_id"=>$eid);
             $subcat = $obj->select_where($con, "subcategory", $where);
             $subcat_data = $subcat->fetch_object();
             
             //Update Subcategory
             
             if(isset($_REQUEST['upd_subcat']))
             {
                 //echo "<script>alert('Hello');</script>";
                 $cat = $_REQUEST['category'];
                 $sub_cat = $_REQUEST['subcategory'];
                 
                 $data = array("category_id"=>$cat,"subcategory_name"=>$sub_cat);
                 $upd_subcat = $obj->update($con, "subcategory", $data, $where);
                 if($upd_subcat==true)
                 {
                     //echo "<script>alert('Hello');</script>";
                     header("location:subcategory.php");
                 }
             }
             
         }
         
         // Delete Business Person Details
         
         if(isset($_REQUEST['bp_del']))
         {
             $bp_del = $_REQUEST['bp_del'];
             $where = array("cust_id"=>$bp_del);
             $bp_data = $obj->delete($con, "customer", $where);
             if($bp_data==true)
             {
                 header("location:users.php");
             }
         }
          
         
         // Delete innovators Details
         
         if(isset($_REQUEST['inn_del']))
         {
             $inn_del = $_REQUEST['inn_del'];
             $where = array("cust_id"=>$inn_del);
             $inn_data = $obj->delete($con, "customer", $where);
             if($inn_data==true)
             {
                 header("location:innovaators.php");
             }
         }
         
         //Insert State Details
         
         if(isset($_REQUEST['state_sub']))
         {
             $state_name = $_REQUEST['state'];
             
             $data = array("state_name"=>$state_name);
             $state_ins = $obj->insert($con,"state",$data);
             if($state_ins==true)
             {
                 header("location:state.php");
             }
         }
         
         // Insert City Details
         
         if(isset($_REQUEST['city_sub']))
         {
             $state = $_REQUEST['state'];
             $city = $_REQUEST['city'];
             
             $data = array("state_id"=>$state,"city_name"=>$city);
             $city_ins = $obj->insert($con,"city",$data);
             if($city_ins==true)
                {
                    header("location:city.php"); 
                }
         }
         
         // edit City details
         
          if(isset($_REQUEST['edt_city']))
          {
              $edt_city = $_REQUEST['edt_city'];
              $where = array("ct_id"=>$edt_city);
              $city_data = $obj->select_where($con, "city", $where);
              $ct = $city_data->fetch_object();
              
                 // Update City Details
              
            if(isset($_REQUEST['upd_city']))
          {
              echo "<script>alert('Hello'');</script>";
              $state = $_REQUEST['state'];
              $city = $_REQUEST['city'];
              
              $data = array("state_id"=>$state,"city_name"=>$city);
              $upd_city = $obj->update($con, "city", $data, $where);
              if($upd_city==true)
              {
                  header("location:city.php");
              }
          }
          }
          
          // Delete City Details
          
          if(isset($_REQUEST['ct_del']))
          {
              $ct_del = $_REQUEST['ct_del'];
              $where = array("ct_id"=>$ct_del);
              $city_del = $obj->delete($con, "city", $where);
                    if($city_del==true)
                     { 
                       header("location:city.php");
                     }
          }
          
          // Edit State Details
           
            if(isset($_REQUEST['edt_state']))
             {
                     $edt = $_REQUEST['edt_state'];
                     $where = array("state_id"=>$edt);
                     $st = $obj->select_where($con, "state", $where);
                     $st_data = $st->fetch_object();
                     
                     // update State Details
                     
                     if(isset($_REQUEST['upd_state']))
                     {
                         
                         $state = $_REQUEST['state'];
                         
                         $data = array("state_name"=>$state);
                         $upd_state = $obj->update($con,"state",$data,$where);
                         if($upd_state==true)
                         {
                             header("location:state.php");
                         }
                     }
             }
             
             // delete State details
             
             if(isset($_REQUEST['del_state']))
             {
                 $did = $_REQUEST['del_state'];
                 $where = array("state_id"=>$did);
                 $del = $obj->delete($con, "state", $where);
                 if($del==true)
                 {
                     header("location:state.php");
                 }
             }
             
             // Delete Feedback details
             
             if(isset($_REQUEST['fb_del']))
             {
                 $fb_del = $_REQUEST['fb_del'];
                 $where = array("fb_id"=>$fb_del);
                 $del = $obj->delete($con, "feedback", $where);
                 if($del==true)
                 {
                     header("location:feedback.php");
                 }
             }
             
             //delete order details
             
             if(isset($_REQUEST['del_order']))
             {
                 $del = $_REQUEST['del_order'];
                 $where = array("order_id"=>$del);
                 $del_data = $obj->delete($con, "orders", $where);
                 if($del_data==true)
                 {
                     header("location:orders.php");
                 }
             }
             
           // Insert Customer Registration Details
           
             if(isset($_REQUEST["cust_sub"]))
               {
                    $ctype= $_REQUEST["cttype"];
                    $fname= $_REQUEST["fname"];
                    $lname= $_REQUEST["lname"];
                    $email= $_REQUEST["email"];
                    $pass= $_REQUEST["pass"];
                    $dat= $_REQUEST["dob"];
                    $date1 = date_create($dat);
                    $dt1 = date_format($date1, "Y-m-d");
                    $com= $_REQUEST["company"];
                    $add= $_REQUEST["address"];
                    $add2=$_REQUEST['address2'];
                    $city= $_REQUEST["city"];
                    $state= $_REQUEST["state"];
                    $zcode= $_REQUEST["zcode"];
                    $country= $_REQUEST["country"];
                    $adinfo= $_REQUEST["adinfo"];
                    $hm= $_REQUEST["phone"];
                    $mn= $_REQUEST["mobile"];
                    $date = date("Y-m-d");
                    
                 $data = array("first_name"=>$fname,"last_name"=>$lname,"email"=>$email,"password"=>$pass,"dob"=>$dt1,"company"=>$com,"address"=>$add,
                                  "address2"=>$add2,"city"=>$city,"state"=>$state,"zipcode"=>$zcode,"country"=>$country,"add_information"=>$adinfo,
                                        "home_phone"=>$hm,"mobile_phone"=>$mn,"cust_type"=>$ctype,"reg_date"=>$date);   
               
                 $cust_ins = $obj->insert($con, "customer", $data);
                 if($cust_ins==true)
                 {
                     header("location:login.php");
                 }
               }
               
               // Customer Login Details
               
               if(isset($_REQUEST['login_sub']))
               {
                   $u = $_REQUEST['uname'];
                   $p = $_REQUEST['pass'];
                   $cust_type = $_REQUEST['customertype'];
                   $rem = $_REQUEST['rem'];
                   $where = array("first_name"=>$u,"password"=>$p,"cust_type"=>$cust_type);
                   $login = $obj->select_where($con, "customer", $where);
                   if($login->num_rows==1)
                   {
                       $lg_data = $login->fetch_object();
                       $_SESSION['name']=$lg_data->first_name; 
                       $_SESSION['id']=$lg_data->cust_id; 
                       
                       if($rem==1)
                       {
                           setcookie("name",$u,time()+3600);
                       }
                           
                       if($lg_data->cust_type=="1")
                       {
                           header("location:User/index.php");
                       }
                       else
                       {
                           header("location:Innovators/index.php");
                       }
                   }
                   else
                   {
                       echo "<script>alert('Wrong Username Or password');</script>";
                   }
               }
               
               // Delete inquiry Details
               
               if(isset($_REQUEST['in_del']))

               {
                   $del = $_REQUEST['in_del'];
                   $data = array("cont_id"=>$del);
                   $cont_del = $obj->delete($con, "contact_us", $data);
                   if($cont_del==true)
                   {
                       header("location:inquiry.php");
                   }
               }
               
               // Edit Category details
               
               
               if(isset($_REQUEST['edt_cat']))
               {
                   $edt = $_REQUEST['edt_cat'];
                   $where = array("category_id"=>$edt);
                   $edt_data = $obj->select_where($con, "category", $where);
                   $edit = $edt_data->fetch_object();
                   
                   // Update category details
                   
                   if(isset($_REQUEST['upd_cat']))
                   {
                       $cat = $_REQUEST['category'];
                       $data = array("category_name"=>$cat);
                       $upd = $obj->update($con,"category", $data, $where);
                       if($upd==true)
                       {
                           header("location:category.php");
                       }
                   }
               }
    // Join Three Tables
           
        // $emp_dep_des = $obj->join_three($conn,"employee_details","department","employee_details.dept_id=department.dept_id","designation","employee_details.desg=designation.des_id");
         
           
    //Join Four
   
         //  $te_tl_pr_em = $obj->join_three($conn, "assign_project", "technology", "assign_project.technology=technology.tech_id","employee_details","assign_project.tl_id=employee_details.emp_id","project","assign_project.project_name=project.pro_id");
           
    // Count Records
           
           //$emp = $obj->count_records($conn,"employee_details");
           
                   
?>
