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
<link href="<?=base_url();?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/select2/select2.css"/>
<link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/fonts.css" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"/>
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
			
				<div class="col-md-12">
					<div class="portlet light" style="height:1050px;">
							<div class="portlet-title">
								<div class="caption"-->
									<i class="icon-basket"></i>
									<span class="caption-subject font-green-sharp bold uppercase">
									<?=$page_title;?></span>
								</div>
								<div class="actions btn-set">
										<?php if ($this->session->flashdata('message')) { ?>
										<div class="alert alert-success fade in">
											<span><?php echo $this->session->flashdata('message'); ?></span>
										</div>
										<?php } ?>	
								</div>
							</div>
							<div class="portlet-body">
																	
	
												 <?php  foreach($rr as $row):?>
													<form action="<?=base_url();?>admin/update_company_test" method="post" id="formtest">			
													
													      
													
															<div class="col-md-4">
																<div class="form-group">
																	<label>Staff Name</label>
																    <input type="text" class="form-control" name="staff_name" value="<?=$row['staff_name'];?>" placeholder="Full staffname"/>
																</div>
															</div>
															
													
															<div class="col-md-4">
																<div class="form-group">
																<label>Company</label>
																	<select name="company_id" class="form-control" id="coD">
																	  <option value="">Select company</option>
																	  <?php $cc = $this->db->get('company')->result_array();?>
																	  <?php foreach($cc as $roww):?>
																		<option <?php if($row['company_id'] == $roww['company_id']): echo 'selected'; endif;?> value="<?=$roww['company_id'];?>"><?=$roww['company'];?></option>
																	  <?php endforeach;?>
																	</select>
																</div>
															</div>
															
															<div class="col-md-4">
																<div class="form-group">
																<label>Request Date</label>
																	<input type="text" class="form-control" name="request_date" value="<?=$row['request_date'];?>" id="coo"/>
																</div>
															</div>
															
															<div class="col-md-12">
																<div class="form-group">
																<label>Address</label>
																	<textarea class="form-control" name="address" value="<?=$row['address'];?>"  placeholder="Staff Contact Address"/></textarea>
																</div>
															</div>
															
															
													
														
															<div class="col-md-12">
																<div class="form-group">
																	<h3 class="form-section">STOOL</h3>
																</div>
															</div>
															
															<div class="col-md-2">
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
															<div class="col-md-2">
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
															<div class="col-md-2">
																<div class="form-group">
																	<label>Mucus</label>
																	 <select name="smucus" class="form-control" id="s3">
																		<option value="">Result</option>
																		<option <?php if($row['smucus'] == 'Absent'): echo 'selected'; endif;?>value="Absent">Absent</option>
																		<option <?php if($row['smucus'] == 'Present'): echo 'selected'; endif;?>value="Present">Present</option>													
																	</select>
																</div>
															</div>
															<div class="col-md-2">
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
													
														<div class="col-md-2">
															<div class="form-group">
																<label>WBC</label>	
																<input type="text" class="form-control" name="stu_micro_wbc" value="<?=$row['stu_micro_wbc'];?>" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="stu_micro_rbc" value="<?=$row['stu_micro_rbc'];?>" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="stu_micro_ova" value="<?=$row['stu_micro_ova'];?>" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-2">
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
													
														<div class="col-md-2">
															<div class="form-group">
																<label>WBC</label>	
																<input type="text" class="form-control" name="ura_micro_wbc" value="<?=$row['ura_micro_wbc'];?>" placeholder="WBC"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>RBC</label>	
																<input type="text" class="form-control" name="ura_micro_rbc" value="<?=$row['ura_micro_rbc'];?>" placeholder="RBC"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>OVA</label>	
																<input type="text" class="form-control" name="ura_micro_ova" value="<?=$row['ura_micro_ova'];?>" placeholder="OVA"/>
															</div>
														</div>
														
														<div class="col-md-2">
															<div class="form-group">
																<label>Parasites</label>	
																<input type="text" placeholder="Parasites" class="form-control" value="<?=$row['ura_micro_parasites'];?>" name="ura_micro_parasites"/>
															</div>
														</div>
															
														<div class="col-md-6">
															<div class="form-group">
																<label>Other Tests</label>	
																 <input type="text" placeholder="Parasites" class="form-control" name="other_tests" value="<?=$row['other_tests'];?>" />
															</div>
														</div>
														
														<div class="col-md-6">
															<div class="form-group">
																<label>Comment</label>	
																 <input type="text" placeholder="Comment" class="form-control" name="comment" value="<?=$row['comment'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="company_test_id" value="<?=$row['company_test_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="urina_id" value="<?=$row['urina_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="stula_id" value="<?=$row['stula_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="ura_micro_id" value="<?=$row['ura_micro_id'];?>" />
																 <input type="hidden" placeholder="Comment" class="form-control" name="stu_micro_id" value="<?=$row['stu_micro_id'];?>" />
															</div>
														</div>
															

														</div>
														
															<div class="col-md-12">
																<div class="form-group">
																	<button type="submit" class="btn green" id="lucia"><i class="fa fa-plus"></i> Save Changes</button>
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

<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
				$('#ss').dataTable();
				
				
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
$('#coD').select2();
$('#s1').select2();
$('#s2').select2();
$('#s3').select2();
$('#s4').select2();
$('#s5').select2();
$('#s6').select2();
$('#coo').datepicker({
 autoclose:'true'

});
</script>

<script type="text/javascript">

    function save()
    {
      var url = "<?php echo site_url('admin/add_company_test');?>";

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#formtest').serialize(),
            dataType: "JSON",
            success: function(data)
            {
			   alert('DATA SAVED SUCCESSFULLY!');
                //location.reload();
				$('#formtest')[0].reset();
			 
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding or updating data!');
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
				$('#sss').dataTable();
				
				
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
	
</body>
<!-- END BODY -->
</html>

