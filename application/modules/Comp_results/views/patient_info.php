					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
							<?php echo $this->db->get_where('comp_staff',array('cstaff_id' =>$cstaff_id))->row()->name;?> |
							<?php echo $this->db->get_where('comp_staff',array('cstaff_id' =>$cstaff_id))->row()->phone;?> |
						    <?php //echo $this->db->get_where('comp_staff',array('cstaff_id' =>$cstaff_id))->row()->dob;?>

							</div>
							<div class="tools" style="font-weight:bold;">
							<a href="<?php echo base_url();?>Patients" style="color:white;"> BACK </a> | 
							<a href="<?php echo base_url();?>Patients/new_test/<?php echo $cstaff_id;?>" style="color:white;">NEW TEST REQUEST </a> |
							<a href="#" style="color:white;" onclick="window.print();">PRINT </a>
				
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion1">
							<?php
							$result= $this->db->select('*')->from('company_test')
							->join('urina','company_test.urina_id=urina.urina_id')
							->join('stula','company_test.stula_id=stula.stula_id')
							->join('company','company_test.company_id=company.company_id')
							->join('ura_micro','company_test.ura_micro_id=ura_micro.ura_micro_id')
							->join('stu_micro','company_test.stu_micro_id=stu_micro.stu_micro_id')
							->order_by('company_test_id','DESC')
							->where('company_test.cstaff_id',$cstaff_id)
							->where('company_test.company_id',$company_id)
							->get()->result_array();
		
							$count=0;
							foreach($details as $row){?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $row['rqtest_id'];?>">
										VISIT DATE : <?php echo strtoupper(date('d F Y H:m:i',$row['visit_date']));?> | <?php echo $row['pay_mode'];?></a>
										</h4>
									</div>
									<div id="<?php echo $row['rqtest_id'];?>" class="panel-collapse collapse">
										<div class="panel-body">
											 <?php $g = $this->db->select('*')
												 ->from('tests')
												 ->join('requested_tests','tests.test_id=requested_tests.test_id')
												 ->join('clinics','clinics.clinic_id=requested_tests.clinic_id')
												 ->join('group','group.group_id=tests.group_id')
												 ->where('client_id',$client_id)
												 ->where('requested_tests.visit_date',$row['visit_date'])
												 ->group_by('group.group_id')
												 ->get()->result_array();?>	

													<table class="table  table-bordered table-hover">
														<thead>
													      <th></th>
														  <th>Group Name</th>
														  <th>Tests</th>
														  <th>Hospital</th>
														  <th>Doctor</th>
														</thead>
													<?php foreach($g  as $nop):?>
													<?php $cl = $this->db->select('*')
													->from('tests')
													->join('requested_tests','tests.test_id=requested_tests.test_id')
													->where('client_id',$client_id)
													->where('tests.group_id',$nop['group_id'])
													->where('requested_tests.visit_date',$nop['visit_date'])
													->get()->result_array();?>	

													   <tr>
														   <td align="center"><?php echo $count +=1;?></td>
														    <td>
															<?php if ($nop['done']==1):?>
															<?php echo strtoupper($nop['group_name']);?>

															<?php else:?>
																<a href="<?php echo base_url();?>Patients/add_parameta/<?php echo $nop['group_id'];?>/<?php echo $nop['test_id'];?>/<?php echo $nop['client_id'];?>/<?php echo $row['visit_date'];?>"><?php echo strtoupper($nop['group_name']);?></a>
															<?php endif;?>
															</td>	
                                                            <td>
																<?php foreach($cl as $ok):?>		
																	<span class="label label-default"><?php echo $ok['test_name'];?></span>
																<?php endforeach;?>
															</td>	
															<td>
																<?php echo $nop['clinic_name'];?>
															</td>		
															<td>
																<?php echo $nop['doctor_name'];?> | Request Date : <?php echo $nop['request_date'];?> | 
																<?php if ($nop['done']==1):?>
																<a href="<?php echo base_url();?>Patients/view_report/<?php echo $nop['test_id'];?>/<?php echo $client_id;?>/<?php echo $nop['group_id'];?>/<?php echo $nop['visit_date'];?>">Report</i></a>
																
																<?php else:?>
																<?php endif;?>
															</td>		
													   </tr>
													<?php endforeach;?>
													</table>
										</div>
									</div>
								</div>
							<?php }?>
								
							</div>
						</div>
					</div>
					<!-- END ACCORDION PORTLET-->