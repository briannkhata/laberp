					<div class="row">
						<div class="col-md-12">
							<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">

							<?php echo $this->db->get_where('company',array('company_id' =>$company_id))->row()->company;?> |
							<?php echo $this->db->get_where('company',array('company_id' =>$company_id))->row()->address;?> |
						  </div>
							
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion3">
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
										Employees</a>
										</h4>
									</div>
									<div id="collapse_3_2" class="panel-collapse in">
										<p>
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group" style="padding-left:3%;">
											<a href="<?php echo base_url();?>Comp_results" class="btn btn-default">
											<i class="fa  fa-chevron-left"></i> BACK 
											</a>
											<!--button class="btn red" onclick="deletee();">
											<i class="fa  fa-times"></i> DELETE
											</button>
											<a href="<?php echo base_url();?>Companies/creato/<?php echo $company_id;?>" class="btn green">
											<i class="fa  fa-plus"></i> ADD NEW STAFF
											</a>
											<a href="<?php echo base_url();?>Company_tests/new_test/<?php echo $company_id;?>" class="btn blue">
											<i class="fa  fa-plus-circle"></i> ADD NEW TEST
											</a-->
										</div>
									</div>
								</div>
							</p>
										<div class="panel-body">

											
											 <table class="table table-striped table-bordered table-hover">
								              <thead>
								              <tr>
								                <th class="table-checkbox">
								                  <input type="checkbox" class="checkall"/>
								                </th>
								                <th>Staff</th>
											    <th>Gender</th>
								                <th>Address</th>
								                <th>Phone</th>
												<th>Age</th>
												<th></th>
								              </tr>
								              </thead>
								              <tbody>
								              <?php
										   $this->db->where('comp_staff.deleted',0);
										   $this->db->where('company.company_id',$company_id);
										   $this->db->where('ctest.count',$count);
										   $this->db->order_by('company_test.cstaff_id','DESC');
										   $this->db->join('company','comp_staff.company_id = company.company_id');
										   $this->db->join('company_test','comp_staff.cstaff_id = company_test.cstaff_id');
										   $this->db->join('ctest','ctest.company_id = company.company_id');
										   $query = $this->db->get('comp_staff')->result_array();
											foreach ($query as $row) {?>
								              <tr class="odd gradeX">
								                <td>
								                  <input type="checkbox" class="checkboxes" name="cstaff_id[]" value="<?php echo $row['cstaff_id'];?>"/>
								                </td>
								                <td><?php echo $row['name'];?></td>
								                <td><?php echo $row['gender'];?></td>
											    <td><?php echo $row['e_address'];?></td>
											    <td><?php echo $row['phone'];?></td>
											    <td><?php echo $row['age'];?></td>
								                <td>
								                <a href="<?php echo base_url();?>Comp_results/view/<?php echo $row['cstaff_id'];?>/<?php echo $company_id;?>/<?php echo $count;?>" class="btn btn-xs btn-info">
												VIEW REPORT</a>
								                </td>
								              </tr>
								            <?php }?>
								            
								              </tbody>
								              </table>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
							</div>
						</div>

						 <script type="text/javascript">
				               function deletee(){
				                 var test_parameter_id = [];
				                  jQuery('.checkboxes:checked').each(function(i,e){
				                    test_parameter_id.push(jQuery(this).val());
				                  });
				                  if(test_parameter_id ==''){
				                    alert('SELECT ATLEAST ONE PARAMETER TO DELETE');
				                  }else{
				                 if(confirm('Are you sure ????')){
				                  
				                  jQuery.post("<?php echo base_url();?>Parameters/delete",
				                  {
				                     test_parameter_id : test_parameter_id
				                  },
				                  function(data,status){
				                    //if(data){
				                      //location.href="Suppliers";
				                      location.reload();
				                   // }
				                  });
				                }
				              }
				            }
						</script>
    