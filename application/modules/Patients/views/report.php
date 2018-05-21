                        <style type="text/css">

 label{
		
		 padding: 0.3%;
	
		 font-size:13px;
		 margin-left:10%;
		  margin-top:0.2%;;	
		 background-color:#FFF; 
		}
		
		 .labela{	
		 padding: 0.3%;

		 font-size:18px;
		 margin-left:10%;
		 margin-top:0.2%;;
		 background-color:#FFF; 
		}
		 .paramuu{
		 width:40%;
		 padding: 0.3%;

		 font-size:18px;
		 margin-left:10%;
		  margin-top:0.2%;;
		 border-radius:3px;
		 border:1px solid #CCF;
		 background-color:#FFF; 
		}

			 p{
		 padding: 0.3%;

		 font-size:12px;
		 margin-left:10%;
		 margin-top:0.2%;;
		 border-radius:3px;	
		 color:green;
		}
		
		#wt
		{
		 position:fixed;
		 bottom:5px;
		 right:5px;
		 opacity:0.5;
		 z-index:99;
		 color:white;
		}


         #background{
    position:absolute;
    z-index:0;
    background:white;
    display:block;
    min-height:50%; 
    min-width:50%;
    color:yellow;
}

#content{
    position:absolute;
    z-index:1;
}

#bg-text
{
    color:lightgrey;
    font-size:120px;
    transform:rotate(300deg);
    -webkit-transform:rotate(300deg);
}

	</style>


                             <div class="page-head">
								<div class="page-title">
									<a href="<?php echo base_url();?>Patients/view/<?php echo $client_id;?>" class="btn btn-default btn-flat hidden-print"><i class="fa fa-arrow-circle-left"></i> BACK TO PATIENT</a>			
									<a href="<?php echo base_url();?>Patients/edit_results/<?php echo $visit_date.'/'.$client_id.'/'.$group_id;?>" class="btn btn-info btn-flat hidden-print"><i class="fa fa-edit"></i> EDIT REPORT</a>					
									<a href="#" class="btn btn-success btn-flat hidden-print" onclick="javascript:window.print()"><i class="fa fa-print"></i> PRINT REPORT</a>					

								</div>
								<div class="page-toolbar">
								</div>
							</div>
								  
								<div class="portlet light" style="padding-left:3%;padding-right:3%;">
										
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
									//$visit_date = $this->session->userdata('v_date');
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
												
												
									//$test_name=$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
									//$test_parameter_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->test_parameter_id;
									//$category_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->category_id;
									//$test_parameter=$this->db->get_where('test_parameters',array('test_parameter_id'=>$test_parameter_id))->row()->test_parameter;
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
									<form action="#" class="form-horizontal">
												<div class="form-body">	
												<div class="row fet" style="padding-top:0%;">
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
														<div class="row" style="padding-left:10%;">
														
														   <!--span  style="width:20%; font-family:book antiqua;">Patient Name</span>
														   <span style="padding-left:5.8%;"> <b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?></b></span><br>
															
														   <span style="width:20%; font-family:book antiqua;">Refered by</span>
														   <span style="padding-left:7.6%;font-family:book antiqua;"> <b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->doctor_name);?></b></span><br>
													
														   <span style="width:20%; font-family:book antiqua;">Phone No.</span>
														   <span style="padding-left:7.9%;font-family:book antiqua;"> <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->phone;?></b></span><br>
													
														   <span style="width:20%; font-family:book antiqua;">Sex/Age (YRS)</span>
														   <span style="padding-left:4.8%;font-family:book antiqua;"> <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->gender;?>/<?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->age;?></b></span><br>
														   
														   <!--span style="width:20%;">Telephone No.</span>
														   <span style="padding-left:5.6%"><b>01 822 696 / 0888 327 475</b></span-->
									
														</div>
													<!--table style="width:50%;">
														<tbody>
														<tr>
														   <th align="right">Patient's Name</th>
														   <th align="left">:<b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?></b></th>
														</tr>
														<tr>
														   <th align="right">Rerered by</th>
														   <th align="left">:<b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->doctor_name);?></b></th>
														</tr>
														<tr>
														   <th align="right">Patient's Phone</th>
														   <th align="left">:<b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->phone;?></b></th>
														</tr>
														<tr>
														   <th align="right">Sex / Age (YRS)</th>
														   <th align="left">:<b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->gender;?>/<?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->age;?></b></th>
														</tr>
														</tbody>
													</table-->
											
												<table class="table-striped table-hover" width="70%">
														<tbody>
														<tr>
														   <td>Patient's Name</td>
														   <td align="left" style="width: 80%;">: <b><?=strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?></b></td>
														</tr>
														<tr>
														   <td>Referring Doctor</td>
														   <td align="left" style="width: 80%;">: <b><?=strtoupper($this->db->get_where('requested_tests',array('client_id'=>$client_id))->row()->doctor_name);?></b></td>
														</tr>
														<tr>
														   <td>Phone No.</td>
														   <td align="left" style="width: 80%;">: <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->phone;?></b></td>
														</tr>
														<tr>
														   <td>Sex / Age (YRS)</td>
														   <td align="left" style="width: 80%;">: <b><?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->gender;?>/<?=$this->db->get_where('clients',array('client_id'=>$client_id))->row()->age;?></b></td>
														</tr>
														</tbody>
													</table>
					
													
										
												</div>
											<hr>
												<div class="row raa" style="border-radius:3px; text-align:center;">
										
									<?php $ee=$this->db->get_where('group',array('group_id'=>$group_id))->row()->group_name;?>
														
														<div class="col-md-12" style="text-align:center;">
															<span>
															<?php //$test=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->test_parameter;?>
																<?php //if($test == $test_name):?>
															
															<?php //else:?>
																<h4 class=""><b><?=strtoupper($ee);?> RESULT</b></h4>
															<?php //endif;?>
															</span>
														</div>
													</div>

										
					
	
												
						<?php //$group_id=$this->db->get_where('tests',array('test_id'=>$rep0['test_id']))->row()->group_id;?>
							<?php $has_units=$this->db->get_where('group',array('group_id'=>$group_id))->row()->has_units;?>
									<?php //$flag=$this->db->get_where('group',array('group_id'=>$group_id))->row()->flag;?>
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
																
																	
			<table class="table-striped table-hover tb1" style="width:95%;margin-left:0%; font-size:14px;font-family:;">												
																<tr>
																  <?php if($has_units==0):?>
																  <td width="50" colspan="2">
																
																  <?php elseif($has_units==1):?>
																
																  <td colspan="2"></td>
																  
																  <td><b>Result</b></td>
																  <td style="padding-left:2%;"><b>Units</b></td>
																  <td style="padding-left:2%;"><b>Ref Range</b></td>
																  <?php else:?>
																  <?php endif;?>
																</tr>
															<?php foreach($paras as $mem):?>
															<tr>
															   <td style="padding-left:20%; font-size:13px;font-family:book antiqua;" colspan="2" ><br>
															                <?php if($mem['category_id']==6 || $mem['category_id']==8):?>
																			   <?php else:?>
																			        <b><?php if(!empty($this->db->get_where('category',array('category_id'=>$mem['category_id']))->row()->category)): echo strtoupper($this->db->get_where('category',array('category_id'=>$mem['category_id']))->row()->category); else: echo ''; endif;?></b>
																		   <?php endif;?>															   
															    </td>
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
								<td style="padding-left:25%;  width:50%" colspan="2"> <?php echo $u['test_parameter'];?></td>
								<td   style="padding-right:25%; width:40%" colspan="2"><?php echo $u['test_result'];?></td>
																			<?php elseif($has_units==1):?>
						<td class="xp1" style="padding-left:10%; width:50%;"><b><?=strtoupper($u['test_parameter']);?></b></td>
						<td width="30"></td>
						<td class="xp" style="padding-right:0%;"><b><?=$u['test_result'];?></b></td>
						<td class="xp" style="padding-left:2%; font-weight:normal;"><?=$u['units'];?></td>
						<td class="xp" style="padding-left:2%; font-weight:normal;"><?=$u['ref_range'];?></td>
																		   <?php else:?>
																		   <?php endif;?>
																		</tr>
																		<?php endforeach;?>
															</tr>
														    <?php endforeach;?>
															</table>
															<hr>
															<div class="row kt">
																<span>Reported by : <b><?=$reported_by;?></b> </span>
																<span style="margin-left:25%;" id="dda">Date : <b><?=date('d-F-Y');?></b></span>
																<span class="pull-right" id="app">Verified by : <b><?=$approved_by;?></b> </span>
																<br><br>
																<span><b>Comment : <?=$comment;?></b></span>
															</div>
															
															
												</div>
					<?php endforeach;?>
									
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->


			