
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Company_tests/new_testsubmit" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Company</label>
                                                                <input type="hidden" name="company_id" value="<?php echo $company_id;?>">
                                                                <input type="text" class="form-control" value="<?php echo $this->db->get_where('company',array('company_id'=>$company_id))->row()->company;?>" readonly>
                                                              </div>
															 									
														<div class="form-group">
                                                            <label class="control-label">Test Number</label>
                                                                <input type="text"  name="count" class="form-control">
                                                              </div>
														<div class="form-group">
                                                            <label class="control-label">Test Title</label>
                                                                <input type="text"  name="test_title" class="form-control" placeholder="Test Title">
                                                              </div>
															  
														<div class="form-group">
                                                            <label class="control-label">Request Date</label>
                                                                <input type="date"  name="request_date" class="form-control" placeholder="Request Date">
                                                              </div>
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
														   <a href="<?php echo base_url();?>Companies/view/<?php echo $company_id;?>" class="btn default"> << BACK</a>
                                                           <button type="submit" class="btn default">>> CONTINUE</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>