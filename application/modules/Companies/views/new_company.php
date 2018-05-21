
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Companies/submit" method="post">
                                                 
                                                    <div class="form-body">
                                                  

                                                         <div class="form-group">
                                                            <label class="control-label">Company Name</label>
                                                                <input type="text" class="form-control" name="company" id="company" placeholder="Company Name" value="<?php if (!empty($company)){echo $company;}?>">
                                                        </div>
														
                                                         <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php if (!empty($address)){echo $address;}?>">
                                                               
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Company</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>