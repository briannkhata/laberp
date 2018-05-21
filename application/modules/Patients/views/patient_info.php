					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
							<?php echo $this->db->get_where('clients',array('client_id' =>$client_id))->row()->name;?> |
							<?php echo $this->db->get_where('clients',array('client_id' =>$client_id))->row()->phone;?> |
						    <?php echo $this->db->get_where('clients',array('client_id' =>$client_id))->row()->dob;?>

							</div>
							<div class="tools" style="font-weight:bold;">
							<a href="<?php echo base_url();?>Patients" style="color:white;"> BACK </a> | 
							<a href="<?php echo base_url();?>Patients/sales/<?php echo $client_id;?>" style="color:white;">NEW TEST REQUEST </a> |
							<a href="#" style="color:white;" onclick="window.print();">PRINT </a>
				
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion1">
							<?php
							$this->db->group_by('requested_tests.visit_date');
							//$this->db->group_by('requested_tests.group_id');
							$this->db->order_by('visit_date','DESC');
							$this->db->join('requested_tests','clients.client_id=requested_tests.client_id');
							$details = $this->db->get_where('clients',array('clients.client_id'=>$client_id))->result_array();
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
													<?php 
													$count=0;
													foreach($g  as $nop):?>
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
																<?php if ($nop['done']==1){?>
																	<?php if ($nop['group_id']==5){?>
																	<a href="<?php echo base_url();?>Patients/misc_report/<?php echo $nop['visit_date'];?>/<?php echo $client_id;?>/<?php echo $nop['test_id'];?>/<?php echo $nop['group_id'];?>">Report</i></a>
																	<?php }else{?>
																	<a href="<?php echo base_url();?>Patients/report/<?php echo $client_id;?>/<?php echo $nop['group_id'];?>/<?php echo $nop['visit_date'];?>">Report</i></a>
																	
																<?php	}
																}?>
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