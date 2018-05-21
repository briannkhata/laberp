<?php 

$onse = $this->db->get_where('test_parameters',array('test_parameter_id' =>$test_parameter_id))->result_array();
foreach ($onse as $rowo) {?>
                  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Categories/submitoo" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Test</label>
                                                         <input type="hidden" name="category_id" value="<?php echo $category_id;?>">
                                                        <input type="hidden" name="test_parameter_id" value="<?php echo $test_parameter_id;?>">
                                                               <select name="test_id" class="form-control">
                                                               	<option disabled="" selected="">--Select Test--</option>
                                                               	<?php $tests = $this->db->get_where('tests',array('deleted' =>0))->result_array();
                                                               	foreach ($tests as $row) {?>
                                                               	<option <?php if ($rowo['test_id'] == $row['test_id']){echo 'selected';}?> value="<?php echo $row['test_id'];?>">
                                                               		<?php echo $row['test_name'];?>
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
                                                            <a href="<?php echo base_url();?>Categories/view/<?php echo $category_id;?>" class="btn default"><< Back</a>
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