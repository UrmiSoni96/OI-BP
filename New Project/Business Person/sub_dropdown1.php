<?php
    include './Database/Controler.php';
    if(isset($_REQUEST["ctgid"]))
    {
?>
<option value="">--Select SubCategory--</option>
<?php

    $where=array("category_id"=>$_REQUEST["ctgid"]);
    $res=$md->dis_mul($con,"subcategory", $where);
    if(isset($res))
    {
        foreach($res as $rs)
        {
?>
<option value="<?php echo $rs->s_id; ?>"<?php if($_SESSION["curr_sid"]==$rs->s_id) {?>selected="selected"<?php }?>><?php echo $rs->s_name; ?></option>
    <?php }}} ?>
