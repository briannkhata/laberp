                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box" style="padding:2%;">

                                            <div class="portlet-body form">
                                            <div class="row">
											<div class="col-md-12">
												<h4 class="text-primary text-center">
												<b>
							<?php echo strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?> |
							</b> <?=strtoupper($this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name);?></h4>
												<hr>
											</div>
										</div>
										<?php if($group_idd !=5):?>								
													<form class="form-horizontal" action="<?php echo base_url();?>Patients/test_result_add" id="saveparams" method="post"  style="padding:2%;">
														<table width="100%">
														
														<?php foreach($zina as $bea):?>
														<?php //$group_id = $this->db->get_where('tests',array('test_id'=>$bea['test_id']))->row()->group_id;?>														
														<?php $para = $this->db->select('*')->from('test_parameters')
														->join('tests','tests.test_id=test_parameters.test_id')
														->join('category','category.category_id=test_parameters.category_id')
														->join('requested_tests','requested_tests.test_id=test_parameters.test_id')
														->where('client_id',$bea['client_id'])
														->where('visit_date',$visit_date)
														->where('test_parameters.deleted',0)
														->group_by('category.category_id')
														->order_by('category.category_id','ASC')
														->get()->result_array();?>
														<?php if (count($para) > 0):?>
														<?php foreach($para as $ss):?>
																	<tr>
																	   <td colspan="4"   style="margin-bottom:5%;">
																	    <?php if($group_id == 2 || $ss['category_id'] == 6):?>
																		<?php else:?>
																			<b><i class="fa fa-check-circle"></i> </b><b><?php if(!empty($this->db->get_where('category',array('category_id'=>$ss['category_id']))->row()->category)): echo strtoupper($this->db->get_where('category',array('category_id'=>$ss['category_id']))->row()->category); else: echo ''; endif;?></b>
																		<?php endif;?>															   
																	   </td>
																	</tr>
																	<?php $p0 = $this->db->select('*')->from('test_parameters')
																	//->join('test_id',$bea['test_id'])
																	->join('tests','tests.test_id=test_parameters.test_id')
																	->where('tests.test_id',$bea['test_id'])
																	->where('category_id',$ss['category_id'])
																	->order_by('test_parameter_id','ASC')
																	->get()->result_array();?>
																	<?php foreach($p0 as $sas):?>
																	<tr>
																	<?php if ($group_id != 5):?>
																	<?php $has_units = $this->db->get_where('group',array('group_id'=>$group_id))->row()->has_units;?>
																	

																	<?php if($has_units == 1):?>
																		<td>
																			> <?php echo strtoupper($sas['test_parameter']);?>
																			<input type='hidden' value="<?php echo $sas['test_parameter_id'];?>" name='test_parameter_id[]'>
																			<input type='hidden' value="<?php echo $group_id;?>" name='group_id'>
																			<input type='hidden' value="<?php echo $ss['test_id'];?>" name='test_id[]'>
																		</td>
																		<td>
																		  <input type='text' class='form-control' style="margin-left:1%; margin-bottom:1%;"   name='test_result[]' placeholder="Result">
																		</td> 
																		<input type='hidden' name='v_date' value="<?php echo $ss['visit_date'];?>">

																		<td>
																			<input type='text'  class='form-control' style="margin-left:3%; margin-bottom:1%; width:40%;"  name='units[]' placeholder="Units">
																		</td>
																		<td>
																			<input type='text' class='form-control' style="margin-left:-55%; margin-bottom:1%;" name='ref_range[]' placeholder="Normal Range">
																		</td>
																	</tr>
																<?php else:?>
																		<tr>
																		   <td></td>
																			<td width="20%">
																			    <input type='hidden' name='v_date' value="<?php echo $ss['visit_date'];?>">
																				> <?php echo strtoupper($sas['test_parameter']);?>
																				<input type='hidden' value="<?php echo $sas['test_parameter_id'];?>" name='test_parameter_id[]'>
																				<input type='hidden' value="<?php echo $group_id;?>" name='group_id'>
																				<input type='hidden' value="<?php echo $ss['test_id'];?>" name='test_id[]'>
																			</td>
																			<td colspan="2">
																				 <input type='text' class='form-control' style=" margin-bottom:1%;" name='test_result[]' placeholder="">
																			</td>
																		</tr>
																		
																<?php endif;?>
																<?php else:?>
																<?php endif;?>													
													
																<?php endforeach;?>
																<?php endforeach;?>
															    <?php else:?>
															<?php endif;?>
															<?php endforeach;?>
															
															
															
														    
															<table class="well table" width="100%">
															   <tr>
															       
															
																	 <td>
																		<input type='text' class='form-control' placeholder="Comment"   name='comment'></input>
																	 </td>
																	<td>
																		<input type='text' class='form-control' placeholder="Technician" name='reported_by'>
																	</td>
																		<td>
																		<input type='text' class='form-control' placeholder="Approved By" name='approved_by'>
																	</td>
																
																</tr>
															   <input type='hidden' value="<?php echo $group_id;?>" name='group_id'>
															   <input type="hidden" name="client_id" class="form-control" value="<?php echo $client_id;?>">
																<tr>
																  <td>
																  	<a href="<?php echo base_url();?>Patients/view/<?php echo $client_id;?>" class="btn default blue-stripe " style="margin-left:%;"> <i class="fa fa-step-backward"></i> BACK</a>
																    <button type="submit" name="submit" class="btn default green-stripe"> SAVE</button>
																  </td>
																  <td colspan="3"></td>
																 </tr>
															</table>		
														</form>
													<?php else:?>
														<?php $p=$this->db->select('*')->from('misc')->where('test_id',$test_id)->where('client_id',$client_id)->group_by('test_parameter')->get()->result_array();?>
												<?php if(count($p) > 0):?>				
													<!--div class="col-md-6">
														<div class="portlet box blue">
															<div class="portlet-body ">
																<div class="dd" id="nestable_list_1"-->
																<br>
																<p>
																	<ol>

																		<?php foreach($p as $x):?>
																			<li><b><?=$x['test_parameter'];?></b> |
																			   <a href="#"  onclick="dello(<?=$x['misc_id'];?>)">
																			   <span style="color: red;">DELETE</span></a>
																			<ul>
																			 <?php $pp=$this->db->select('*')->from('misc')->where('test_parameter',$x['test_parameter'])->get()->result_array();?>
																			 <?php foreach($pp as $k0):?>	
																				<li>																	
																					<?=$k0['test_result'];?>
																				</li>
																			  <?php endforeach;?>
																			  </ul>
																		</li>
																	   <?php endforeach;?>
																	</ol>
																	</p>
																<!--/div>
															</div>
														</div>
												    </div-->
											      
													<?php else:?>
													<?php endif;?>
													<div class="row text-center">
														<?php $ta=$this->db->select('*')->from('requested_tests')->join('tests','requested_tests.test_id=tests.test_id')
														->where('client_id',$client_id)
														//->where('tests.test_id',$test_id)
														->where('tests.group_id',5)
														->where('done',0)
														->get()->result_array();?> 
														
														<?php foreach($ta as $cc):?>
													<span style="color:green;border-radius:3px; padding:1%;">
																 <b><?=strtoupper($cc['test_name']);?></b>
														   </span>
														<?php endforeach;?>
													</div>
													<hr>
									<form action="<?php echo base_url();?>Patients/add_misc_result" method="post" id="misc">>
									<!--form class="form-horizontal" method="post" id="misc"-->
																	<div class="fild_wrappr1" style="margin-top:3%;" id="zaki">
																				<div class="field_wraer2">
																					<div class="form-group">
																						<div class="col-md-12">
								<button type="button" class="btn btn-success add_button1" style="margin-left: 2%;">
								<i class="fa fa-plus"></i> NEW TEST</button>
																						</div>
																					</div>
																					<div class="col-md-12" style="margin-top:1%; margin-bottom:1%;">
																						<span>
																							"CLICK ON THE NEW TEST TO START ADDING TEST RESULTS. IF THE TEST GROUP DOES NOT HAVE INDIVIDUAL TESTS,
																							THEN ENTER THE TEST NAME AS ITS TEST THEN YOU CAN PROCEED ADDING TEST RESULT..."
																						</span>
																					</div>
																				</div>
																			</div>
															
															   		<div class="field_wrapper1" style="padding: 2%;">
																	   <div class="field_wrapper2">
																			<!--div class="form-group">
																			   <div class="col-md-4">
																					<input type="text" name="test_parameter"  class="form-control" placeholder="Test">
																				</div>
																				<div class="col-md-4">
																					<input type="text" name="test_result[]"  class="form-control" placeholder="Result"-->
													<input type='hidden' value="<?=$visit_date;?>" name='visit_date'>
														<input type='hidden' value="<?=$test_idd;?>" name='test_id'>
																<input type='hidden' value="<?=$group_idd;?>" name='group_id'>
																	<input type="hidden" name="client_id" value="<?=$client_id;?>">
																				<!--/div>
																			</div-->
																		</div>
																				
																	</div>
																	<!--/form-->
																	<br>
																<div class="row">
																			    <div class="col-md-6"></div>
																			    <div class="col-md-6"  style="margin-top:-2%; margin-bottom:-4;margin-left:33.5%">
																					<button type="button" class="btn btn-success add_button2 hai"><i class="fa fa-plus"></i> NEW RESULT</button>
																			<button type="button" name="submit" class="btn btn-default hai blue" id="buma" onclick="save_misc();"><i class="fa fa-save"></i> SAVE</button>
																				</div>
																			</div>
																		<div class="row fao">
																		<div class="col-md-6"></div>
																		 <div class="col-md-6"  style="margin-top:1%; margin-bottom:-4;margin-left:33.5%">
																						<span>
																							"CLICK SAVE TO ADD ANOTHER TEST or NEW RESULT TO ADD ANOTHER TEST RESULT ON THE SAME TEST..."
																						</span>
																		  </div>
																		
																		</div>
																
																
																
															   <table class="table" style="margin-top:5%;" id="onani">
															   <tr>
																  <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Comment"   name='comment' required="">
																  </td>
																  <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Reporter" name='reported_by' required="">
																	</td>
																	 <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Approved by"  name='approved_by' required="">
																   </td>
																</tr>
															 
																<tr>
																  <td></td>
																  <td>
																	<a href="<?=base_url();?>Patients/view/<?=$client_id;?>" class="btn btn-default " style="margin-left:4%;"> << Back</a>
																	<button type="submit" name="submit" class="btn btn-success"> >> REPORT</button>
																  </td>
																  <td><small style="color: red;">Once you click on report you can not undo the changes!</small></td>
																 </tr>
															</table>		
														
															</form>
												
													<?php endif;?>
								</div>
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			
		