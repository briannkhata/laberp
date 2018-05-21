
                                <div class="row">
                                    <div class="col-md-12">
<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>Staff/submit" method="post">
                                                    <div class="form-body">
                                                     
                                                        <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Name</label>
                                                            <input type="text" class="form-control" name="name" id="name" 
                                                            value="<?php if (!empty($name)){echo $name;}?>" placeholder="Name">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>

                                                         <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" 
                                                            value="<?php if (!empty($email)){echo $email;}?>" placeholder="Email">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Phone</label>
                                                            <input type="tel" class="form-control" name="phone" id="phone" 
                                                            value="<?php if (!empty($phone)){echo $phone;}?>" placeholder="Phone">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                      

                                                     <div class="col-md-3">
                                                         <div class="form-group">
                                                            <label class="control-label">Username</label>
                                                            <input type="text" class="form-control" name="username" id="username" 
                                                            value="<?php if (!empty($username)){echo $username;}?>" placeholder="Username">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-3">
                                                         <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                         <div class="form-group">
                                                            <label class="control-label">Job Title</label>
                                                            <input type="text" class="form-control" name="jobtitle" value="<?php if (!empty($jobtitle)){echo $jobtitle;}?>" id="jobtitle">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                         <div class="form-group">
                                                            <label class="control-label">User Level</label>
                                                            <select class="form-control" name="user_type">
                                                              <option selected="" disabled="">--Select User type--</option>
                                                              <?php $onse = $this->db->get_where('user_type',array('deleted' =>0))->result_array();
                                                              foreach ($onse as $row) {?>
                                                                <option <?php if($user_type== $row['user_type']){echo 'selected';};?> value="<?php echo $row['user_type'];?>"><?php echo $row['desc'];?></option>
                                                                <?php }?>
                                                            </select>
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
                                                            <button type="submit" class="btn default">Save Staff</button>
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