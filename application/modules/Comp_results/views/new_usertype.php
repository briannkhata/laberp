
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>User_type/submit" method="post">
                                                 
                                                    <div class="form-body">
                                                  

                                                         <div class="form-group">
                                                            <label class="control-label">Usertype</label>
                                                                <input type="text" class="form-control" name="desc" id="desc" placeholder="Usertype" value="<?php if (!empty($desc)){echo $desc;}?>">
                                                               
                                                        </div>
                                                      
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Usertype</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>