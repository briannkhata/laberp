
                                <div class="row">
                                    <div class="col-md-12">
                                    <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>Profile/submit" method="post">
                                                    <div class="form-body">
                                                     
                                                        <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">UserName</label>
                                                            <input type="text" class="form-control" value="<?php echo $username;?>" name="username" id="username" 
                                                           placeholder="UserName">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>

                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">New Password</label>
                                                              <input type="password" class="form-control" name="password" id="password">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Confirm Password</label>
                                                              <input type="password" class="form-control" name="cpassword" id="password">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                                                                      
                                                    </div>
                                                    <div class="form-actions" style="background-color: white; border: none;">
                                                       <div class="col-md-12">
                                                        <div class="btn-set pull-left">
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Change Password</button>
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