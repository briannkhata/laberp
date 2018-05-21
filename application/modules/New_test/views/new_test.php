
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>New_test/submit" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Company</label>
															<select name="company_id" class="form-control">
															<option selected disabled>--SELECT COMPANY--</option>
															   <?php $cc = $this->db->get_where('company',array('deleted'=>0))->result_array();
															   foreach($cc as $row){?>
															    <option <?php if($row['company_id'] == $company_id){echo 'selected';}?> value="<?php echo $row['company_id'];?>"><?php echo $row['company'];?></option>
															   <?php }?>
															</select>
                                                            </div>
															 									
														<div class="form-group">
                                                            <label class="control-label">Test Number</label>
                                                                <input type="text"  name="count" class="form-control" value="<?php if (!empty($count)){echo $count;}?>">
                                                              </div>
														<div class="form-group">
                                                            <label class="control-label">Test Title</label>
                                                                <input type="text"  name="test_title" class="form-control" placeholder="Test Title" value="<?php if (!empty($test_title)){echo $test_title;}?>">
                                                              </div>
															  
														<div class="form-group">
                                                            <label class="control-label">Request Date</label>
                                                                <input type="date"  name="request_date" class="form-control" placeholder="Request Date" value="<?php if (!empty($request_date)){echo $request_date;}?>">
                                                              </div>
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
														 <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
														   <a href="<?php echo base_url();?>New_test" class="btn default"> << BACK</a>
                                                           <button type="submit" class="btn default">SAVE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>