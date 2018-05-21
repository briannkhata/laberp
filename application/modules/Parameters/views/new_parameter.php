
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Parameters/submit" method="post">
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Test</label>
                                                               <select name="test_id" class="form-control">
                                                                <option disabled="" selected="">--Select Test--</option>
                                                <?php $tests = $this->db->get_where('tests',array('deleted' =>0))->result_array();
                                                                foreach ($tests as $row) {?>
                                                                <option <?php if($test_id == $row['test_id']){ echo 'selected';}?> value="<?php echo $row['test_id'];?>">
                                                                    <?php echo $row['test_name'];?>
                                                                    </option>
                                                                    <?php }?>
                                                               </select>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="control-label">Category</label>
                                                               <select name="category_id" class="form-control">
                                                                <option disabled="" selected="">--Select Category--</option>
                                            <?php $cat = $this->db->get_where('category',array('deleted' =>0))->result_array();
                                                                foreach ($cat as $row) {?>
                                                                <option <?php if($category_id == $row['category_id']){ echo 'selected';}?> value="<?php echo $row['category_id'];?>">
                                                                    <?php echo $row['category'];?>
                                                                    </option>
                                                                    <?php }?>
                                                               </select>
                                                        </div>

                                                            <div class="form-group">
                                                            <label class="control-label">Parameter</label>
                                    <input type="text" name="test_parameter"  class="form-control" value="<?php if (!empty($test_parameter)){echo $test_parameter;}?>" placeholder="Test Parameter">
                                                                    
                                                            </div>
                                                        </div>
                                                    <div class="form-actions">
                                                        <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                        <div class="btn-set pull-left">
                                                           
                                                            <button type="reset" class="btn default">Reset</button>
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

                       