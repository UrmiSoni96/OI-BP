<?php
        include './Database/Controler.php';
        
        //$cm=explode(" ",$_REQUEST["iid"]);
        $where=array(
                "idea.idea_id"=>$_REQUEST["iid"]
            );
        $cdata2=$md->dis_join_con1($con, "idea","comment", "idea.idea_id=comment.idea_id", $where);
?>
<div class="col-md-4">
</div>
<div class="col-md-4">
</div>
<div class="col-md-4">
<?php
        if(isset($cdata2))
        {
            foreach ($cdata2 as $value) 
            {
?>
<?php
                echo "<br><br><h4 style='float:right;'>".$value->comment."</h4>";
?>

<?php
            }
        }
?>
</div>