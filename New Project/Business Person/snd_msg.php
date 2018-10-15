<?php
        include './Database/Controler.php';
?>
<form method="post">
    <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
            <div class="col-lg-5">
                <textarea class="form-control" rows="4" id="message" name="message"></textarea></div>
                    <input type="hidden" id="mid" name="mid" value="<?php if($_SESSION['actp']=='b'){echo $_REQUEST["iid"]; }?>">
   </div>
                <div class="form-group ">
                    <button type="submit" name="MSG_Submit" value="Message" class="btn btn-primary">Message</button>
                </div>
</form>