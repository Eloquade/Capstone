<?php echo '<div id="editModal'.$row['pid'].'" class="modal fade">
<form method="post">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Clearance</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" value="'.$row['pid'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Name:</label>
                                    <input name="txtedit_name" class="form-control input-sm" type="text" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Purpose:</label>
                                    <input name="txtedit_purpose" class="form-control input-sm" type="text" placeholder="Purpose"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Street:</label>
                                    <input name="txtedit_street" class="form-control input-sm" type="text" placeholder="Street"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;">Amount:</label>
                                    <input name="txtedit_amount" class="form-control input-sm" type="number" placeholder="Amount"/>
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