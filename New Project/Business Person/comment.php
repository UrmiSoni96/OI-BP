<?php
    include './Database/Controler.php';
    ?>
<form method="post">
                <div class="form-group " style="margin-left:280px;color:black;font-size:15pt;">
                    <label class="col-sm-2 control-label col-lg-2 " for="inputSuccess">Comment:*</label>
                        <div class="col-lg-5">
                            <textarea class="form-control" rows="4" id="comment" name="comment"></textarea></div>
                            <input type="hidden" id="iid" name="iid" value="<?php echo $_REQUEST["iid"]; ?>">
                </div>
    
                <div class="form-group ">
                    <button type="submit" name="CMNT_Submit" value="comment" class="btn btn-primary">Comment</button>
                </div>
</form>