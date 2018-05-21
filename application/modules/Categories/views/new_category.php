
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">

                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                     <form action="<?php echo base_url();?>Categories/submit" method="post">
                                                 
                                                    <div class="form-body">
                                                  
                                                         <div class="form-group">
                                                            <label class="control-label">Category</label>
                                                                <input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?php if (!empty($category)){echo $category;}?>">
                                                               
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label">Description</label>
                                                            <div class="input-icon">
                                                                            <textarea class="form-control" name="description" id="description">
                                                                        <?php if (!empty($description)){echo $description;}?>

                                                                    </textarea>
                                                                </div>
                                                        </div>
                                                       
                                                       
                                                    </div>
                                                    <div class="form-actions">
                                                       
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Category</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>