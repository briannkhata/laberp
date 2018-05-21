
                                <div class="row">
                                    <div class="col-md-12">
<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>Groups/submit" method="post">
                                                    <div class="form-body">
                                                     
                                                        <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Group Name</label>
                                                            <input type="text" class="form-control" name="group_name" id="group_name" 
                                                            value="<?php if (!empty($group_name)){echo $group_name;}?>" placeholder="Group Name">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>


                                                    <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Has Units</label>
                                                            <select class="form-control" name="has_units">
                                                             
                                                                <option <?php if(1 == $has_units){echo 'selected';};?> value="1">Has Units
                                                                </option>
                                                                <option <?php if(0 == $has_units){echo 'selected';};?> value="0">Has No Units
                                                                </option>
                                                            </select>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>


                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Description</label>
                                                              <input type="text" class="form-control" value="<?php if (!empty($description)){echo $description;}?>" name="description" id="description">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                                                                      
                                                    </div>
                                                    <div class="form-actions" style="background-color: white; border: none;">
                                                       <div class="col-md-12">
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Group</button>
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