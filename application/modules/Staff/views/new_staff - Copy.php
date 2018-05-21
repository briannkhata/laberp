
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box" style="border: 1px solid white;">
                                            
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

                                                      

                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Username</label>
                                                            <input type="text" class="form-control" name="username" id="username" 
                                                            value="<?php if (!empty($username)){echo $username;}?>" placeholder="Username">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>

                                                     <div class="col-md-6">
                                                         <div class="form-group">
                                                            <label class="control-label">Password</label>
                                                            <input type="password" class="form-control" name="password" id="password">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>


                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                              <textarea class="form-control" name="address" id="address">
                                                                        <?php if (!empty($address)){echo $address;}?>
                                                                    </textarea>
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <hr>


                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Rights</label>
             
                          <?php $mod = $this->db->order_by('sort','ASC')->get_where('modules',array('active' =>1))->result_array();
                          foreach ($mod as $row) 
                          {?>
                            <p>
                             <input type="checkbox" name="module_id[]" value="<?php echo $row['module_id'];?>" /><b><?php echo ucwords($row['desc'])?></b><br />

                            <?php
                        $mod_act = $this->db->order_by('sort','ASC')->get_where('modules_actions',array('module_id' =>$row['module_id']))->result_array();
                              if(count($mod_act) >0)
                              {
                                foreach($mod_act as $dem)
                                  { ?>
                                    <span style="margin-left: 2%;">
                                     <input type="checkbox" name="action_id[]" value="<?php echo $dem['action_id'];?>" /><i><?php echo ucwords($dem['desc'])?></i><br />
                                   </span>
                            <?php } 
                              }
                           

                            $sub_mod = $this->db->order_by('sort','ASC')->get_where('sub_modules',array('module_id' =>$row['module_id']))->result_array();
                              if(count($sub_mod) >0)
                              {
                                foreach($sub_mod as $row0)
                                  { ?>
                                    <span style="margin-left: 3%;">
                                    <input type="checkbox" name="sub_module_id[]" value="<?php echo $row0['sub_module_id'];?>" /><?php echo ucwords($row0['sub_module_id'])?><br /></span>


                                   <?php
        $sub_mod_act = $this->db->order_by('sort','ASC')->get_where('sub_module_actions',array('sub_module_id' =>$row0['sub_module_id']))->result_array();
                                    if(count($sub_mod_act) >0)
                                    {
                                      foreach($sub_mod_act as $demm)
                                        { ?>
                                          <span style="margin-left: 5%;">
                                           <input type="checkbox" name="sub_module_action_id[]" value="<?php echo $demm['sub_module_action_id'];?>" /><i><?php echo ucwords($demm['desc'])?></i><br />
                                         </span>
                                  <?php } 
                                    }


                                  } 
                              }
                           
                          }?>
                                </p>
                                </div>

                    </div>
                                                                                                            
                                                    </div>
                                                    <div class="form-actions" style="background-color: white; border: none;">
                                                       <div class="col-md-12">
                                                        <div class="btn-set pull-right">
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