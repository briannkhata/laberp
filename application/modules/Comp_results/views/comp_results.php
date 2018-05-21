
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
							
													<div class="portlet-body" style="height:80px;">
														<form action="<?php echo base_url();?>Comp_results/view_comp_results" method="post">
                                                 
														  <div class="col-md-3">
																<div class="form-group">
																    <label>Company</label>
																	 <select name="company_id" class="form-control">
																	 <option selected disabled>--SELECT COMPANY--</option>
																	  <?php $ss = $this->db->get_where('company',array('deleted'=>0))->result_array();
																	  foreach($ss as $row){?>
																	  <option value="<?php echo $row['company_id'];?>">
																	  <?php echo $row['company'];?></option>
																	  <?php }?>
																	</select>
																</div>
															</div>
															<div class="col-md-6">
																<div class="form-group">
																     <label>Test Code</label>
																	 <select name="count" class="form-control">
																	 <option selected disabled>--SELECT TEST CODE--</option>
																	  <?php $ss = $this->db->get_where('ctest')->result_array();
																	  foreach($ss as $row){?>
																	  <option value="<?php echo $row['count'];?>">
																	  <?php echo $row['count'];?> | <?php echo $row['test_title'];?></option>
																	  <?php }?>
																	</select>
																</div>
															</div>
														
                                                        <div class="col-md-3">
																<div class="form-group">
                                                           <br><button type="submit" class="btn default" style="margin-top:2.2%;"> SEARCH RESULTS</button>
                                                        </div>
                                                    </div>
                                                </form>
												
														</div>
														</div>
												</div>
													
																	
											
		</div>
