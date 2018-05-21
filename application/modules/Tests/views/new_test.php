
                                <div class="row">
                                    <div class="col-md-12">
                                      
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                               
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Tests/submit" method="post">
        
                                                        <br>                                       
                                                    <div class="form-body">
                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Test Code</label>
                                                            <input type="text" class="form-control" name="test_code" id="test_code" 
                                                            value="<?php if (!empty($test_code)){echo $test_code;}?>" placeholder="Test Code">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Name</label>
                                                            <input type="text" class="form-control" placeholder="Test Name" name="test_name" id="test_name" value="<?php if (!empty($test_name)){echo $test_name;}?>" required>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">Amount</label>
                                                            <input type="text" class="form-control" placeholder="Amount" name="amount" id="amount" value="<?php if (!empty($amount)){echo $amount;}?>" required>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                
                                                   
                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Group</label>
                                                            <select name="group_id" class="form-control">
                                                                <?php $cat = $this->db->get_where('group',array('deleted' =>0))->result_array();
                                                                foreach ($cat as $row) {?>
                                                                <option <?php if($group_id==$row['group_id']) {echo 'selected';};?> value="<?php echo $row['group_id'];?>"><?php echo $row['group_name'];?></option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="form-actions" style="background-color: white; border: none;">
                                                        <div class="col-md-12">
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <a href="<?php echo base_url();?>Tests" class="btn default"><< Back</a>
                                                            <button type="submit" class="btn default">Save Test</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>