					<div class="row">
						<div class="col-md-12">
							<div class="portlet box yellow">
						<div class="portlet-title">
							<div class="caption">
							<?php echo $this->db->get_where('category',array('category_id' =>$category_id))->row()->category;?> |
						    <?php echo $this->db->get_where('category',array('category_id' =>$category_id))->row()->description;?>

							</div>
							
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion" id="accordion3">
							
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
										Test Parameters</a>
										</h4>
									</div>
									<div id="collapse_3_2" class="panel-collapse in">
										<p>
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group" style="padding-left:3%;">
											<a href="<?php echo base_url();?>Categories" class="btn btn-default">
											<i class="fa  fa-chevron-left"></i> BACK 
											</a>
											<button class="btn red" onclick="deletee();">
											<i class="fa  fa-times"></i> DELETE
											</button>
											<a href="<?php echo base_url();?>Categories/creato/<?php echo $category_id;?>" class="btn green">
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
								                <th>Paremeter</th>
								                <th>Test Name</th>
								                <th></th>
								              </tr>
								              </thead>
								              <tbody>
								              <?php
										   $this->db->where('test_parameters.deleted',0);
										   $this->db->order_by('test_parameter_id','DESC');
										   $this->db->where('category.category_id',$category_id);
										   $this->db->join('category','test_parameters.category_id = category.category_id');
										   $this->db->join('tests','test_parameters.test_id = tests.test_id');
										   $query = $this->db->get('test_parameters')->result_array();
											foreach ($query as $row) {?>
								              <tr class="odd gradeX">
								                <td>
								                  <input type="checkbox" class="checkboxes" name="test_parameter_id[]" value="<?php echo $row['test_parameter_id'];?>"/>
								                </td>
								                <td><?php echo $row['test_parameter'];?></td>
								                <td><?php echo $row['test_name'];?></td>
								                <td>
								                <a href="<?php echo base_url();?>Categories/creatoo/<?php echo $row['test_parameter_id'];?>/<?php echo $category_id;?>" class="btn btn-xs btn-info">
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
    