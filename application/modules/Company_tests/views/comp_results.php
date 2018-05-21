<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?=$system;?> | <?=$page_title;?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
<link href="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body class="page-md page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<?php include'includes/header_top.php';?>
</div>
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
			<div class="page-sidebar-wrapper">
			<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
				<?php include 'includes/nav.php';?>
			</div>
		</div>
	<!-- END SIDEBAR -->
	<div class="page-content-wrapper">
		<div class="page-content">
		<?php $usertype=$this->db->get_where('users',array('user_id'=>$this->session->userdata('user_id')))->row()->usertype_id;?>
			<div class="row">
				<div class="col-md-12">
					<div class="portlet light">
							<div class="portlet-title">
								<div class="caption">
									<i class="icon-basket"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?=$page_title;?></span>
								</div>
								<div class="actions btn-set">
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
									<?php if ($usertype == 1):?>
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Patient List </a>
										</li>
										<li>
											<a href="#tab_billing" data-toggle="tab">
											New Patient </a>
										</li>
									<?php elseif ($usertype == 2):?>
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Patient List </a>
										</li>
									<?php else:?>
										<li>
											<a href="#tab_billing" data-toggle="tab">
											New Patient </a>
										</li>
									<?php endif;?>
								</ul>
									<div class="tab-content no-space">
												<div class="tab-pane active" id="tab_general">
													<div class="portlet-body">
															<div class="table-toolbar">
																<div class="row">
																	<div class="col-md-6">					
																	</div>
																	<div class="col-md-6">
																		<div class="btn-group pull-right">
																			<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
																			</button>
																			<ul class="dropdown-menu pull-right">
																				<li>
																					<a href="javascript:;">
																					Print </a>
																				</li>
																				<li>
																					<a href="javascript:;">
																					Save as PDF </a>
																				</li>
																				<li>
																					<a href="<?=base_url();?>admin/excel_export">
																					Export to Excel </a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
															<table class="table table-striped table-bordered table-hover" id="sample">
														<thead>
														<tr>
															<th>#</th>
															<th>Staff Name</th>
															<th>Company</th>
															<th>Request Date</th>
															<th></th>
														</tr>
														</thead>
														<tbody>
													  <?php $count=1;?>
														<?php  foreach($result as $row):?>
														<tr class="odd gradeX">
														 <td><?=$count++;?></td>
														 <td><?=$row['staff_name'];?></td>
														 <td><?=$row['company'];?></td>
														 <td><?=$row['request_date'];?></td>
														 <td align="center" >
															<a href="<?=base_url();?>admin/view_report/<?=$row['company_test_id'];?>" class="btn btn-success btn-xs"><i class="fa fa-info"></i> VIEW </a>				
															<!--a href="javascript:;" class="btn default btn-xs black" onclick="delete_test_paramter(<?=$row['test_result_id'];?>)"><i class="fa fa-trash-o"></i> Delete </a-->				
														</td>
														</tr>
														<?php endforeach;?>
															
														</tr>
														</tbody>
														</table>
														</div>
														</div>
												</div>
													
																	
												<div class="tab-pane" id="tab_billing">
													<form action="<?=base_url();?>admin/new_patient" method="post" id="formbilling">			
													
													      
													
															<div class="col-md-4">
																<div class="form-group">
																<label>Name</label>
																<input type="text" name="name" class="form-control" placeholder="Patient's Name" value="<?=set_value('name');?>" required>
																</div>
															</div>
															
															  <div class="col-md-6">
																<div class="form-group">
																	<label>Tests Required</label>
																		<select name="test_id[]" class="form-control selectpicker" id="ges" multiple required>
																		<?php $test=$this->db->get('tests')->result_array();?>
																		<?php foreach($test as $row33):?>
																		<option value="<?=$row33['test_id'];?>"><?=$row33['test_name'];?>  &nbsp;<strong>|&nbsp; MK : <?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$row33['amount'])),2);?></strong></option>
																		<?php endforeach;?>
																   </select>
																 </div>
															</div>
																														
															<div class="col-md-4">
																<div class="form-group">
																	<label>Payment Mode</label>
																	  <select name="pay_mode" class="form-control" id="pay_mode" required>
																		 <option value=""></option>
																		 <?php $oo=$this->db->get('payment_mode')->result_array();?>
																		 <?php foreach($oo as $d):?>
																		 <option value="<?=$d['pay_mode'];?>"><?=$d['pay_mode'];?></option>
																		<?php endforeach;?>
																	   </select>
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group">
																<label>Clinic/Hospital</label>
																  <select name="clinic_id" class="form-control" id="clinic_id" required>
																	<?php $cc=$this->db->get('clinics')->result_array();?>
																	<?php foreach($cc as $row):?>
																		 <option <?php if ($row['clinic_id'] == $row['clinic_id'] ) echo 'selected' ; ?> value="<?=$row['clinic_id'];?>"><?=$row['clinic_name'];?></option>
																	<?php endforeach;?>
																   </select>
																</div>
															</div>
															
															<div class="col-md-6">
																<div class="form-group">
																<label>Phone No.</label>
																	<input type="text" name="phone" class="form-control" placeholder="Phone No." value="<?=set_value('phone');?>" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group">
																	<button type="submit" class="btn green" id="lucia"><i class="fa fa-plus"></i> add patient</button>
																</div>
															</div>
													</form>
														<p></p>
														
													
												
												<?php $k=$this->db->select('*')->from('cart')->join('tests','cart.test_id=tests.test_id')->get()->result_array();?>
												<?php if(count($k) > 0):?>
												<!--div class="pull-right yapa" style="width:40%; background-color:#efdcdc; margin-top:-12%;border-radius:3px; font-size:12px;">
												  <table class="table" style="padding:3px;">
												  <tr>
														<th>#</th>
														<th>Test</th>
														<th>Price</th>
														<th></th>
												  </tr>
												  <?php $amountq=0;?>
												  <?php $count=1;?>
												  <?php foreach($k as $b0):?>
												  <?php $amountq=$b0['price'];?>
												  <tr>
													   <td><?=$count++;?></td>
													   <td><?=$b0['test_name'];?></td>
													   <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$b0['price'])),2);?></td>
													   <td width="10" align="center">
													       <a href="#" onclick="delete_cart(<?=$b0['cart_id'];?>)" title="REMOVE FROM CART"><i class="fa fa-close"></i></a>
													   </td>
												  </tr>
												  <?php endforeach;?>
												  <tr>
												     <td></td>
												     <td><b>SubTotal</b></td>
													 <td><?=number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "",$amountq)),2);?></td>
													 <td></td>
												  </tr>
												  </table>
												
												</div-->
												<?php else:?>
												<?php endif;?>
												
												</div>
												
													
											<div class="tab-pane" id="tab_list">
													<div class="portlet-body">													
															<table class="table table-striped table-hover" id="maopo">
															<thead>
															<tr>
																<th>#</th>
																<th>Name</th>
																<th>Visit Date/Time</th>
																<th></th>
															</tr>
															</thead>
															<tbody>
														<?php $list=$this->db->select('*')->from('clients')->join('requested_tests','clients.client_id=requested_tests.client_id')->where('tested',0)->group_by('clients.client_id')->order_by('clients.client_id','DESC')->get()->result_array();?>
														<?php  $count=1;?>
														<?php  foreach($list as $rowo):?>
															<tr class="odd gradeX">
															 <td><?=$count++;?></td>
															 <td><?=$rowo['name'];?></td>
															 <td><?=$rowo['visit_date'];?></td>
															 <td align="center" >
																<a href="<?=base_url();?>admin/add_params1/<?=$rowo['client_id'];?>" class="btn default btn-xs blue-stripe"> <i class="fa fa-info"></i> TEST RESULTS </a>
															 </td>
															</tr>
															<?php endforeach;?>
																
															</tr>
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
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<?php include 'includes/footer.php';?>
<script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?=base_url();?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="<?=base_url();?>assets/global/plugins/plupload/js/plupload.full.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/datatable.js"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ecommerce-products-edit.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/pages/scripts/ui-extended-modals.js"></script>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
				$('#d1').datepicker();
				$('#ges').select2();
				$('#clinic_id').select2();
				$('#pay_mode').select2();
				$('#faki').select2();
				$('#maopo').dataTable();
				$('#mmaop').dataTable();
				
				
            });
 </script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   TableManaged.init();
});
</script>

<script>
$(document).ready(function() {
   jQuery('#bala').hide();
     
});
</script>
<script>
jQuery(document).ready(function() {     
    $('#ges').on('change',function(){
	   var test_id=$(this).data('test_id');
	   var test_name=$(this).data('test_name');
	   var test_price=$(this).data('test_price');
	   var quantity=$('#' + test_id).val();
	    if(quantity !='' && quantity > 0)
		 {
		   $.ajax({
		     url:"<?=base_url();?>admin/cart_add",
			 method:"POST",
			 //data:{test_id:test_id,test_name:test_name,test_price:test_price,quantity:quantity},
			 data:{test_id:test_id},
		    success:function(data)
			  {
			   alert('Test added to the cart');
			   $('#cart_details').html(data);
			   $('#' + product_id).val('');
			  }
		   });
		 }
		 else
		 {
		  alert('please enter quantity')
		 }
	
	});
	
	$('#cart_details').load('<?=base_url();?>cart/load');
	$(document).on('click','.remove_inventory',function(){
	  var row_id= $(this).attr('id');
	  if(confirm("Are you sure you want to remove this ?"))
		{
		  $.ajax({
		      url:'<?=base_url();?>cart/remove',
			  method:'POST',
			  data:{row_id:row_id},
			  success:function(data)
			  {
			   alert('Product removed from the cart');
			   $('#cart_details').html(data);
			  }
		  });
		}
	  else
		{
		  return false;
		}
	});
	
	$(document).on('click','#clear_cart',function(){
	 if(confirm("Are you sure you want to clear cart ?"))
		{
		  $.ajax({
		      url:'<?=base_url();?>cart/clear',
			success:function(data)
			  {
			   alert('Your cart has been cleared...');
			   $('#cart_details').html(data);
			  }
		  });
		}
	  else
		{
		  return false;
		}	
	});
});
</script>
 <script>
function add_row()
{
 var new_name=document.getElementById("new_name").value;
 var new_country=document.getElementById("new_country").value;
 var new_age=document.getElementById("new_age").value;
	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='name_row"+table_len+"'>"+new_name+"</td><td id='country_row"+table_len+"'>"+new_country+"</td><td id='age_row"+table_len+"'>"+new_age+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";

 document.getElementById("new_name").value="";
 document.getElementById("new_country").value="";
 document.getElementById("new_age").value="";
}

</script>
<script type="text/javascript">

   var save_method; //for save method string
    var table;
	function add_client()
    {
      //save_method = 'add';
      //$('#formclient')[0].reset(); // reset form on modals
      //$('#client').modal('show'); // show bootstrap modal
	  location.href="<?=base_url();?>admin/add_client";
	  
    }
	function addbill()
    {
      //save_method = 'add';
      //$('#formclient')[0].reset(); // reset form on modals
      $('#billing').modal('show'); // show bootstrap modal
	  //location.href="<?=base_url();?>admin/add_client";
	  
    }
	
    function edit_client(id)
    {
      save_method = 'update';
      $('#formclient')[0].reset(); // reset form on modals
 
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('admin/client_edit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
			
			$('[name="client_id"]').val(data.client_id);
            $('[name="name"]').val(data.name);
            $('[name="email"]').val(data.email);
			$('[name="pay_mode"]').val(data.pay_mode);
			$('[name="gender"]').val(data.gender);
			$('[name="address"]').val(data.address);
			$('[name="phone"]').val(data.phone);
			$('[name="request_date"]').val(data.request_date);
          	$('[name="doctor_name"]').val(data.doctor_name);
			$('[name="dob"]').val(data.dob);
			$('[name="clinic_id"]').val(data.clinic_id);
			$('[name="test_id"]').val(data.test_id);
			
            $('#patient').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Patient'); // Set title to Bootstrap modal title
			$('.zanda').text('Save changes');
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
	
	 function savee()
    {
      var url = "<?php echo site_url('admin/client_update')?>";
   
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formclient').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
               alert('Error adding or updating data!');
					
            }
        });
    }
 
 
 
 
    function save()
    {
      var url;
	 // var url_0= "<?php echo site_url('admin/receipt_preview')?>";
     // if(save_method == 'add')
      //{
          url = "<?php echo site_url('admin/new_patient');?>";
      //}
      //else
     // {
      //  url = "<?php echo site_url('admin/client_update')?>";
      //}
 
       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formbilling').serialize(),
            dataType: "JSON",
            success: function(data)
            {
               //if success close modal and reload ajax table
               //$('#billing').modal('show');
              //location.reload();// for reload a page
			  //location.href=url_0;
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                //alert('Error adding or updating data!');
					  //location.href=url_0;
            }
        });
    }
 
    function delete_client(id)
    {
      if(confirm('Are you sure you want to delete the selected CLIENT?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/client_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
      }
    }
    
	function delete_cart(id)
    {
    
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/cart_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               //location.reload();
			   show_cart1();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
 
    }
	
	function cart_add(id)
    {
 
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/cart_add')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               
               //location.reload();
			   show_cart1();
			    
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding data');
            }
        });

    }
	
	function show_cartt(id)
    {
 
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/show_cartt')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
			  $("div.yapa").html(data);
			  //$("div.yapa").append(data);  
			  
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
	
	function show_cart1()
    {
 
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('admin/show_cart')?>",
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
			  $("div.yapa").html(data);
			  
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
	
	
	
    $('#').on('change',function()
	{
	    var url = "<?=base_url();?>admin/cart_add";
        var ide = $(this).val();
        if(ide){
					$.ajax({
						type:'POST',
						 url:url,
						data:'test_id='+ide,
						success:function(html)
						{
						  location.reload(); 
						}
					}); 
				}
				else{
           alert("CHAMBA2");
        }
    });
  </script>
 <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker();
				$('#dob').datepicker();
				$('#d1').datepicker();
				$('#ges').select2();
				$('#clinic_id').select2();
				$('#pay_mode').select2();
				$('#faki').select2();
				$('#maopo').dataTable();
				$('#mmaop').dataTable();
				
				
            });
 </script>
<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
	<script>
		function addclient()
		{
		  var url = "<?php echo site_url('admin/client_add')?>";
		
		   // ajax adding data to database
			  $.ajax({
				url : url,
				type: "POST",
				data: $('#formzanda').serialize(),
				dataType: "JSON",
				success: function(data)
				{
				   alert("DATA SAVED SUCCESSFULLY");
				   $('#formzanda')[0].reset();
				},
				error: function (jqXHR, textStatus, errorThrown)
				{
					alert('Error adding or updating data!');

				}
				/*complete: function(xhr,status) 
				{
					alert("DATA SAVED SUCCESSFULLY");
				   $('#formzanda')[0].reset();
				}*/
			});
		}
	</script>
</body>
<!-- END BODY -->
</html>


			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="patient" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="border-radius:0px; min-width:40%; margin-left:5%;">
					<div class="modal-header alert-primary">
							<h4 class="modal-title"></h4>
					</div>
				<div class="modal-body">
					<form role="form" action="#" id="formclient">
					   
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Fullname</label>
								      <input type="hidden" name="client_id" value="">
				    				   <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Fullname" required>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label>Test</label>
								  <select class="form-control selectpicker" name="test_id[]" multiple>
								  <option selected disabled>Select test</option>
								  <?php $test=$this->db->get('tests')->result_array();?>
								  <?php foreach($test as $row):?>
									  <option value="<?=$row['test_id'];?>"><?=$row['test_name'];?></option>
									<?php endforeach;?>
								  </select>
								</div>
							</div>		
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Request Date</label>
								  <input type="text" class="form-control" name="request_date" id="d1" placeholder="Request Date" required>
								</div>
							</div>
										
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Phone No.</label>
								  <input type="tel" class="form-control" name="phone" id="exampleInputEmail1" placeholder="Phone No." required>
								</div>
							</div>
					
										
							<div class="col-md-12">
								<div class="form-group">
									  <label for="exampleInputEmail1">Contact Address</label>
									  <input type="text" class="form-control" name="address" id="exampleInputEmail1" placeholder="Contact Address" required>
								</div>
							</div>
									
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Email</label>
								  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email address" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  <label for="exampleInputEmail1">Age</label>
								  <input type="text" class="form-control" name="age" id="age" placeholder="Age">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
								  <label>Gender</label>
								  <select class="form-control" name="gender">
								  <option selected disabled>Select gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>
								  </select>
								</div>
							</div>
			
						<div class="col-md-6">
							<div class="form-group">
							  <label>Pay Mode</label>
							  <select class="form-control" name="pay_mode">
							  <option selected disabled>Select option</option>
							  <?php $mode=$this->db->get('payment_mode')->result_array();?>
							  <?php foreach($mode as $zoba):?>
									<option value="<?=$zoba['pay_mode'];?>"><?=$zoba['pay_mode'];?></option>
								<?php endforeach;?>
							  </select>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="form-group">
							  <label>Hospital</label>
							  <select class="form-control" name="clinic_id">
							  <option selected disabled>Select hospital</option>
							  <?php $clinic=$this->db->get('clinics')->result_array();?>
							  <?php foreach($clinic as $row):?>
								  <option value="<?=$row['clinic_id'];?>"><?=$row['clinic_name'];?></option>
								<?php endforeach;?>
							  </select>
							</div>
						</div>		
						
						<div class="col-md-6">
							<div class="form-group">
								 <label for="exampleInputEmail1">Doctor's Name</label>
								 <input type="text" class="form-control" name="doctor_name" id="exampleInputEmail1" placeholder="Doctor's name">
							</div>
						</div>

		
					<div class="col-md-12">
						<div class="form-group">
							<div class="modal-footer">
								 <button type="button" class="btn blue zanda" onclick="savee()">SAVE</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
			<!-- /.modal -->
			
			
							<div id="billing" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" style="border-radius:0px;">
								<div class="modal-body">
									
									<form action="<?=base_url();?>admin/addbill" method="post" id="formbill" class="form-horizontal">
											<?php 
											
											$client_id=$this->session->userdata('client_id');
											$total_amount = 0;
											$total_minus_discount = 0;
											$charges = $this->db->select('*')->from('requested_tests')->where('client_id',$client_id)->get()->result_array();
											foreach($charges as $c0):
												$amount1 = $c0['amount'];
												$total_amount += $amount1;
											endforeach;
											
											
											?>
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group margin-top-10">
														<span class="input-group-addon">Total Bill</span>
														   <input type="text" name="total_bill" id="total_bill" class="form-control input-lg" value="<?=$total_amount;?>" readonly>
														<span class="input-group-addon">MK</span>
													</div>	
												</div>	
											</div>
							
											<div class="col-md-6">
												<div class="form-group">
													<label>Amount Tendered</label>
													 <input type="text" name="amount_tendered" id="amount_tendered" class="form-control input-lg" placeholder="Amount Tendered">
												</div>		
											</div>	
													
											<div class="col-md-6">
												<div class="form-group">
													<label>Discount</label>
														<input type="text" name="discount" id="discount" class="form-control input-lg" placeholder="Discount">
												</div>	
											</div>
													
													
											<div class="col-md-12">
												<div class="form-group">
													<div class="input-group margin-top-10">
														<span class="input-group-addon">Balance</span>
														<input type="text" name="change" id="change" class="form-control input-lg" value="0.00" readonly>
														<span class="input-group-addon">MK</span>
													</div>	
												</div>	
											</div>
							
										
								
										<div class="col-md-6">
											<div class="form-group">
												
													<button type="button" data-dismiss="modal" class="btn btn-default">Cancel</button>
													<button type="submit"  class="btn blue">add bill</button>
												
											</div>
										</div>
								</form>
							</div>