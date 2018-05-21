<style type="text/css">

 label{
		
		 padding: 0.3%;
		 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		 font-size:13px;
		 margin-left:10%;
		  margin-top:0.2%;;	
		 background-color:#FFF; 
		}
		
		 .labela{	
		 padding: 0.3%;
		 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		 font-size:18px;
		 margin-left:10%;
		 margin-top:0.2%;;
		 background-color:#FFF; 
		}
		 .paramuu{
		 width:40%;
		 padding: 0.3%;
		 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		 font-size:18px;
		 margin-left:10%;
		  margin-top:0.2%;;
		 border-radius:3px;
		 border:1px solid #CCF;
		 background-color:#FFF; 
		}

			 p{
		 padding: 0.3%;
		 font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
		 font-size:12px;
		 margin-left:10%;
		 margin-top:0.2%;;
		 border-radius:3px;	
		 color:green;
		}

	</style>
</head>
                           <div class="page-head">
								<div class="page-title">
									<a href="<?php echo base_url();?>Patients/view/<?php echo $client_id;?>" class="btn btn-default btn-flat hidden-print"><i class="fa fa-arrow-circle-left"></i> BACK TO PATIENT</a>			
									<!--a href="<?php echo base_url();?>Patients/edit_result/" class="btn btn-info btn-flat hidden-print"><i class="fa fa-edit"></i> EDIT REPORT</a-->					
									<a href="#" class="btn btn-success btn-flat hidden-print" onclick="javascript:window.print()"><i class="fa fa-print"></i> PRINT REPORT</a>					

								</div>
								<div class="page-toolbar">
								</div>
							</div>
								  <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet box white" style="background-color:white;">
									<?php
								   $report = $this->db->select('*')
												->from('misc')
												//->where('test_id',$test_id)
												->where('client_id',$client_id)
												->group_by('client_id')
												->get()->result_array();
												
									$test_name=$this->db->get_where('tests',array('test_id'=>$test_id))->row()->test_name;
									//$test_parameter_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->test_parameter_id;
									//$category_id=$this->db->get_where('test_parameters',array('test_id'=>$test_id))->row()->category_id;
									//$test_parameter=$this->db->get_where('test_parameters',array('test_parameter_id'=>$test_parameter_id))->row()->test_parameter;
									//$category=$this->db->get_where('category',array('category_id'=>$category_id))->row()->category;
									//$test_result=$this->db->get_where('test_results',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->test_result;
									//$comment=$this->db->get_where('misc',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->comment;	
									//$approved_by=$this->db->get_where('misc',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->approved_by;
									//$reported_by=$this->db->get_where('misc',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->reported_by;
								 	//$ref_range=$this->db->get_where('misc',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->ref_range;
									//$units=$this->db->get_where('misc',array('test_parameter_id'=>$test_parameter_id,'client_id'=>$client_id,'test_id'=>$test_id))->row()->units;
								 ?>
								<div class="portlet light" style="padding-left:3%;padding-right:3%;">
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
													<?php $g_id=$this->db->get_where('tests',array('test_id'=>$test_id))->row()->group_id;?>
													<?php $ee=$this->db->get_where('group',array('group_id'=>$g_id))->row()->group_name;?>
														
														<div class="col-md-12">
															<div class="form-group">
																<h4 class=""><b>LABORATORY RESULT</b></h4>
															</div>
														</div>
													</div>
														<!--table class="tb1" align="center" style="width:100%;margin-left:0%; font-size:15px;font-family:book antiqua;">												
																<tr>													
																  <td style="padding-left:15%; width:40%"></td>
																  <td>Result</td>
																</tr>
															
																<?php //$y = $this->db->select('*')->from('misc')->where('test_id',$test_id)->where('client_id',$client_id)->group_by('test_parameter')->get()->result_array();?>
															
																<?php $y = $this->db->select('*')->from('misc')->where('client_id',$client_id)->group_by('test_parameter')->get()->result_array();?>
																<?php foreach($y as $d0):?>
																<div class="row">
																<tr>
																
																	<td style="padding-left:15%; width:40%">
																		<div class="" ><b><?=$d0['test_parameter'];?></b></div>
																	</td>
																	
																	<?php $o = $this->db->select('*')->from('misc')->where('test_parameter',$d0['test_parameter'])->get()->result_array();?>
																	
																	
																				
																				<tr>
																				  <td style="padding-left:15%; width:40%;float:left;">
																					<?php foreach($o as $w):?>
																							<div class="" style="margin-top:-5%; background-color:;"><?=$w['test_result'];?></div>
																					<?php endforeach;?>
																						
																				  </td>
																			  </tr>
																			
																		
																	
																</tr>
																</div>
																<?php endforeach;?>
															</table-->
														<div  class="sp0" style="width:100%;margin-left:0%;font-size:15px;font-family:book antiqua;">
															
	<?php $y = $this->db->select('*')
	->from('misc')
	->where('client_id',$client_id)
	->where('visit_date',$visit_date)
    ->where('test_id',$test_id)
	->group_by('test_parameter')
	->get()->result_array();?>
																<?php foreach($y as $d0):?>
																	<div class="sp1" style="width:30%;height:36px;word-break:break-word;margin-left:15%;padding-bottom:2%; text-align:left;"><b><?=$d0['test_parameter'];?></b></div>
																	<?php $o = $this->db->select('*')->from('misc')->where('test_parameter',$d0['test_parameter'])->where('client_id',$client_id)->get()->result_array();?>
																	<div class="sp2" style="width:50%;height:auto;word-break:break-word; margin-left:47%;margin-top:-4.7%; padding-bottom:2%; float:none;">
																	<?php foreach($o as $w):?>
																	
																		<div class="sp3" style="width:100%;height:auto;word-break:break-word;padding-top:-4%;"> <?=$w['test_result'];?></div>
																	<?php endforeach;?>
																	</div>
																<?php endforeach;?>
															</div>

													<hr>
													<hr>
															<div class="row kt">
																<span>Reported by : <b><?=$reported_by;?></b> </span>
																<span style="margin-left:25%;" id="dda">Date : <b><?=date('d-F-Y');?></b></span>
																<span class="pull-right" id="app">Verified by : <b><?=$approved_by;?></b> </span>
																<br><br>
																<span><b>Comment : <?=$comment;?></b></span>
															</div>
															
															
												</div>
												</div>			 
										</form>
									<?php endforeach;?>
							</div>
							
								
						</div>
						
						<!--div class="row" id="ff" style="background:; border:0px solid green; margin-top:-4%; padding-top:0%; text-align:center;">
										<table align="center" style="font-size:10px;font-family:book antiqua;" >
											  <tr>
												 <td></td>
												<td align="center"><?=$this->db->get('labo')->row()->note;?></td>
												<td></td>
												</tr>
						                </table>					
								</div-->
					</div>
				</div>
