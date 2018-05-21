
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>Patients/submit" method="post">
                                                    <div class="form-body">
                                                     
                                                        <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" 
                                                            value="<?php if (!empty($name)){echo $name;}?>" placeholder="Name" required>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>

                                                         <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" 
                                                            value="<?php if (!empty($email)){echo $email;}?>" placeholder="Email" required>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Phone</label>
                                                            <input type="tel" class="form-control" name="phone" id="phone" 
                                                            value="<?php if (!empty($phone)){echo $phone;}?>" placeholder="Phone" required>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                      

                                                     <div class="col-md-2">
                                                         <div class="form-group">
                                                            <label class="control-label">Gender</label>
                                                            <select class="form-control" name="gender" required>
                                                              <option selected="" disabled="">--Select Gender--</option>
                                                                <option <?php if($gender== 'Male'){echo 'selected';};?> 
                                                                    value="Male">Male</option>
                                                                <option <?php if($gender== 'Female'){echo 'selected';};?> 
                                                                    value="Female">Female</option>
                                                            </select>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-2">
                                                         <div class="form-group">
                                                            <label class="control-label">Age</label>
                                                            <input type="text" class="form-control" name="age" value="<?php if (!empty($age)){echo $age;}?>" id="dob">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8">
                                                         <div class="form-group">
                                                            <label class="control-label">Physical Disorder</label>
                                                            <input type="text" class="form-control" name="disorder" value="<?php if (!empty($disorder)){echo $disorder;}?>" id="disorder">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                  

                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                              <input type="text" class="form-control" value="<?php if (!empty($address)){echo $address;}?>" name="address" id="address">
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
                                                            <button type="submit" class="btn default">Save Patient</button>
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