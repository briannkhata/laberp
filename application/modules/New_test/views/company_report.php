<style type="text/css">
.myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#BDB76B;color:white;width:50%; }
.myOtherTable td, .myOtherTable th { padding:0.4px;border:0; }
.myOtherTable td { border-bottom:1px dotted #BDB76B; }
</style>
<?php
$onse = $this->db->select('*')->from('company_test')
											//->join('urina','company_test.urina_id=urina.urina_id')
											//->join('stula','company_test.stula_id=stula.stula_id')
											//->join('company','company_test.company_id=company.company_id')
											//->join('ura_micro','company_test.ura_micro_id=ura_micro.ura_micro_id')
											//->join('stu_micro','company_test.stu_micro_id=stu_micro.stu_micro_id')
											//->order_by('company_test_id','DESC')
											->where('cstaff_id',$cstaff_id)
										    ->where('company_id',$company_id)
										    ->where('count',$count)
											->get()->result_array();
											$ctest_id = $this->db->get_where('ctest',array('count'=>$count))->row()->ctest_id;
											foreach($onse as $row){?>
		
			<div class="portlet light">
				<div class="portlet-body">
													<div class="row fet" style="padding-top:0%;">
														<div class="row" style="padding-left:2%; margin-top:-2%;" id="topp">
															<center><b class="text-primary text-center" style="color:black; font-size:36px"><?=strtoupper($this->db->get('labo')->row()->name);?></b></center>  
														</div>
									
														<div class="row" style="padding-left:2%; margin-top:-2%;">
															 <span><h6 class="text-primary text-center" style="color:black;"><b>(PRIVATE PATHOLOGY LABORATORY)</b></h6></span>
															 <span><h6 class="text-primary text-center" style="color:black;">CERTIFIED BY MEDICAL COUNCIL OF MALAWI</h6></span>
														</div>
										
													
													<div class="row text-center" style="padding-left:2%; align:center;">
														<span>BLANTYRE</span><span> : 01 822 696 / </span>
														<span>LILONGWE</span><span>  : 0 111 912 076 / </span>
														<span>MZUZU</span><span> : 0 111 930 344</span>
													</div>
												    
														<div class="note note-info note-shadow">
															<h3 class="text-center"><b>FOOD HANDLERS LABORATORY RESULTS</b></h3>
														</div>
													<hr>
												
										
											
												<table class="table-striped table-hover"  style="width:45%; margin-left:4%;  font-size:13px;">
														<tbody>
														<tr>
														   <th align="right">Staff Name</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('comp_staff',array('cstaff_id'=>$cstaff_id))->row()->name);?></b></th>
														</tr>
												        
														<tr>
														   <th align="right">Company</th>
														   <th align="left">: <b><?php if(!empty($this->db->get_where('company',array('company_id'=>$company_id))->row()->company)): echo strtoupper($this->db->get_where('company',array('company_id'=>$company_id))->row()->company); else: echo ""; endif;?></b></th>
														</tr>
														
														<tr>
														   <th align="right">Address</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('comp_staff',array('cstaff_id'=>$cstaff_id))->row()->e_address);?></b></th>
														</tr>
														
														<tr>
														   <th align="right">Request Date</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('company_test',array('company_test_id'=>$row['company_test_id']))->row()->request_date);?></b></th>
														</tr>
														</tbody>
													</table>
												</div>
												<hr>
										<div class="row">
										     <p>
											 <table class="table-striped table-hover myOtherTable pull left" id="tolo2"  style="width:45%; padding:0.3%; border:1px dashed; border-radius:3px; margin-left:4%;font-size:13px;">
											 	<thead>
													<tr>
													   <th colspan="3"><b>STOOL</b></th>
													</tr>
												</thead>
												<tbody>
													<?php $ee=$this->db->get_where('stula',array('stula_id'=>$row['stula_id']))->result_array();?>
													<?php foreach($ee as $d):?>
													<tr>
														<td><?=strtoupper('Colour');?><td> <td align="left" width=""> : <?=$d['scolour'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Consistency');?><td> <td align="left"> : <?=$d['sconsistency'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Mucus');?><td> <td align="left"> : <?=$d['smucus'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Blood');?><td> <td align="left"> : <?=$d['sblood'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Parasites');?><td align="left"> <td> : <?=$d['sparasite'];?></td>
													</tr>
													<?php endforeach;?>
												</tbody>
											    <tbody>
												   <tr>
													   <th colspan="3"><b>MICROSCOPY</b></th>
													</tr>
													<?php $eew=$this->db->get_where('stu_micro',array('stu_micro_id'=>$row['stu_micro_id']))->result_array();?>
													<?php foreach($eew as $d):?>
													<tr>
														<td>WBC<td> <td align="left"> : <?=$d['stu_micro_wbc'];?></td>
													</tr>
													
													<tr>
														<td>RBC<td> <td align="left"> : <?=$d['stu_micro_rbc'];?></td>
													</tr>
													
													<tr>
														<td>OVA<td> <td align="left"> : <?=$d['stu_micro_ova'];?></td>
													</tr>
													
													<tr>
														<td>Parasites<td> <td align="left"> : <?=$d['stu_micro_parasites'];?></td>
													</tr>
												
													<?php endforeach;?>
												</tbody>
											 </table>
										</p>
								
				
										    <table class="table-striped table-hover myOtherTable" align="center" id="tolo0" style="width:45%; border:1px dashed;padding:0.3%; border-radius:3px;float;right; margin-top:-34%;margin-right:4%; font-size:13px;">
												<thead>
													<tr>
													   <th colspan="3"><b>URINE</b></th>
													</tr>
												  
												</thead>
												<tbody>
													<?php $eee=$this->db->get_where('urina',array('urina_id'=>$row['urina_id']))->result_array();?>
													<?php foreach($eee as $d):?>
													<tr>
														<td style=""><?=strtoupper('Colour');?><td> <td align="left"> : <?=$d['ucolour'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Appearance');?><td> <td align="left"> : <?=$d['uappearance'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Protein');?><td> <td align="left"> : <?=$d['uprotein'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Blood');?><td> <td align="left"> : <?=$d['ublood'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Glucose');?><td align="left"><td> : <?=$d['uglucose'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Ketones');?><td> <td align="left"> : <?=$d['uketones'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Ascobic Acid');?><td> <td align="left"> : <?=$d['uascobic_acid'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Bilirubin');?><td> <td align="left"> : <?=$d['ubilirubin'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Robilinogen');?><td> <td align="left"> : <?=$d['urobilinogen'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Nitrite');?><td align="left"> <td> : <?=$d['unitrite'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Leucocytes');?><td> <td align="left"> : <?=$d['uleucocytes'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('PH');?><td align="left"> <td> : <?=$d['uph'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('SG');?><td align="left"> <td> : <?=$d['usg'];?></td>
													</tr>
													<?php endforeach;?>
													<br><br>
												<tbody>
												   
													<tr>
													   <th colspan="3"><b>MICROSCOPY</b></th>
													</tr>
													<?php $eew=$this->db->get_where('ura_micro',array('ura_micro_id'=>$row['ura_micro_id']))->result_array();?>
													<?php foreach($eew as $d):?>
													<tr>
														<td>WBC<td> <td align="left"> : <?=$d['ura_micro_wbc'];?></td>
													</tr>
													
													<tr>
														<td>RBC<td> <td align="left"> : <?=$d['ura_micro_rbc'];?></td>
													</tr>
													
													<tr>
														<td>OVA<td> <td align="left"> : <?=$d['ura_micro_ova'];?></td>
													</tr>
													
													<tr>
														<td>Parasites<td> <td align="left"> : <?=$d['ura_micro_parasites'];?></td>
													</tr>
												
													<?php endforeach;?>
												</tbody>
											 </table>
											<p></p>
								    </div>
									<hr>
										<div class="row" style="margin-left:3%;">
										
										   <table class="table-striped table-hover myOtherTable">
											   <tr>
											    <td style="width : 20%;"><b>OTHER TESTS</b> </td>
											    <td style="width : 80%;"> :  <?php if (!empty($this->db->get_where('company_test',array('company_test_id'=>$row['company_test_id']))->row()->other_tests)): echo $this->db->get_where('company_test',array('company_test_id'=>$row['company_test_id']))->row()->other_tests; else: echo ''; endif;?></td>
											   </tr>
											  </table>
											
											 <table class="table-striped table-hover myOtherTable">
											   <tr>
											    <td>COMMENT </td>
											    <td>: <?php if (!empty($this->db->get_where('company_test',array('company_test_id'=>$row['company_test_id']))->row()->comment)): echo $this->db->get_where('company_test',array('company_test_id'=>$row['company_test_id']))->row()->comment; else: echo ''; endif;?></td>
											   </tr>
											  </table>
											  
											   <table class="table-striped table-hover myOtherTable">
												   <tr>
												
														<td>SIGNATURE   </td>
														<td style="width : 60%;">: </td>
													
														<td>DATE   </td>
														<td style="width : 60%;">: <?=date('d-F-Y');?> </td>
													</tr>
											  </table>
											
										</div>
					
								<div class="row" style="margin-left:3%;">
									<h5 class="text-center"><u>FOR DOCTOR'S USE ONLY</u></h5>
									<p>
									    <table class="table-striped table-hover myOtherTable">
												   <tr>
													   <td>TREATMENT </td>
													   <td>: </td>
												   </tr>
													<tr>
														<td>SIGNATURE   </td>
														<td style="width : 60%;">: </td>
													
														<td>DATE   </td>
														<td style="width : 60%;">: </td>
													</tr>
											  </table>
									
											</div>
									<br>
						                    <div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green" onclick="print();"><i class="fa fa-print"></i> Print</button>
																<a href="<?=base_url();?>New_test/edit_company_report/<?=$row['company_test_id'];?>/<?=$row['urina_id'];?>/<?=$row['stula_id'];?>/<?=$row['stu_micro_id'];?>/<?=$row['ura_micro_id'];?>/<?=$company_id;?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit </a>				
																<a href="<?=base_url();?>New_test/view/<?php echo $ctest_id;?>/<?php echo $company_id;?>/<?php echo $count;?>" class="btn default"><< Back</a>
																
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
						
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
 <?php }?>