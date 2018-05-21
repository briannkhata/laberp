<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
          <div class="portlet-body" style="padding-top:20px;">
              <div class="table-toolbar">
                <div class="row">
                 <div class="col-md-6">
                    <div class="btn-group">
       <?php 
          if(isset($sub_module_id))
          {
            $modules_actions = $this->db->select('*')
            ->from('sub_module_actions')
            ->join('user_sub_module_actions','user_sub_module_actions.sub_module_action_id = sub_module_actions.sub_module_action_id')
            //->join('users','user_sub_module_actions.user_id = users.user_id')
            ->where('sub_module_actions.sub_module_id',$sub_module_id)
            ->where('user_type',$this->session->userdata('user_type'))
            ->order_by('sort','ASC')->group_by('user_sub_module_actions.sub_module_action_id')->get()->result_array();
            if(count($modules_actions) > 0)
              {?>
            
              <span> 
                    <?php foreach($modules_actions as $row){ 
                         if($row['sub_module_action_id'] != 'view'){
                         ?>
                      <a  
                      <?php if ($row['sub_module_action_id'] =='delete'){?>
                       onclick="deletee();" <?php }
                      else
                        {?>
                        href ="<?php echo $sub_module_id.'/'.$row['sub_module_action_id'];?>"
                      <?php } ?> 

                      class="<?php echo $row['class'];?>"> <i class="<?php echo $row['icon'];?>"></i> 
                    <?php echo strtoupper($row['desc']);?>
                  </a>
              <?php }}?>               
                     <button class="btn btn-sm" onclick="window.print()"> <i class="fa fa-print"></i> PRINT </button>
              </span>
              <?php 
            }?> 

        <?php  }
        elseif(isset($module_id))
        {
            $modules_actionss = $this->db->select('*')
            ->from('modules_actions')
            ->join('user_module_actions','user_module_actions.action_id = modules_actions.action_id')
            //->join('users','user_module_actions.user_id = users.user_id')
            ->where('modules_actions.module_id',$module_id)
            ->where('user_type',$this->session->userdata('user_type'))
            ->order_by('sort','ASC')->group_by('user_module_actions.action_id')->get()->result_array();
            if(count($modules_actionss) > 0)
              {?>
              <span> 
                    <?php foreach($modules_actionss as $row99){ 
                         if($row99['action_id'] != 'view'){
                         ?>
                      <a  
                      <?php if ($row99['action_id'] =='delete'){?>
                       onclick="deletee();" <?php }
                      else
                        {?>
                        href ="<?php echo $module_id.'/'.$row99['action_id'];?>"
                      <?php } ?> 

                      class="<?php echo $row99['class'];?>"> <i class="<?php echo $row99['icon'];?>"></i> 
                    <?php echo strtoupper($row99['desc']);?>
                  </a>
              <?php }}?>               
                     <button class="btn btn-sm" onclick="window.print()"> <i class="fa fa-print"></i> PRINT </button>
              </span><?php }}?>   

                </div>
              </div>
          </div>
        </div>
              <hr>
                 <?php if ($this->session->flashdata('message')) { ?>
                                                <div class="alert alert-info">
                                                  <button class="close" data-close="alert"></button>
                                                  <span>
                                                    <?php echo $this->session->flashdata('message'); ?> 
                                                  </span>
                                                </div>
                                                <?php }?>
              <table class="table table-striped table-bordered table-hover">
              <thead>
              <tr>
                <th class="table-checkbox">
                  <input type="checkbox" class="checkall"/>
                </th>
                <th>User_type</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($usertype as $row) {?>
              <tr class="odd gradeX">
                <td>
                  <input type="checkbox" class="checkboxes" name="user_type[]" value="<?php echo $row['user_type'];?>"/>
                </td>
                <td><?php echo $row['desc'];?></td>                           
                <td>
                <?php
                                 if(isset($sub_module_id))
                                    {
                                      $mos = $this->db->select('*')
                                      ->from('sub_module_actions')
                                      ->join('user_sub_module_actions','user_sub_module_actions.sub_module_action_id = sub_module_actions.sub_module_action_id')
                                      //->join('users','user_sub_module_actions.user_id = users.user_id')
                                      ->where('sub_module_actions.sub_module_id',$sub_module_id)
                                     ->where('user_type',$this->session->userdata('user_type'))
                                      ->order_by('sort','ASC')->group_by('user_sub_module_actions.sub_module_action_id')->get()->result_array();
                                      if(count($mos) > 0)
                                        {
                                        foreach($mos as $roww){
                                     if($roww['sub_module_action_id'] != 'create' AND $roww['sub_module_action_id'] != 'view'){ echo '';} else {?>
                      <a href="<?php echo $sub_module_id.'/'.$roww['sub_module_action_id'].'/'.$row['user_type'];?>" class="<?php if ($roww['sub_module_action_id'] == 'create'){
                      echo "btn btn-xs btn-success";} else {echo $roww['class'];}?>"> 
                    <?php if ($roww['sub_module_action_id'] == 'create'){?> 
                    <i class="fa fa-edit"></i> Edit
                            <?php } else{?>
                    <i class="<?php echo $roww['icon'];?>"></i> 
                       <?php echo ucwords($roww['desc']);}?>
                </a><?php }}}}

                        elseif(isset($module_id))
                       {      $mc = $this->db->select('*')
                                  ->from('modules_actions')
                                  ->join('user_module_actions','user_module_actions.action_id = modules_actions.action_id')
                                  //->join('users','user_module_actions.user_id = users.user_id')
                                  ->where('modules_actions.module_id',$module_id)
            ->where('user_type',$this->session->userdata('user_type'))
                                  ->order_by('sort','ASC')->group_by('user_module_actions.action_id')->get()->result_array();
                                   if(count($mc) > 0)
                                    {
                                  foreach($mc as $roww9){
                                     if($roww9['action_id'] != 'create' AND $roww9['action_id'] != 'view'){ echo '';} else {?>
                       <a href="<?php echo $module_id.'/'.$roww9['action_id'].'/'.$row['user_type'];?>"  class="<?php if ($roww9['action_id'] == 'create') {
                        echo "btn btn-xs btn-success";} else {echo $roww9['class'];}?>"> 
                    <?php if ($roww9['action_id'] == 'create'){?> 
                    <i class="fa fa-edit"></i> Edit
                            <?php } else{?>
                    <i class="<?php echo $roww9['icon'];?>"></i> 
                       <?php echo ucwords($roww9['desc']);}?>
                </a><?php }}}} else{}?> 
                </td>
              </tr>
            <?php }?>
            
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

          <script type="text/javascript">
             function deletee()
              {
                 var user_type = [];
                  jQuery('.checkboxes:checked').each(function(i,e){
                    user_type.push(jQuery(this).val());
                  });
                  if(user_type ==''){
                    alert('SELECT ATLEAST USERTYPE TO DELETE');
                  }else{
                 if(confirm('Are you sure ????'))
                {
                  
                  jQuery.post("User_type/delete",
                  {
                     user_type : user_type
                  },
                  function(data,status){
                    //if(data){
                      //location.href="Suppliers";
                      location.reload();
                   // }
                  });
                }
              }
            }

    
          </script>