<?php 

$onse = $this->db->get_where('comp_staff',array('company_id' =>$company_id))->result_array();
foreach ($onse as $row) {?>
               
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Companies/submitoo" method="post">
                                                 
                                                    <div class="form-body">
                                                  <br>
                                                         <div class="form-group">
                                                            <label class="control-label">Staff</label>
                                                         <input type="text" name="name" class="form-control" value="<?php echo $row['name'];?>">
                                                        </div>
														 <div class="form-group">
                                                            <label class="control-label">Phone</label>
                                                         <input type="text" name="phone" class="form-control" value="<?php echo $row['phone'];?>">
														<input type="hidden" name="company_id" value="<?php echo $company_id;?>">
														<input type="hidden" name="cstaff_id" value="<?php echo $cstaff_id;?>">
                                                        </div>
														<div class="form-group">
                                                            <label class="control-label">Age</label>
                                                         <input type="number" name="age" class="form-control" value="<?php echo $row['age'];?>">
                                                        </div>
														
														 <div class="form-group">
                                                            <label class="control-label">Gender</label>
                                                               <select name="gender" class="form-control">
                                                               	<option disabled="" selected="">--Select Gender--</option>
                                                               
                                                               	<option <?php if($row['gender']=='Male'){ echo 'selected';}?> value="Male">
                                                               		Male
                                                               		</option <?php if($row['gender']=='Female'){ echo 'selected';}?>>
																		<option value="Female">
                                                               		Female
                                                               		</option>
                                                               		
                                                               </select>
                                                        </div>
														 <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                         <input type="text" name="e_address" class="form-control" value="<?php echo $row['e_address'];?>">
                                                        </div>
                                                      
														</div>
                                                    <div class="form-actions">    
                                                        <div class="btn-set pull-left">  
                                                            <a href="<?php echo base_url();?>Companies/view/<?php echo $company_id;?>" class="btn default"><< Back</a>
                                                            <button type="submit" class="btn default">Save Staff</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                       

                       <?php } ?>