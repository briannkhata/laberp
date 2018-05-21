<?php $currency = $this->db->get('labo')->row()->currency;?>
<div class="portlet box" style="border: 1px solid white;">
          <div class="portlet-body" style="padding-top:20px;">
              <div class="table-toolbar">
                <div class="row">
                 <div class="col-md-6">
                    <div class="btn-group">
   

                </div>
              </div>
          </div>
        </div>
              <hr>

              <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN SAMPLE TABLE PORTLET-->
                    <div class="portlet box">
                     
                        <div class="portlet-body">
                            <div class="table-scrollable">
                                <table class="table table-bordered table-hover">
                                <tbody>
                                    <?php $staff = $this->db->get_where('users',array('user_id' =>$user_id))->result_array();
                                    foreach ($staff as $row) {?>
                                        <tr class="active">
                                            <td>Name</td><td><?php echo $row['name'];?></td>
                                        </tr>
                                         <tr class="success">
                                            <td>UserName</td><td><?php echo $row['username'];?></td>
                                        </tr>
                                         <tr class="info">
                                            <td>Phone</td><td><?php echo $row['phone'];?></td>
                                        </tr>
                                         <tr class="active">
                                            <td>Email</td><td><?php echo $row['email'];?></td>
                                        </tr>
                                          <tr class="info">
                                            <td>Address</td><td><?php echo $row['address'];?></td>
                                        </tr>
                                    <?php }?>
                               
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE TABLE PORTLET-->
                </div>

            </div>
          </div>
        </div>
      </div>

     

















































