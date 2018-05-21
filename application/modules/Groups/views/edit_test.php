<?php 

$onse = $this->db->get_where('tests',array('test_id' =>$test_id))->result_array();
foreach ($onse as $row) {?>
                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Groups/submitoo" method="post">
                                                 
                                                    <div class="form-body">
                                                         <div class="form-group">
                                                            <label class="control-label">Test Code</label>
                                                         <input type="hidden" name="group_id" value="<?php echo $group_id;?>">
                                                         <input type="hidden" name="test_id" value="<?php echo $test_id;?>">
                                                         <input type="text" name="test_code" class="form-control" value="<?php echo $row['test_code'];?>">
                                                        </div>

													<div class="form-group">
                                                          <label class="control-label">Test Name</label>
									                                        <input type="text" name="test_name" value="<?php echo $row['test_name'];?>"  class="form-control">
														                          </div>
														
														
													<div class="form-group">
                                                          <label class="control-label">Amount</label>
									                                        <input type="text" name="amount" value="<?php echo $row['amount'];?>"  class="form-control">
														                          </div>

                                                    <div class="form-actions">
                                                        <div class="btn-set pull-left">
                                                            <a href="<?php echo base_url();?>Groups/view/<?php echo $group_id;?>" class="btn default"><< Back</a>
                                                            <button type="submit" class="btn default">Save Test</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                       <?php } ?>