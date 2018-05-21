<?php 

$onse = $this->db->get_where('test_parameters',array('test_parameter_id' =>$test_parameter_id))->result_array();
foreach ($onse as $rowo) {?>
                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Tests/submitoo" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Test</label>
                                                         <input type="hidden" name="test_id" value="<?php echo $test_id;?>">
                                                        <input type="hidden" name="test_parameter_id" value="<?php echo $test_parameter_id;?>">
                                                               <select name="category_id" class="form-control">
                                                               	<option disabled="" selected="">--Select Category--</option>
                                                               	<?php $tests = $this->db->get_where('category',array('deleted' =>0))->result_array();
                                                               	foreach ($tests as $row) {?>
                                                               	<option <?php if ($rowo['category_id'] == $row['category_id']){echo 'selected';}?> value="<?php echo $row['category_id'];?>">
                                                               		<?php echo $row['category'];?>
                                                               		</option>
                                                               		<?php }?>
                                                               </select>
                                                        </div>

															<div class="form-group">
                                                          <label class="control-label">Parameter</label>
									                                        <input type="text" name="test_parameter" value="<?php echo $rowo['test_parameter'];?>"  class="form-control" placeholder="Test Parameter">
															                           </div>
														                          </div>

                                                    <div class="form-actions">
                                                        <div class="btn-set pull-left">
                                                            <a href="<?php echo base_url();?>Tests/view/<?php echo $test_id;?>" class="btn default"><< Back</a>
                                                            <button type="submit" class="btn default">Save Parameter</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                       <?php } ?>