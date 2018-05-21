
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Clinics/submit" method="post">
                                                 
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="control-label">Clinic Name</label>
                                                            <input type="text" class="form-control" placeholder="Clinic Name" name="clinic_name" id="clinic_name" value="<?php if (!empty($clinic_name)){echo $clinic_name;}?>">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (!empty($email)){echo $email;}?>">
                                                        </div>

                                                          <div class="form-group">
                                                            <label class="control-label">Phone</label>
                                                                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php if (!empty($phone)){echo $phone;}?>">
                                                        </div>

                                                          <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php if (!empty($address)){echo $address;}?>">
                                                        </div>
                                                       
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Clinic</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>