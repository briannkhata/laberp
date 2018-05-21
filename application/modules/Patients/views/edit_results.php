
         <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box" style="padding:2%;">

                                            <div class="portlet-body form">
                                            <div class="row">
											<div class="col-md-12">
												<h4 class="text-primary text-center">
												<b>
							<?php echo strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?> |
							</b> <?=strtoupper($this->db->get_where('group',array('group_id'=>$group_id))->row()->group_name);?></h4>
												<hr>
											</div>
										</div>
												<?php if($group_id !=5){?>
					<form class="form-horizontal" action="<?php echo base_url();?>Patients/test_result_update" method="post" style="padding:2%;">
											<table width="100%">
													
												<?php foreach($zina as $bea):
										$test_name=$this->db->get_where('tests',array('test_id'=>$bea['test_id']))->row()->test_name;
			$test_parameter_id=$this->db->get_where('test_parameters',array('test_id'=>$bea['test_id']))->row()->test_parameter_id;
						$category_id=$this->db->get_where('test_parameters',array('test_id'=>$bea['test_id']))->row()->category_id;
	$test_parameter=$this->db->get_where('test_parameters',array('test_parameter_id'=>$test_parameter_id))->row()->test_parameter;
																?>
														     <tr>
															   <td></td>
																<td>
																	<!--h5>[<?php //strtoupper($bea['test_name']);?>]</h5-->
																</td>
															</tr>
<?php $para=$this->db->select('*')->from('test_parameters')->where('test_id',$bea['test_id'])->group_by('category_id')->get()->result_array();
?>
														<?php if (count($para) > 0):?>
															<?php foreach($para as $ss):?>
																		<tr>
																		   <td colspan="4"   style="margin-bottom:5%;">
																			   <?php if($group_id == 5 || $ss['category_id'] == 6):?>
																			   <?php else:?>
																			   <b><i class="fa fa-check-circle"></i> </b><b><?php if(!empty($this->db->get_where('category',array('category_id'=>$ss['category_id']))->row()->category)): echo strtoupper($this->db->get_where('category',array('category_id'=>$ss['category_id']))->row()->category); else: echo ''; endif;?></b>
																			   <?php endif;?>
																		   </td>
																	
																		</tr>
																
																<?php $p0=$this->db->select('*')->from('test_parameters')->join('tests','test_parameters.test_id=tests.test_id')->join('requested_tests','tests.test_id=requested_tests.test_id')
																->where('requested_tests.group_id',$group_id)
																->where('client_id',$client_id)
																->where('category_id',$ss['category_id'])
															    ->where('requested_tests.visit_date',$visit_date)
																->get()->result_array();?>
																<?php foreach($p0 as $sas):?>
																<?php $test_result=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->test_result;?>
																<?php $ref_range=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->ref_range;?>
																<?php $units=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->units;?>
																<?php $comment=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->comment;	?>
																<?php $approved_by=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->approved_by;?>
																<?php $reported_by=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->reported_by;?>
																<?php $test_result_id=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->test_result_id;?>
																<?php $test_id=$this->db->get_where('test_results',array('test_parameter_id'=>$sas['test_parameter_id'],'client_id'=>$client_id,'group_id'=>$group_id))->row()->test_id;?>
															
																<?php if ($group_id != 5):?>
																<?php $has_units=$this->db->get_where('group',array('group_id'=>$group_id))->row()->has_units;?>
						                     					<?php if($has_units == 1):?>
																		<tr>
																			<td>
																				 > <?=strtoupper($sas['test_parameter']);?>
																				<input type='hidden' value="<?=$sas['test_parameter_id'];?>" name='test_parameter_id[]'>
																				<input type='hidden' value="<?=$test_id;?>" name='test_id[]'>
																			</td>
																			<td>
																				<input type='text' class='form-control' style="margin-left:1%; margin-bottom:1%;" name='test_result[]' placeholder="Result" value="<?=$test_result;?>" required>
																			</td>
																			<td align="left" width="10%;">
																				<input type='text'  class='form-control' style="margin-left:3%; margin-bottom:1%; width:40%;" name='units[]' placeholder="Units" value="<?=$units;?>">
																			</td>
																			<td>
																				<input type='text' class='form-control paramuu' style="margin-left:-55%; margin-bottom:1%;" name='ref_range[]' value="<?=$ref_range;?>" placeholder="Ref Range">
																			</td>
																		</tr>
																	<?php else:?>
																			<tr>
																				<td width="20%">
																					> <?=strtoupper($sas['test_parameter']);?>
																					<input type='hidden' value="<?=$sas['test_parameter_id'];?>" name='test_parameter_id[]'>
																					<input type='hidden' value="<?=$test_id;?>" name='test_id[]'>
																				</td>
																				<td colspan="2">
																					<input type='text' class='form-control paramu' name='test_result[]' style=" margin-bottom:1%;" value="<?=$test_result;?>" placeholder="" required>
																				</td>
																	        </tr>
																<?php endif;?>
																<?php else:?>
																		<tr>
																			<td align="right">
																				<label> <?=strtoupper($sas['test_parameter']);?></label>
<input type='hidden' value="<?=$sas['test_parameter_id'];?>" name='test_parameter_id[]' value="<?=set_value('test_parameter_id');?>">
																<input type='hidden' value="<?=$ss['test_id'];?>" name='test_id[]'>
																			</td>
																			<td align="left" colspan="3">
																				<input type='text' style="margin-bottom:1%;" class='form-control' name='test_result[]' value="<?=$test_result;?>" placeholder="" required>
																			</td>
																	    </tr>
																<?php endif;?>													
																<?php endforeach;?>
																<?php endforeach;?>
															    <?php else:?>
															<?php endif;?>
															<?php endforeach;?>
															</table>
															<table class="table" style="margin-top:5%;" align="center">
														
															   <tr>
																  <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Comment"   name='comment' value="<?=$comment;?>">
																  </td>

																  <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Reporter" name='reported_by' value="<?=$reported_by;?>">
																	</td>
																	 <td align="">
																		<input type='text' class='form-control paramuuu' placeholder="Approved by"  name='approved_by' value="<?=$approved_by;?>">
																   </td>
																</tr>
															   <input type='hidden' value="<?=$group_id;?>" name='group_id'>
															   <input type="hidden" value="<?=$client_id;?>"  name="client_id">
															 <input type='hidden' value="<?=$visit_date;?>" name='v_date'>

																<tr>
																 
																  <td colspan="3">
																	<a href="<?=base_url();?>Patients/report/<?=$client_id;?>/<?=$group_id;?>/<?=$visit_date;?>" class="btn blue " style=";"> 
																	<< BACK TO REPORT</a>
																	<button type="submit" name="submito" class="btn green-haze"><i class="fa fa-save"></i> SAVE CHANGES</button>
																  </td>
																
																 </tr>
															</table>		
														</form>
													<?php }?>
												

											
								
								</div>
							</div>
						</div>
					</div>
