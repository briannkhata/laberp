
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Categories/submito" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Test</label>
                                                         <input type="hidden" name="category_id" value="<?php echo $category_id;?>">
                                                               <select name="test_id" class="form-control">
                                                               	<option disabled="" selected="">--Select Test--</option>
                                                               	<?php $tests = $this->db->get_where('tests',array('deleted' =>0))->result_array();
                                                               	foreach ($tests as $row) {?>
                                                               	<option value="<?php echo $row['test_id'];?>">
                                                               		<?php echo $row['test_name'];?>
                                                               		</option>
                                                               		<?php }?>
                                                               </select>
                                                        </div>
                                                        <br>

                                                        <div class="field_wrapper">
															<div class="form-group">

									<input type="text" name="test_parameter[]"  class="form-control" placeholder="Test Parameter">
																	 <a href="javascript:void(0);" class="add_button" title="Add field"><i class="fa fa-plus"></i></a>
															</div>
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
                            </div>

                       