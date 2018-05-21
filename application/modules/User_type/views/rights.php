                                <div class="row">
                                    <div class="col-md-12">
									<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>User_type/save_rights" method="post">
                                                    <div class="form-body">
                                                     
                                                       
                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">
                                                            <b>
                                                            MODULE RIGHTS FOR THE <?php 
                                                            echo strtoupper($this->db->get_where('user_type',array('user_type' =>$user_type))->row()->desc);?> USER</b>
                                                            </label>
                                                            <input type="hidden" name="user_type" value="<?php echo $user_type;?>">
             				<hr>
                          <?php $mod = $this->db->order_by('sort','ASC')->get_where('modules',array('active' =>1))->result_array();
                          foreach ($mod as $row) 
                          {
$given = $this->db->get_where('user_module_actions',array('module_id'=>$row['module_id'],'user_type'=>$user_type))->result_array();?>
                             <p>
                             <input type="checkbox" <?php if(count($given) > 0) { echo 'checked';}?> name="module_id[]" value="<?php echo $row['module_id'];?>" /><b><?php echo ucwords($row['desc'])?></b><br />
                       
                            <?php 
$mod_act = $this->db->order_by('sort','ASC')->get_where('modules_actions',array('module_id' =>$row['module_id']))->result_array();
                              if(count($mod_act) >0)
                              {
                                foreach($mod_act as $dem)
                                  { 
$given1 = $this->db->get_where('user_module_actions',array('module_id'=>$row['module_id'],'action_id'=>$dem['action_id'],'user_type'=>$user_type))->result_array();?>

                                    <span style="margin-left: 2%;">
                                     <input type="checkbox" <?php if(count($given1) > 0)  { echo 'checked';}?>   name="action_id[]" value="<?php echo $dem['action_id'];?>" /><i><?php echo ucwords($dem['desc'])?></i><br />
                                   </span>
                            <?php } 
                              }
$sub_mod = $this->db->order_by('sort','ASC')->get_where('sub_modules',array('module_id' =>$row['module_id']))->result_array();
                              if(count($sub_mod) >0)
                              {
                                foreach($sub_mod as $row0)
                                  { 
$has_rights = $this->db->get_where('user_sub_module_actions',array('sub_module_id'=>$row0['sub_module_id'],'user_type'=>$user_type))->result_array();?>
                                <span style="margin-left: 3%;">
                                    <input type="checkbox" <?php if(count($has_rights) > 0) { echo 'checked';}?> name="sub_module_id[]" value="<?php echo $row0['sub_module_id'];?>" /><?php echo ucwords($row0['sub_module_id'])?><br /></span>
                                   <?php
$sub_mod_act = $this->db->order_by('sort','ASC')->get_where('sub_module_actions',array('sub_module_id' =>$row0['sub_module_id']))->result_array();
                                    if(count($sub_mod_act) >0)
                                    {
                                      foreach($sub_mod_act as $demm)
                                        { 
  $has_rightss = $this->db->get_where('user_sub_module_actions',array('sub_module_id'=>$row0['sub_module_id'],'user_type'=>$user_type,'sub_module_action_id'=>$demm['sub_module_action_id']))->result_array();

                                          ?>
                                          <span style="margin-left: 5%;">
                                           <input type="checkbox" <?php if(count($has_rightss) > 0) { echo 'checked';} ?> name="sub_module_action_id[]" value="<?php echo $demm['sub_module_action_id'];?>" /><i><?php echo ucwords($demm['desc'])?></i><br />
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
                                                            <input type="hidden" name="user_type" value="<?php echo $user_type;?>">
                                                            <a href="<?php echo base_url();?>User_type" class="btn default"><< Back</a>
                                                            <button type="submit" class="btn default">Save Rights</button>
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
