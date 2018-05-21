                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet box yellow">
                        <div class="portlet-title">
                            <div class="caption">
                               SALE DATE  <?php echo $this->db->get_where('sales',array('sale_id' =>$sale_id))->row()->sale_time;?> |
                              TOTAL BILL  <?php echo number_format($this->db->get_where('sales',array('sale_id' =>$sale_id))->row()->total,2);?> 
                            </div>
                            
                        </div>
                        <div class="portlet-body">
                            <div class="panel-group accordion" id="accordion3">
                    
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a class="accordion-toggle accordion-toggle-styled collapsed" data-toggle="collapse" data-parent="#accordion3" href="#collapse_3_2">
                                        SALE DETAILS</a>
                                        </h4>
                                    </div>
                                    <div id="collapse_3_2" class="panel-collapse in">
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
                                          ->where('sales_tests.sale_id',$sale_id)
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
                                
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>

                     