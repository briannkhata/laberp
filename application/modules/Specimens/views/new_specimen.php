
                                <div class="row">
                                    <div class="col-md-12">
<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
                                            
                                            <div class="portlet-body form">
                                                <!-- BEGIN FORM-->
                                                <br>
                                                  <form action="<?php echo base_url();?>Specimens/submit" method="post">
                                                    <div class="form-body">
                                                     
                                                        <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Specimen</label>
                                                            <input type="text" class="form-control" name="specimen" id="specimen" 
                                                            value="<?php if (!empty($specimen)){echo $specimen;}?>" placeholder="Specimen">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>


                                                    <div class="col-md-4">
                                                         <div class="form-group">
                                                            <label class="control-label">Collection</label>
                                                            <input type="text" class="form-control" name="collection" id="collection" 
                                                            value="<?php if (!empty($collection)){echo $collection;}?>" placeholder="Collection Method">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                        </div>

                                                       <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label class="control-label">Description</label>
                                                              <input type="text" class="form-control" value="<?php if (!empty($description)){echo $description;}?>" name="description" id="description">
                                                            <span class="help-block">
                                                            </span>
                                                        </div>
                                                    </div>
                                                                                                      
                                                    </div>
                                                    <div class="form-actions" style="background-color: white; border: none;">
                                                       <div class="col-md-12">
                                                        <div class="btn-set pull-left">
                                                             <?php if (isset($update_id)){?>
                                                                          <input type="hidden" name="update_id" id="update_id" value="<?php echo $update_id;?>">
                                                                     <?php }?>
                                                            <button type="reset" class="btn default">Reset</button>
                                                            <button type="submit" class="btn default">Save Specimen</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- END FORM-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>