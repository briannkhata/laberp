<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>LabSystem</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>


<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url();?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?php echo base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/printt.css" rel="stylesheet" type="text/css" media="print"/>
<!--link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ospos.css" /-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ospos_print.css" media="print" />

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo base_url();?>assets/pos_icon.png"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
  <!-- BEGIN HEADER INNER -->
  <div class="page-header-inner">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
      <a href="#">
        <h4 style="font-weight: bold;" class="logo-default">
          LAB SYSTEM</h4>
      <!--img src="<?php echo base_url();?>assets/pos_icon.png" style="width: 30px; height: 30px; margin-left: 20%;" alt="logo" class="logo-default"/-->
      </a>
      <div class="menu-toggler sidebar-toggler">
        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
      </div>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
    </a>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <!-- BEGIN PAGE ACTIONS -->
    <!-- DOC: Remove "hide" class to enable the page header actions -->
    <div class="page-actions">
      
    </div>
    <!-- END PAGE ACTIONS -->
    <!-- BEGIN PAGE TOP -->
    <div class="page-top">
      <!-- BEGIN HEADER SEARCH BOX -->
      <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
      
      <!-- END HEADER SEARCH BOX -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
          
          <!-- END TODO DROPDOWN -->
          <!-- BEGIN USER LOGIN DROPDOWN -->
          <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
          <li class="dropdown dropdown-user dropdown-dark">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <span class="username username-hide-on-mobile">
            <?php echo $this->session->userdata('name');?></span>
            <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
            <!--img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/-->
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
              <!--li>
                <a href="<?php echo base_url();?>Login/profile">
                <i class="icon-user"></i> My Profile </a>
              </li-->
              
              <li>
                <a href="<?php echo base_url();?>Login/Logout">
                <i class="icon-key"></i> Log Out </a>
              </li>
            </ul>
          </li>
          <!-- END USER LOGIN DROPDOWN -->
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END PAGE TOP -->
  </div>
  <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
      <!-- BEGIN SIDEBAR MENU -->
      <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
      <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
      <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
      <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
      <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
      <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start ">
					<a href="<?php echo base_url();?>Dashboard">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>

	<?php 
		 $modules = $this->db->select('*')
 		 ->from('modules')
 		->join('user_module_actions','user_module_actions.module_id = modules.module_id')
 		->where('user_type',$this->session->userdata('user_type'))
 		//->where('module_id',$mod['module_id'])
 		->group_by('modules.module_id')
 	    ->order_by('sort','ASC')
 	    ->where('active',1)
 		->get()->result_array();
 		
 		foreach($modules as $mod):
 		$sub_modules =  $this->db->select('*')
 		->from('sub_modules')
 		->join('user_sub_module_actions','user_sub_module_actions.sub_module_id = sub_modules.sub_module_id')
 		->where('user_type',$this->session->userdata('user_type'))
 		->where('module_id',$mod['module_id'])
 		->group_by('sub_modules.sub_module_id')
 		->order_by('sort','ASC')
 		->get()->result_array();?>
					<li>
					    <a href="<?php if(count($sub_modules) >0){echo 'javascript:;';} else echo base_url().$mod['module_id'];?>">
					                  	<i class="<?php echo $this->db->get_where('modules',array('module_id' =>$mod['module_id']))->row()->icon;?>"></i>
					                  <span class="title">
					                  	<?php echo ucfirst($this->db->get_where('modules',array('module_id' =>$mod['module_id']))->row()->desc);?></span>
					                  	<?php if(count($sub_modules) >0){?>
					                  		<span class="arrow"></span>
					                  	<?php }?>
					                  </a>
					                  
					                  <?php if(count($sub_modules) > 0):?>
					                    <ul class="sub-menu">
					                      <?php foreach($sub_modules as $sub):?>
					                         <li><a href="<?php echo base_url().$sub['sub_module_id'];?>"> >
					                         	<?php echo ucfirst($sub['desc']);?></a></li>
					                      <?php endforeach;?>
					                    </ul>
					                  <?php endif;?>
					                </li>
					                <?php endforeach;?>

			
				</li>
			</ul>
    </div>
  </div>
  <!-- END SIDEBAR -->
  <!-- BEGIN CONTENT -->
  <div class="page-content-wrapper">
    <div class="page-content">
    
      <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <!--div class="page-title hh">
          <h1><?php echo $page_title;?><small> <?php //echo $description;?></small></h1>
        </div-->
        <!-- END PAGE TITLE -->
        <!-- BEGIN PAGE TOOLBAR -->
        <div class="page-toolbar">
          <!-- BEGIN THEME PANEL -->
          
          <!-- END THEME PANEL -->
        </div>
        <!-- END PAGE TOOLBAR -->
      </div>
      <!-- END PAGE HEAD -->
      <!-- BEGIN PAGE BREADCRUMB -->
     
      <!-- END PAGE BREADCRUMB -->
      <!-- END PAGE HEADER-->
      <!-- BEGIN PAGE CONTENT-->
      <div class="row">
        <div class="col-md-12">
      <?php $currency = $this->db->get('labo')->row()->currency;?> 
      <div class="row">
       

        <div class="col-md-8">
          
            <div class="portlet-body">
              <div style="height:auto;" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                <p>
                  <form od="post" class="form-horizontal">
                    <div class="input-group">
                      <span class="input-group-addon">
                        SELECT TEST 
                        </span>
                      <select class="form-control itemo" id="test_id" name="test_id" onchange="get_tests()" autofocus="" size="2">
                          <option disabled selected>--SELECT TEST--
                          </option>
                        <?php 
                        $g = $this->db->get_where('tests',array('deleted'=>0))->result_array();
                          foreach($g as $row){?>
                          <option value="<?php echo $row['test_id'];?>">
                              <?php echo $row['test_code'];?> | <?php echo $row['test_name'];?> |
                              <?php echo $currency;?>
                              <?php if(!empty($row['amount'])) { echo number_format($row['amount'],2);} else { echo number_format(0,2);}?>
                                
                              </option>
                        <?php }?>
                      </select>
                    </div>                        
                  </form>


                </p>
                <p>
                <br>
                <div id="prolist">
                   <!--cart container-->

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
                </div>
                   
                </p>
              
            </div>
          </div>
          <!-- END Portlet PORTLET-->
        </div>
           <div id="hule">
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
           </div>      
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END PAGE CONTENT-->
    </div>
  </div>
  <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2017 - <?php echo date('Y');?> &copy; LAB SYSTEM.
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.autocomplete.js" language="javascript"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/nominatim.autocomplete.js" language="javascript"></script>


    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.ajax_queue.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.autocomplete.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.color.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.form-3.51.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.metadata.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter-2.20.1.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.staticrow.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate-1.13.1-min.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/common.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/date.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/imgpreview.full.jquery.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/manage_tables.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/nominatim.autocomplete.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/phpjsdate.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/swfobject.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/tabcontent.js" language="javascript"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/thickbox.js" ></script>

<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
         Layout.init(); // init current layout
         Demo.init(); // init demo features
      });
    function get_tests(){
    $.post("<?php echo base_url();?>Patients/refresh_cart",
    {
      test_id : $('#test_id').val(),
	client_id : $('#client_id').val()
    },
    function(data,status){
         var container = $('#prolist'); //jquery selector (get element by id)
      if(data){
        container.html(data);
        send_to_cart();
        reset();
      }

    });
  }

      function clear_cart()
              {
                 if(confirm('Are you sure ????'))
                {
                  
                  jQuery.post("<?php echo base_url();?>Patients/clear_cart",
                  {
                     //user_id : user_id
                  },
                  function(data,status){
                    //if(data){
                      //location.href="Suppliers";
                      location.reload();
                   // }
                  });
                }
            }    
  
    function reset(){
         //document.getElementById('item_id').value="";
         var dropDown = document.getElementById("test_id");
        dropDown.selectedIndex = '';

  }

  function send_to_cart(){
    $.post("<?php echo base_url();?>Patients/send_to_cart",
    {
         test_id : $('#test_id').val(),
       client_id : $('#client_id').val(),
          t_bill : $('#t_bill').val()
    },
    function(data,status){
         var container = $('#hule'); //jquery selector (get element by id)
      if(data){
        container.html(data);
        jQuery('select').select2();

      }
    });
  }
    
  function delete_cart(id){
          $.ajax({
            url : "<?php echo site_url('Patients/cart_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
             get_tests();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    } 

   
</script>
</body>
</html>

<script type="text/javascript">
  jQuery('select').select2();
 function refresh(){
      location.reload();
    }

</script>
