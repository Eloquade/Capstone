<!-- ========================= MODAL ======================= -->
<div id="addModal" class="modal fade">
            <form method="post">
              <div class="modal-dialog modal-sm" style="width:300px !important;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <center>
                        <h4 class="modal-title" style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Manage Permit</h4>
    </center>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Name:</label>
                                    <input name="txt_name" class="form-control input-sm" type="text" placeholder="Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Business Name:</label>
                                    <input name="txt_busname" class="form-control input-sm" type="text" placeholder="Business Name"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Business Address:</label>
                                    <input name="txt_busadd" class="form-control input-sm" type="text" placeholder="Business Address"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Type of Business:</label>
                                    <input name="txt_type" class="form-control input-sm" type="text" placeholder="Type of Business"/>
                                                                    
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >OR Number:</label>
                                    <input name="txt_ornum" class="form-control input-sm" type="number" placeholder="OR Number"/>
                                </div>
                                <div class="form-group">
                                    <label style="color: black; text-shadow: 2px 2px 4px #87CEEB;" >Amount:</label>
                                    <input name="s_amount" class="form-control input-sm" type="number" value="500" disable/>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
                        <input type="submit" class="btn btn-primary btn-sm" name="btn_add" value="Add Permit"/>
                    </div>
                </div>
              </div>
              </form>
            </div>