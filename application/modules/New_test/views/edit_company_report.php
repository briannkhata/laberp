
							<div class="row">

				<div class="col-md-12">
					<div class="portlet light" style="height:1050px;">
							
							<div class="portlet-body">
																	
	
												 <?php  foreach($rr as $row):?>
													<form action="<?=base_url();?>New_test/update_company_test" method="post" id="formtest">			
													
															<div class="col-md-8">
																<div class="form-group">
																<label>Company</label>
                                                                <input type="text" class="form-control" value="<?php echo $this->db->get_where('company',array('company_id'=>$row['company_id']))->row()->company;?>" readonly>
																</div>
															</div>
															
															<div class="col-md-4">
																<div class="form-group">
																<label>Staff</label>
                                                                <input type="text" class="form-control" value="<?php echo $this->db->get_where('comp_staff',array('cstaff_id'=>$row['cstaff_id']))->row()->name;?>" readonly>
																</div>
															</div>
															
													
														
															<div class="col-md-12">
																<div class="form-group">
																	<h3 class="form-section">STOOL</h3>
																</div>
															</div>
															
															<div class="col-md-3">
																<div class="form-group">
																	<label>Colour</label>
																	 <select name="scolour" class="form-control" id="s1">
																		<option value="">Result</option>
																		<option <?php if($row['scolour'] == 'Brown'): echo 'selected'; endif;?> value="Brown">Brown</option>
																		<option <?php if($row['scolour'] == 'yellow'): echo 'selected'; endif;?> value="Yellow">Yellow</option>
																		<option <?php if($row['scolour'] == 'Black'): echo 'selected'; endif;?> value="Black">Black</option>
																		<option <?php if($row['scolour'] == 'Dark Brown'): echo 'selected'; endif;?> value="Dark Brown">Dark Brown</option>
																	
																	</select>
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label>Consistency</label>
																	 <select name="sconsistency" class="form-control" id="s2">
																		<option value="">Result</option>
																		<option <?php if($row['sconsistency'] == 'Formed'): echo 'selected'; endif;?>value="Formed">Formed</option>
																		<option <?php if($row['sconsistency'] == 'Soft'): echo 'selected'; endif;?>value="Soft">Soft</option>
																		<option <?php if($row['sconsistency'] == 'Watery'): echo 'selected'; endif;?>value="Watery">Watery</option>
																		<option <?php if($row['sconsistency'] == 'Hard'): echo 'selected'; endif;?>value="Hard">Hard</option>
																	</select>
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label>Mucus</label>
																	 <select name="smucus" class="form-control" id="s3">
																		<option value="">Result</option>
																		<option <?php if($row['smucus'] == 'Absent'): echo 'selected'; endif;?>value="Absent">Absent</option>
																		<option <?php if($row['smucus'] == 'Present'): echo 'selected'; endif;?>value="Present">Present</option>													
																	</select>
																</div>
															</div>
															<div class="col-md-3">
																<div class="form-group">
																	<label>Blood</label>
																	 <select name="sblood" class="form-control" id="s4">
																		<option value="">Result</option>
																		<option <?php if($row['sblood'] == 'Absent'): echo 'selected'; endif;?> value="Absent">Absent</option>
																		<option <?php if($row['sblood'] == 'Present'): echo 'selected'; endif;?> value="Present">Present</option>
																	</select>
																</div>
															</div>
															<div class="col-md-4">
																<div class="form-group">
																	<label>	Parasite</label>
																	 <select name="sparasite" class="form-control" id="s5">
																		<option value="">Result</option>
																		<option <?php if($row['sparasite'] == 'Absent'): echo 'selected'; endif;?> value="Absent">Absent</option>
																		<option <?php if($row['sparasite'] == 'Present'): echo 'selected'; endif;?> value="Present">Present</option>
																	</select>
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
																<input type="text" class="form-control" name="stu_micro_wbc" value="<?=$row['stu_micro_wbc'];?>" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="stu_micro_rbc" value="<?=$row['stu_micro_rbc'];?>" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="stu_micro_ova" value="<?=$row['stu_micro_ova'];?>" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>Parasites</label>	
																<input type="text" placeholder="Parasites" class="form-control" value="<?=$row['stu_micro_parasites'];?>" name="stu_micro_parasites"/>
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
																<input type="text" placeholder="Colour" class="form-control" value="<?=$row['ucolour'];?>" name="ucolour"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Appearance</label>	
																 <input type="text" placeholder="Appearance" class="form-control"value="<?=$row['uappearance'];?>"  name="uappearance"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Urobilinoen</label>	
																<input type="text" placeholder="Urobilinogen" class="form-control"value="<?=$row['urobilinogen'];?>"  name="urobilinogen"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Bilirubin</label>	
																<input type="text" placeholder="Bilirubin" class="form-control" value="<?=$row['ubilirubin'];?>"  name="ubilirubin"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Protein</label>	
																<input type="text" placeholder="Protein" class="form-control" value="<?=$row['uprotein'];?>"  name="uprotein"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Nitrite</label>	
																<input type="text" placeholder="Nitrite" class="form-control" value="<?=$row['unitrite'];?>"  name="unitrite"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Glucose</label>	
																<input type="text" placeholder="Glucose" class="form-control" value="<?=$row['uglucose'];?>"  name="uglucose"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Leucocytes</label>	
																<input type="text" placeholder="Leucocytes" class="form-control" value="<?=$row['uleucocytes'];?>"  name="uleucocytes"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Blood</label>	
																<input type="text" placeholder="Blood" class="form-control" value="<?=$row['ublood'];?>"  name="ublood"/>
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>Ascobic Acid</label>	
																<input type="text" placeholder="Ascobic Acid" class="form-control" value="<?=$row['uascobic_acid'];?>"  name="uascobic_acid"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>PH</label>	
																<input type="text" placeholder="PH" class="form-control" name="uph" value="<?=$row['uph'];?>" />
															</div>
														</div>
														<div class="col-md-2">
															<div class="form-group">
																<label>	ketones</label>	
																<input type="text" placeholder="Ketones" class="form-control" name="uKetones" value="<?=$row['uketones'];?>"  />
															</div>
														</div>
														<div class="col-md-3">
															<div class="form-group">
																<label>SG</label>	
																<input type="text" placeholder="SG" class="form-control" name="usg" value="<?=$row['usg'];?>" />
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
																<input type="text" class="form-control" name="ura_micro_wbc" value="<?=$row['ura_micro_wbc'];?>" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="ura_micro_rbc" value="<?=$row['ura_micro_rbc'];?>" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="ura_micro_ova" value="<?=$row['ura_micro_ova'];?>" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-3">
															<div class="form-group">
																<label>Parasites</label>	
																<input type="text" placeholder="Parasites" class="form-control" value="<?=$row['ura_micro_parasites'];?>" name="ura_micro_parasites"/>
															</div>
														</div>
															
														<div class="col-md-12">
															<div class="form-group">
																<label>Other Tests</label>	
																 <input type="text" placeholder="Parasites" class="form-control" name="other_tests" value="<?=$row['other_tests'];?>" />
															</div>
														</div>
														
														<div class="col-md-12">
															<div class="form-group">
																<label>Comment</label>	
																 <input type="text" placeholder="Comment" class="form-control" name="comment" value="<?=$row['comment'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="company_test_id" value="<?=$row['company_test_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="urina_id" value="<?=$row['urina_id'];?>" />
																 <input type="hidden" name="company_id" value="<?=$row['company_id'];?>" />
																 <input type="hidden" name="count" value="<?=$row['count'];?>" />
															     <input type="hidden" name="cstaff_id" value="<?=$row['cstaff_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="stula_id" value="<?=$row['stula_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="ura_micro_id" value="<?=$row['ura_micro_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="stu_micro_id" value="<?=$row['stu_micro_id'];?>" />
															</div>
														</div>
															

														</div>
														
															<div class="col-md-12">
																<div class="form-group">
																	<button type="submit" class="btn green" id="lucia"><i class="fa fa-plus"></i> SAVE CHANGES</button>
																</div>
															</div>
													</form>
													<?php endforeach;?>
														<p></p>
													</div>
													</div></div></div>
										
			
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>


