					<div class="row">
						<div class="col-md-12">
							<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
								<?php echo $this->db->get_where('group',array('group_id' =>$group_id))->row()->group_name;?> |
								<?php echo $this->db->get_where('group',array('group_id' =>$group_id))->row()->description;?> 
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion3">
					
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
										Tests</a>
										</h4>
									</div>
									<div id="collapse_3_2" class="panel-collapse in">
										<p>
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group" style="padding-left:3%;">
											<a href="<?php echo base_url();?>Groups" class="btn btn-default">
												<i class="fa  fa-chevron-left"></i> BACK 
											</a>
											<button class="btn red" onclick="deletee();">
											<i class="fa  fa-times"></i> DELETE
											</button>
											<a href="<?php echo base_url();?>Groups/creato/<?php echo $group_id;?>" class="btn green">
											<i class="fa  fa-plus"></i> ADD NEW
											</a>
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
								                <th>Test Code</th>
								                <th>Test Name</th>
								                <th>Amount</th>
												<th></th>
								              </tr>
								              </thead>
								              <tbody>
								              <?php
										   $this->db->where('tests.deleted',0);
										   $this->db->order_by('test_id','DESC');
										   $this->db->where('group.group_id',$group_id);
										   $this->db->join('group','tests.group_id = group.group_id');
										   $query = $this->db->get('tests')->result_array();
											foreach ($query as $row) {?>
								              <tr class="odd gradeX">
								                <td>
								                  <input type="checkbox" class="checkboxes" name="test_id[]" value="<?php echo $row['test_id'];?>"/>
								                </td>
								                <td><?php echo $row['test_code'];?></td>
								                <td><?php echo $row['test_name'];?></td>
												<td><?php if(!empty($row['amount'])) {echo number_format($row['amount'],2);} else 
												{
													echo number_format(0,2);}?></td>
								                <td>
								                <a href="<?php echo base_url();?>Groups/creatoo/<?php echo $row['test_id'];?>/<?php echo $group_id;?>" class="btn btn-xs btn-info">
												<i class="fa fa-edit"></i> Edit</a>
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
				                 var test_id = [];
				                  jQuery('.checkboxes:checked').each(function(i,e){
				                    test_id.push(jQuery(this).val());
				                  });
				                  if(test_id ==''){
				                    alert('SELECT ATLEAST ONE TEST TO DELETE');
				                  }else{
				                 if(confirm('Are you sure ????')){
				                  
				                  jQuery.post("<?php echo base_url();?>Tests/delete",
				                  {
				                     test_id : test_id
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
    