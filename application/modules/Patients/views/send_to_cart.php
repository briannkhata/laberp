 <?php $currency = $this->db->get('labo')->row()->currency;?> 
 <div class="col-md-4 well" style="padding: 1%; margin-top: 0%;">
              <?php 
                  $this->db->select_sum('t_price');
                  $query = $this->db->get('sale_temp');                                             
                  
                ?>
                <form action="<?php echo base_url();?>Patients/submit_sale" method="post">
                   <div class="input-group">
                      <span class="input-group-addon">
                        CLIENT
                        </span>
                        <input type="hidden" name="client_id" id="client_id" value="<?php echo $client_id;?>"></input>
                        <input type="text" class="form-control" value="<?php echo strtoupper($this->db->get_where('clients',array('client_id'=>$client_id))->row()->name);?>" readonly></input>

                    </div><br>
					 <div class="input-group">
                      <span class="input-group-addon">
					  CLINIC
                        </span>
                        <select class="form-control" name="clinic_id">
						<?php $cl = $this->db->get_where('clinics',array('deleted'=>0))->result_array();
						foreach($cl as $row){?>
					       <option value="<?php echo $row['clinic_id'];?>"><?php echo $row['clinic_name'];?></option>
						   <?php }?>
                        </select>           
                    </div><br>
                
                     <table class="table">
                      <input type="hidden" class="form-control" name="t_bill" id="t_bill" value="<?php echo $query->row()->t_price;?>" ></input>
                      <tr>
                         <td>Total</td>
                         <td>
                          <b><?php echo $currency;?><?php echo number_format($query->row()->t_price,2);?></b>
                         </td>
                      </tr>
                    </table>
					
					 <div class="input-group">
                      <span class="input-group-addon">
                        </span>
                        <select class="form-control" name="payment_type">
					       <option value="Cash">Cash</option>
                           <option value="Masm">Masm</option>
                           <option value="Cheque">Cheque</option>
                           <option value="Credit Card">Credit Card</option>
                           <option value="Visa Card">Visa Card</option>
                           <option value="Mpamba">Mpamba</option>
                           <option value="Airtel Money">Airtel Money</option>
                        </select>           
                    </div><br>


                     <div class="input-group">
                       <span class="input-group-addon">
                          <?php echo $currency;?> 
                        </span>
                        <input type="text" class="form-control" name="t_amount" id="t_amount" value="<?php echo $query->row()->t_price;?>"></input>
                       
                    </div><br>
					<div class="input-group">
                       <span class="input-group-addon">
                         REQUEST DATE
                        </span>
                        <input type="date" class="form-control" name="request_date"></input>
                    </div><br>
					<div class="input-group">
                       <span class="input-group-addon">
                         DOCTOR
                        </span>
                        <input type="text" class="form-control" name="doctor_name"></input>
                    </div><br>

                   
                  
                      <div class="btn-group inline">
                        <button type="button" class="btn btn-danger" onclick="clear_cart()" style="width: 50%;">CANCEL <i class="fa fa-refresh"></i></button> 
                        <button type="submit" class="btn blue-madison" style="width: 50%;">CONTINUE <i class="fa fa-arrow-circle-right"></i></button>
                      </div>
                </form>         