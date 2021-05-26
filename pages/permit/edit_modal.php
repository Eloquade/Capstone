<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <center>
            <h4 class="modal-title" style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Edit Permit</h4>
            </center>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Name:</label>
                <input name="txt_edit_name" class="form-control input-sm" type="text" value="'.$row['fullname'].'" />
            </div>
                <div class="form-group">
                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Business Name: </label>
                    <input name="txt_edit_busname" class="form-control input-sm" type="text" value="'.$row['businessName'].'"/>
                </div>
                <div class="form-group">
                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Business Address : </label>
                    <input name="txt_edit_busadd" class="form-control input-sm" type="text" value="'.$row['businessAddress'].'" />
                </div>
                <div class="form-group">
                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Type of Business:</label>
                    <input name="txt_edit_type" class="form-control input-sm" type="text" value="'.$row['typeOfBusiness'].'" />
                </div>
                <div class="form-group">
                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">OR Number : </label>
                    <input name="txt_edit_ornum" class="form-control input-sm" type="text" value="'.$row['orNo'].'" />
                </div>
                <div class="form-group">
                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Amount : </label>
                    <input name="txt_edit_amount" class="form-control input-sm" type="text" value="'.$row['samount'].'" />
                </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';?>