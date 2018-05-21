                 <?php $currency = $this->db->get('labo')->row()->currency;?> 

                 <?php  $p = $this->db->get_where('sale_temp')->result_array();?>
                    <?php if(empty($p)):?>
                      <div class="alert-success fade in" style="padding: 2%;">
                        <a href="#" class="close" data-dismiss="alert">&times;</a><center> NO ITEMS IN THE CART</center>
                      </div>
                    <?php else:?>
                   <form action="<?php echo base_url();?>Patients/cart_update" method="post">
				   <input type="hidden" name="client_id" id="client_id" value="<?php echo $client_id;?>">
                    <table class="table table-condensed"  style="width: 100%;">
                      <tr class="well">
                        <td></td>
                        <td>Test</td>
                        <td>Price</td>
                        <td>Discount</td>
                        <td>Total Price</td>
                        <td></td>
                      </tr>
                       <tbody>
                    <?php $t_price = 0;?>
                    <?php $count = 1;?>
                    
                    <?php foreach($p as $row):?>
                    <?php $t_price += $row['t_price'];?>
                    <tr>
                      <td> 
                       >>
                      </td>
                      <td style="width: 30%;">
                          <?php echo $this->db->get_where('tests',array('test_id'=>$row['test_id']))->row()->test_name;?>
                      </td>
                      <td  style="width: 20%;">
                        <input type="hidden" name="sale_temp_id[]" value="<?php echo $row['sale_temp_id'];?>">
                        <input type="text" name="p_price[]" value="<?php echo $row['p_price'];?>" class="form-control" style="padding: 0px; height: 25px;">
                      </td>
                       <td  style="width: 12%;">
                        <input type="text" name="discount[]" value="<?php echo $row['discount'];?>" class="form-control" style="text-align: center; padding: 0px; height: 25px;">
                      </td>
                      <td>
                       <b><?php echo $currency.' '.number_format($row['t_price'],2);?></b>
                     </td>
                      <td align="center">
                          <div class="btn-toolbar">
                          <a href="#" onclick="delete_cart(<?php echo $row['sale_temp_id'];?>);">
                            <i class="fa fa-times-circle" style="color: red;"></i>
                          </a>
                        </div>
                      </td>
                    <?php endforeach;?>
                      </tr>
                      <tfoot>
                      <button class="btn btn-block blue-madison" onclick="send_to_cart();">
                          <b>Total Bill : <?php echo $currency.' '.number_format($t_price,2);?></b>
                      </button>
                        <input type="hidden" value="<?php echo $t_price;?>" name="t_bill" id="t_bill">
                       </tr>
                      </tfoot>
                        </tbody>
                  </table>
                  <?php endif;?>
                </form>