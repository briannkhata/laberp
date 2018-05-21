<div class="portlet box grey-cascade" style="border-top:1px solid #C3BFBF;">
          <div class="portlet-body" style="padding-top:20px;">
              <div class="table-toolbar">
                <div class="row">
                 <div class="col-md-6">
                    <div class="btn-group">
                    <a href="<?php echo base_url();?>Sales_report" class="btn btn-sm btn-default"> << BACK </a>
                     <button class="btn btn-sm btn-default" onclick="window.print()"> <i class="fa fa-print"></i> PRINT </button>
                </div>
              </div>
          </div>
        </div>
              <hr>
              <center style="font-weight: bold;">Sales Report | <?php echo $from.' to '.$to;?></center>
              <hr>

					<!-- BEGIN ACCORDION PORTLET-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption"> 
							SALES REPORT DETAILS | 

							<?php
		$this->db->where('sales.deleted',0);
		  $this->db->where('sale_time BETWEEN "'. date('Y-m-d',strtotime($from)). '" and "'. date('Y-m-d',strtotime($to)).'"');
		    $this->db->select_sum('total');
		      $this->db->from('sales');
			$total_sales = $this->db->get();
            echo number_format($total_sales->row()->total,2);?>
							</div>
						</div>
						<div class="portlet-body">
							<div class="panel-group accordion scrollable" id="accordion2">
							         <?php 
			$this->db->where('sales.deleted',0);
		  $this->db->where('sale_time BETWEEN "'. date('Y-m-d',strtotime($from)). '" and "'. date('Y-m-d',strtotime($to)).'"');
		    $this->db->order_by('sale_time','DESC');
		    $this->db->join('clients','clients.client_id = sales.client_id');
			$sales = $this->db->get('sales')->result_array();
              foreach ($sales as $row) {?>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $row['sale_id'];?>">
										SALE DATE <?php echo $row['sale_time'];?></a>
										</h4>
									</div>
									<div id="collapse_<?php echo $row['sale_id'];?>"" class="panel-collapse collapse">
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
                                                <th>Discount</th>
                                                <th>Total </th>
                                              </tr>
                                              </thead>
                                              <tbody>
                                              <?php
                                           $tests = $this->db->select('*')
                                          ->from('requested_tests')
                                          ->join('tests','requested_tests.test_id=tests.test_id')
                                          ->join('sales_tests','requested_tests.test_id=sales_tests.test_id')
                                          ->where('sales_tests.sale_id',$row['sale_id'])
                                          ->get()->result_array();
                                            foreach ($tests as $row) {?>
                                              <tr class="odd gradeX">
                                                <td>
                                                  <input type="checkbox" class="checkboxes" name="test_id[]" value="<?php echo $row['test_id'];?>"/>
                                                </td>
                                                <td><?php echo $row['test_code'];?></td>
                                                <td><?php echo $row['test_name'];?></td>
                                                <td>
                                                <?php if(!empty($row['amount'])) {echo number_format($row['amount'],2);} else 
                                                {
                                                    echo number_format(0,2);}?>
                                                        
                                                    </td>
                                                <td><?php echo number_format($row['discount'],2);?></td>
                                                <td><?php echo number_format($row['amount'] - $row['discount'],2);?></td>
                                              </tr>
                                            <?php }?>
                                            
                                              </tbody>
                                              </table>
										</div>
									</div>
								</div>
						<?php } ?>
								
							</div>
						</div>
					</div>

            </div>
          </div>
        </div>
      </div>
