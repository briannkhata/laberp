			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
							<div class="portlet-body">
							
											<center>
												<span>
													<?php $picc = $this->db->get('labo')->row()->logo;?>
												   <!--img id="image" class="img-circle" width="50" height="50"  src="<?=base_url().'/assets/logos/'.$picc;?>"-->
													<h2 class="text-primary"><?=$this->db->get("labo")->row()->name;?></h2>
														<h6><?=$this->db->get("labo")->row()->address;?></h6>
															<h6><?=$this->db->get("labo")->row()->phone;?></h6>
															<h6><?=$this->db->get("labo")->row()->email;?></h6>
															<h6><u><?=date('d/m/y');?></u></h6>
												</span>
											</center>
									
										</div>
																		<?php  
																		    $cc =   $this->db->query("SELECT * FROM requested_tests  WHERE client_id='$client_id' AND visit_date='$visit_date'");
																			$row = $cc->row();
																			if (isset($row))
																				{
																					$pay_mode   =	$row->pay_mode;
																				}
															
																		//$pay_id=$this->db->get_where('payment_mode',array('pay_mode'=>$pay_mode))->row()->payment_mode_id;
																		//$des = $this->db->get_where('bills',array('client_id'=>$client_id))->row()->description;
																	?>
							<!--section class="sheet padding-20mm">
								<article-->
							<table align="center" style="width:100%;">
								<tr>
							  <td>Client : <?=strtoupper($this->db->get_where("clients",array('client_id'=>$client_id))->row()->name);?> | </td>
							</tr>
							</table>										
							<table class="table" align="center" style="width:100%;">
							<thead>
							<tr>
								<td><b>Tests</b></td>
								<td align="right"></td>
							</tr>
							</thead>
							<tbody>
						 <?php $total_p=0;
						 $prev = $this->db->select('*')->from('sales')
						 ->join('sales_tests','sales_tests.sale_id=sales.sale_id')
						 //->join('sales_tests','sales_tests.sale_id=sales.sale_id')
						//->where('clients.client_id',$client_id)
						 ->where('sales.sale_id',$sale_id)
						 ->get()->result_array();
						 ?>
						 <?php foreach($prev as $row):?>
						 <?php $testname = $this->db->get_where("tests",array('test_id'=>$row['test_id']))->row()->test_name;?>
						 <?php $total_cost = $this->db->get_where("sales",array('client_id'=>$client_id))->row()->total;?>
						 <?php $total_amount = $this->db->get_where("sales",array('client_id'=>$client_id))->row()->t_bill;?>
						 <?php //$discount = $this->db->get_where("bills",array('client_id'=>$client_id,'visit_date'=>$visit_date))->row()->discount;?>
						 <?php $amount_tendered = $this->db->get_where("sales",array('client_id'=>$client_id))->row()->t_amount;?>
						 <?php $change = $this->db->get_where("sales",array('client_id'=>$client_id))->row()->change;?>
						 <?php //if ($total_p > $amount_tendered): $change = - ($change); else: $change=$change; endif;?>
						 <?php $amount = $this->db->get_where("sales_tests",array('test_id'=>$row['test_id']))->row()->amount;?>
				
						 <?php //$total_p +=$amount;?>
						    <tr>
							   <td><?=$testname;?></td>
							   <td align="right"><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amount)),2);?></td>					
							</tr>	
						   <?php endforeach;?>
						 </table>					
						 <table class="table table-striped table-hover" align="center" style="width:100%;">
						
						
						   <tr>
								<td>Total Bill</td>
								<td align="right"><?php echo $this->db->get('labo')->row()->currency;?> : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$total_amount)),2);?></td>
						   </tr>
						    
						    <tr>
								<td>Amount Received</td>
								<td align="right"><?php echo $this->db->get('labo')->row()->currency;?> : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amount_tendered)),2);?></td>
						   </tr>
						   
						    <tr>
								<td>Change/Balance</td>
								<td align="right"><?php echo $this->db->get('labo')->row()->currency;?> : <?php if($total_amount > $amount_tendered): echo '-'.' '. (number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$change)),2)); else: echo number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$change)),2); endif;?></td>
						   </tr>
							</tbody>
							
							 <tr>
								<td></td>
								<td align="right">"THANK YOU"</td>
								
							</tr>
							<tr>
								<td align="right">
									<button type="button" class="btn btn-success no-print" onclick="javascript:window.print()"> <i class="fa fa-print"></i>  PRINT</button> 
								</td>
								<td align="left">
									<a class="btn btn-success no-print" href="<?=base_url();?>Patients/view/<?php echo $client_id;?>"> <i class="fa fa-plus"></i> PATIENT INFORMATION</a> 
								</td>
							</tr>
						</table>
						</div>
						<!--/article>
					</section-->
					</div><!-- /.page-content -->
				</div>
				</div>
			</div><!-- /.main-content -->

