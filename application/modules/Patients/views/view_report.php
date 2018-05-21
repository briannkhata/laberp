                             <div class="page-head">
								<div class="page-title">
									<a href="<?php echo base_url();?>Patients/view/<?php echo $client_id;?>" class="btn btn-default btn-flat hidden-print"><i class="fa fa-arrow-circle-left"></i> BACK TO PATIENT</a>			
									<a href="#" class="btn btn-success btn-flat hidden-print" onclick="javascript:window.print()"><i class="fa fa-print"></i> PRINT REPORT</a>					
										
								</div>
								<div class="page-toolbar">
								</div>
							</div>
								  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box white" style="background-color:white;">
										
										<?php
								  /*  $report = $this->db->select('*')
									->from('test_results')
									->join('tests','test_results.test_id=tests.test_id')
									->join('requested_tests','requested_tests.test_id=test_results.test_id')
									//->where('tests.test_id',$test_id)
									->where('report_date',$report_date)
									//->where('requested_tests.visit_date',$visit_date)
									->where('test_results.group_id',$group_id)
									->where('test_results.client_id',$client_id)
									->group_by('requested_tests.visit_date')
									->get()->result_array();*/
									
										   $report = $this->db->select('*')
												->from('test_results')
												->join('tests','test_results.test_id=tests.test_id')
												//->where('test_id',$test_id)
												->where('test_results.group_id',$group_id)
												->where('client_id',$client_id)
												//->where('report_date',$report_date)
												->where('v_date',$visit_date)
												->group_by('client_id')
												->get()->result_array();
												
												
									$test_name=$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
									$test_parameter_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->test_parameter_id;
									$category_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->category_id;
									$test_parameter=$this->db->get_where('test_parameters',array('test_parameter_id'=>$test_parameter_id))->row()->test_parameter;
									//$category=$this->db->get_where('category',array('category_id'=>$category_id))->row()->category;
									//$test_result=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->test_result;
									//$comment=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'v_date'=>$visit_date))->row()->comment;	
								
									//$approved_by=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->approved_by;
									//$reported_by=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'v_date'=>$visit_date))->row()->reported_by;
								 	//$ref_range=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->ref_range;
									//$units=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->units;
									$logo = $this->db->get('labo')->row()->logo;
								 ?>
								 <?php foreach($report as $rep0):?>
										<div class="invoice" style=" padding:0%;">
											<div class="col-xs-12 invoice-logo-space"  style="padding-top:1%;">

												<!--table align="center">
														<thead>
														  <tr>
															 <th align="right"><h1 class="text-primary text-center" style="color:black;"><?=$this->db->get('labo')->row()->name;?></h1></th>
														  </tr>
														</thead>
												</table-->
														<div class="row" style="padding-left:2%; margin-top:-2%;" id="topp">
															<center><b class="text-primary text-center" style="color:black; font-size:36px"><?=strtoupper($this->db->get('labo')->row()->name);?></b></center>  
														</div>
												<!--table align="center">
														<tbody>
														  <tr>
															 <th align="right"><h6 class="text-primary text-center" style="color:black;"><b>(PRIVATE PATHOLOGY LABORATORY)</b></h6></th>
														  </tr>
														   <tr>
															 <th align="right"><h6 class="text-primary text-center" style="color:black;">CERTIFIED BY MEDICAL COUNCIL OF MALAWI</h6></th>
														  </tr>
														</tbody>
												</table-->
														<div class="row" style="padding-left:2%; margin-top:-2%;">
															 <span><h6 class="text-primary text-center" style="color:black;"><b>(PRIVATE PATHOLOGY LABORATORY)</b></h6></span>
															 <span><h6 class="text-primary text-center" style="color:black;">CERTIFIED BY MEDICAL COUNCIL OF MALAWI</h6></span>
														</div>
													<!--table align="center">
														<tbody>
														  <tr>
															 <th align="right">BLANTYRE</th><th align="left"> : 01 822 696/</th>
															 <th align="right">LILONGWE</th><th align="left">  : 0 111 912 076/</th>
															 <th align="right">MZUZU</th><th align="left"> : 0 111 930 344</th>
														  </tr>
														</tbody>
													
													</table-->
													
													<div class="row text-center" style="padding-left:2%; align:center;">
														<span>BLANTYRE</span><span> : 01 822 696 / </span>
														<span>LILONGWE</span><span>  : 0 111 912 076 / </span>
														<span>MZUZU</span><span> : 0 111 930 844</span>
													</div>
													<hr>
														<table class="table-striped table-hover" width="70%">
														<tbody>
														<tr>
														   <td>Patient's Name</td>
														   <td align="left">: <b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?></b></td>
														</tr>
														<tr>
														   <td>Referring Doctor</td>
														   <td align="left">: <b><?=strtoupper($this->db->get_where('requested_tests',array('client_id'=>$client_id,'visit_date'=>$visit_date))->row()->doctor_name);?></b></td>
														</tr>
														<tr>
														   <td>Phone No.</td>
														   <td align="left">: <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->phone;?></b></td>
														</tr>
														<tr>
														   <td>Sex / Age (YRS)</td>
														   <td align="left">: <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->gender;?>/<?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->age;?></b></td>
														</tr>
														</tbody>
													</table>
<hr>
											</div>
											<hr>
											<br>
											<div class="row" style="padding-top:2%;">
											<br>
												<?php $g_id=$this->db->get_where('tests',array('test_id'=>$test_id))->row()->group_id;?>
												<?php $ee=$this->db->get_where('group',array('group_id'=>$group_id))->row()->group_name;?>
											  <p>
												<center><b style="font-size:14px; margin-top:4%;"><?php echo strtoupper($ee);?> REPORT</b></center>
											</p>
												<div class="col-xs-12">
												
													
													
												</div>
											</div>
					
	
												
													<?php //$group_id=$this->db->get_where('tests',array('test_id'=>$rep0['test_id']))->row()->group_id;?>
													<?php $has_units=$this->db->get_where('group',array('group_id'=>$group_id))->row()->has_units;?>
													<?php $flag=$this->db->get_where('group',array('group_id'=>$group_id))->row()->flag;?>
													<?php $gender = $this->db->get_where('clients',array('client_id'=>$client_id))->row()->gender;?>

													<?php $paras=$this->db->select('*')->from('test_results')
																	->join('test_parameters','test_parameters.test_parameter_id=test_results.test_parameter_id')
																	->where('test_results.group_id',$group_id)
																	->where('client_id',$client_id)
																	->where('test_result !=','')
																	//->where('report_date',$report_date)
																	->where('v_date',$visit_date)
																	//->group_by('group_id')
																	->order_by('category_id','ASC')
																	->group_by('category_id')
																	->get()->result_array();?>
																	  <?php if($flag == 1):?>
																	<b style="font-size:12px; margin-top:4%; margin-left:22%;" >FULL BLOOD COUNT/CBC</b>

																	
																	<?php endif;?>
															<table class="table-striped tb1" style="width:95%;margin-left:0%; font-size:14px;font-family:;">												
																<tr>
																  <?php if($has_units==0):?>
																  <th style="padding-left:25%;"></th>
																  <th></th>
																  <th>Result</th>
																  <?php elseif($has_units==1):?>

																  <th style="padding-left:24%;"></th>
																  <th align="left"><b>Result</b></th>
																  <th align="left" style="padding-left:2%;"><b>Units</b></th>
																  <th align="left" style="padding-left:2%;"><b>Ref Range</b></th>
																  <th></th>
																
																  <?php else:?>
																  <?php endif;?>
																</tr>
															<?php foreach($paras as $mem):?>
															<tr>
															    <td style="padding-left:24%;" ><br>
															        <?php if($mem['category_id']==0 || $mem['category_id']== 17 ):?>
																	<?php else:?>
																		<b>
																			<?php if(!empty($this->db->get_where('category',array('category_id'=>$mem['category_id']))->row()->category)): echo strtoupper($this->db->get_where('category',array('category_id'=>$mem['category_id']))->row()->category); else: echo ''; endif;?>
																		</b>
																	<?php endif;?>															   
															    </td>
															   <td></td>
																		   <?php $ok=$this->db->select('*')->from('test_results')
																		->join('test_parameters','test_parameters.test_parameter_id=test_results.test_parameter_id')
																		->join('category','test_parameters.category_id=category.category_id')
																		->where('category.category_id',$mem['category_id'])
																		->where('test_result !=','')

																		//->group_by('client_id')
																		//->where('test_results.test_id',$rep0['test_id'])
																		//->where('report_date',$report_date)
																		->where('v_date',$visit_date)
																		->where('test_results.group_id',$group_id)
																		->where('client_id',$client_id)
																		//->limit(1)
																		->get()->result_array();?>
																		<?php foreach($ok as $u):?>
																		<?php 
																		      $comment = $u['comment'];
																		      $reported_by = $u['reported_by'];
																			  $approved_by = $u['approved_by'];
																			  ?>
																		<tr>
																		    <?php if($has_units ==0):?>
																				<td style="padding-left:25%;"> <?php echo $u['test_parameter'];?></td>
																				<td></td>
																				<td  style="padding-right:25%;"><?php echo $u['test_result'];?></td>
																				<td></td>
																			<?php elseif($has_units==1):?>
																				<td class="xp1" align="left"  style="padding-left:24%; width:50%"><?php echo strtoupper($u['test_parameter']);?></td>
																				<td class="xp"  align="left" style="padding-right:0%;"><?php echo $u['test_result'];?></td>
																				<td class="xp"  align="left" style="padding-left:2%; font-weight:normal;"><?php echo $u['units'];?></td>
																				<td class="xp"  align="left" style="padding-left:2%; font-weight:normal;"><?php echo $u['ref_range'];?></td>
																				<td class="xp"  align="left" style="padding-left:2%; font-weight:normal;">
																			

																		   <?php else:?>
																		   <?php endif;?>
																		</tr>
																		<?php endforeach;?>
															</tr>
														    <?php endforeach;?>
															</table>
															
															<div class="row">
															<div class="col-xs-12">
																
														
																<table class="table table-striped table-hover">
																   <tbody>
																		<tr>
																			<td align="right">Comment : </td>
																			<td colspan="6" align="left"><b><?php echo $comment;?></b></td>
																		</tr>
																		<tr>
																		    <td align="right">
																				 Reported by :
																			</td>
																			<td align="left">
																				<b><?php echo $reported_by;?></b>
																			</td>
																			<td align="right">
																				 Date Reported :
																			</td>
																			<td align="left">
																				<b><?php echo date('d,F Y');?></b>
																			</td>
																			<td align="right">
																				 Verified by :
																			</td>
																			<td align="left">
																				<b><?php echo $approved_by;?></b>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
												</div>
					<?php endforeach;?>
									
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			