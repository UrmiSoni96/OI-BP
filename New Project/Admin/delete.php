<?php
include '../Admin/inc/connection.php';


 if($id=$_REQUEST["id"])
 {
  $con->query("delete from categories_detail where category_id='$id'");
    header('location:category.php');
 }
 
 
 if($stid=$_REQUEST["stid"])

 {

$con->query("delete from state_detail where state_id='$stid'");
   
       header('location:state.php');
 }  

?>
