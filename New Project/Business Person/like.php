<?php
    include './Database/Controler.php';
    
    if(isset($_REQUEST['lid']))
    {
            $l=explode(" ",$_REQUEST["lid"]);
            $t=$_SESSION["actp"];
            $where=array(
                "idea_id"=>$l[0]
                    );
        
            if($l[count($l)-1]!='red')
            {
                    $ldata=array(
                            "idea_id"=>$l[0]
                            );
                    if($t=='b')
                    {
                            $ldata["user_id"]=$_SESSION["id"];
                            $where["user_id"]=$_SESSION["id"];
                    }
                    else
                    {
                            $ldata["innovator_id"]=$_SESSION["id"];
                            $where["innovator_id"]=$_SESSION["id"];
                     }
                
                    $ins = $md->insert($con, $ldata, "likes");
                    //echo "<i class='fa fa-fw fa-heart' style='font-size:30pt;color:red;float:left' ></i>";
                    echo "red";
            }
            else 
            {
                    $md->delete1($con,"likes",$where);
                    echo "#ff6666";
                    //echo "<i class='fa fa-fw fa-heart' style='font-size:30pt;color:#ff6666;float:left' ></i>";
            }
            //$lks=$md->sel_count($con,"like_id","likes",$where);
            //if(isset($lks))
                //echo $lks->num_rows;
            
           //header("location:category.php");
    }
        
?>
