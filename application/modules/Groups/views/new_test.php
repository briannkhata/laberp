
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Groups/submito" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                        <div class="field_wrapperr">
															<div class="form-group">
                                                         <input type="hidden" name="group_id" value="<?php echo $group_id;?>">
									<input type="text" name="test_code[]"  class="form-control" placeholder="Test Code">
									<input type="text" name="test_name[]"  class="form-control" placeholder="Test Name">
									<input type="text" name="amount[]"  class="form-control" placeholder="Amount">
																	 <a href="javascript:void(0);" class="add_buttonn" title="Add field"><i class="fa fa-plus"></i></a>
															</div>
														</div>
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
                            </div>

                       