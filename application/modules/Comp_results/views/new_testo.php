                                <div class="row">
                                    <div class="col-md-12">
                                            <div class="portlet-body form" style="background-color:white; height:1000px;">
													<form action="<?=base_url();?>Company_tests/add_company_test" method="post" style="background-color:white;">			
													<br>
													       <div class="form-body" style="background-color:white;">
                                                 	
														<?php if ($this->session->flashdata('message')) { ?>
															<div class="alert alert-success fade in">
																<a href="#" class="close" data-dismiss="alert">&times;</a><center><?php echo $this->session->flashdata('message'); ?> </center>
															</div>
														<?php } ?>	
															<div class="col-md-8">
																<div class="form-group">
																<label>Company</label>
															    <input type="hidden" name="count" value="<?php echo $count;?>">
																<input type="hidden" name="request_date" value="<?php echo $request_date;?>">
                                                                <input type="hidden" name="company_id"  value="<?php echo $company_id;?>">
                                                                <input type="text" class="form-control" value="<?php echo $this->db->get_where('company',array('company_id'=>$company_id))->row()->company;?>" readonly>
																</div>
															</div>
															
															<div class="col-md-4">
																<div class="form-group">
																<label>Staff</label>
																	<select name="cstaff_id" class="form-control" id="coD">
																	  <?php 
																	    $data = [];
																		$db = $this->db->select('cstaff_id')->from('company_test')
																		->where('count',$count)
																	    ->where('company_id',$company_id)
																		->get()->result_array();
																		if(count($db) > 0)
																		{
																			foreach($db as $row)
																			{ $data[] = $row['cstaff_id']; }
																		}
																		$this->db->select('*');
																		if(!empty($data))
																		$this->db->where_not_in('cstaff_id',$data);
																		$this->db->where('deleted',0);
																		$this->db->where('company_id',$company_id);
																		$ra = $this->db->get('comp_staff')->result_array();
																	  foreach($ra as $row):?>
																		<option value="<?=$row['cstaff_id'];?>"><?=$row['name'];?></option>
																	  <?php endforeach;?>
																	</select>
																</div>
															</div>
															
														<?php if (count($ra)>0):?>
															<div class="col-md-12">
																<div class="form-group">
																	<h3 class="form-section">STOOL</h3>
																</div>
															</div>
															
															<div class="col-md-2">
																<div class="form-group">
																	<label>Colour</label>
																	 <select name="scolour" class="form-control" id="s1">
																		<option value="Brown">Brown</option>
																		<option value="Yellow">Yellow</option>
																		<option value="Black">Black</option>
																		<option value="Dark Brown">Dark Brown</option>
																	
																	</select>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-group">
																	<label>Consistency</label>
																	 <select name="sconsistency" class="form-control" id="s2">
																		<option value="Formed">Formed</option>
																		<option value="Soft">Soft</option>
																		<option value="Watery">Watery</option>
																		<option value="Hard">Hard</option>
																	</select>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-group">
																	<label>Mucus</label>
																	 <select name="smucus" class="form-control" id="s3">
																		<option value="Absent">Absent</option>
																		<option value="Present">Present</option>													
																	</select>
																</div>
															</div>
															<div class="col-md-2">
																<div class="form-group">
																	<label>Blood</label>
																	 <select name="sblood" class="form-control" id="s4">
																		<option value="Absent">Absent</option>
																		<option value="Present">Present</option>
																	</select>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label>	Parasite</label>
																	 <!--select name="sparasite" class="form-control" id="s5">
																		<option value="">Result</option>
																		<option value="Absent">Absent</option>
																		<option value="Present">Present</option>
																	</select-->
																	<input type="text" class="form-control" name="sparasite" placeholder="Parasite"/>
																</div>
															</div>
															
															
														<div class="col-md-12">
															<div class="form-group">
																<h3 class="form-section">STOOL MICROSCOPY</h3>
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label>WBC</label>	
																<input type="text" class="form-control" name="stu_micro_wbc" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="stu_micro_rbc" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="stu_micro_ova" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>Parasites</label>	
																<input type="text" placeholder="Parasites" class="form-control" name="stu_micro_parasites"/>
															</div>
														</div>
															
															
														
														<div class="col-md-12">
															<div class="form-group">
																<h3 class="form-section">URINE</h3>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Colour</label>	
																<input type="text" placeholder="Colour" class="form-control" name="ucolour"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Appearance</label>	
																 <input type="text" placeholder="Appearance" class="form-control" name="uappearance"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Urobilinoen</label>	
																<input type="text" placeholder="Urobilinogen" class="form-control" name="urobilinogen"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Bilirubin</label>	
																<input type="text" placeholder="Bilirubin" class="form-control" name="ubilirubin"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Protein</label>	
																<input type="text" placeholder="Protein" class="form-control" name="uprotein"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Nitrite</label>	
																<input type="text" placeholder="Nitrite" class="form-control" name="unitrite"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Glucose</label>	
																<input type="text" placeholder="Glucose" class="form-control" name="uglucose"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Leucocytes</label>	
																<input type="text" placeholder="Leucocytes" class="form-control" name="uleucocytes"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Blood</label>	
																<input type="text" placeholder="Blood" class="form-control" name="ublood"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Ascobic Acid</label>	
																<input type="text" placeholder="Ascobic Acid" class="form-control" name="uascobic_acid"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>PH</label>	
																<input type="text" placeholder="PH" class="form-control" name="uph"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>	ketones</label>	
																<input type="text" placeholder="Ketones" class="form-control" name="uKetones"/>
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>SG</label>	
																<input type="text" placeholder="SG" class="form-control" name="usg"/>
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="form-group">
																<h3 class="form-section">URINE MICROSCOPY</h3>
															</div>
														</div>
													
														<div class="col-md-3">
															<div class="form-group">
																<label>WBC</label>	
																<input type="text" class="form-control" name="ura_micro_wbc" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="ura_micro_rbc" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="ura_micro_ova" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>Parasites</label>	
																<input type="text" placeholder="Parasites" class="form-control" name="ura_micro_parasites"/>
															</div>
														</div>

													
														
								
														<div class="col-md-12">
															<div class="form-group">
																<label>Other Tests</label>	
																 <input type="text" class="form-control" name="other_tests"/>
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="form-group">
																<label>Comment</label>	
																 <input type="text" placeholder="Comment" class="form-control" name="comment"/>
															</div>
														</div>
															

														</div>
														
															<div class="col-md-12">
																<div class="form-group">
																	<a href="<?php echo base_url();?>Company_tests/new_test/<?php echo $company_id;?>" style="margin-left:1%;" class="btn default"> BACK</a>
																	<button type="submit" style="margin-left:1%;" class="btn green" id="lucia"><i class="fa fa-plus"></i> ADD RESULTS</button>
																</div>
															</div>
															</div>
															<?php else:?>
															<?php endif;?>
													</form>
													</div>
										
									</div>
								</div>
							</div>


