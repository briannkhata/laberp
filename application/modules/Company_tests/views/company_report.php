
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.7.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
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
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="<?=base_url();?>assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="<?=base_url();?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/admin/pages/css/invoice.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url();?>assets/print.css" rel="stylesheet" type="text/css" media="print"/> 

<link href="<?=base_url();?>assets/printt.css" rel="stylesheet" type="text/css" media="print"/> 
<link href="<?=base_url();?>assets/fonts.css" rel="stylesheet" type="text/css"/>
<!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->
<style type="text/css">
.myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#BDB76B;color:white;width:50%; }
.myOtherTable td, .myOtherTable th { padding:0.4px;border:0; }
.myOtherTable td { border-bottom:1px dotted #BDB76B; }
</style>
<!-- End Styles -->


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
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
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
<div class="page-header navbar navbar-fixed-top">
<?php include'includes/header_top.php';?>
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
				<div class="page-sidebar-wrapper">
					<div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
	<?php include 'includes/nav.php';?>
	</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content" id="tk">
			<div class="portlet light">
				<div class="portlet-body">
													<div class="row fet" style="padding-top:0%;">
														<div class="row" style="padding-left:2%; margin-top:-2%;" id="topp">
															<center><b class="text-primary text-center" style="color:black; font-size:36px"><?=$this->db->get('labo')->row()->name;?></b></center>  
														</div>
									
														<div class="row" style="padding-left:2%; margin-top:-2%;">
															 <span><h6 class="text-primary text-center" style="color:black;"><b>(PRIVATE PATHOLOGY LABORATORY)</b></h6></span>
															 <span><h6 class="text-primary text-center" style="color:black;">CERTIFIED BY MEDICAL COUNCIL OF MALAWI</h6></span>
														</div>
										
													
													<div class="row text-center" style="padding-left:2%; align:center;">
														<span>BLANTYRE</span><span> : 01 822 696 / </span>
														<span>LILONGWE</span><span>  : 0 111 912 076 / </span>
														<span>MZUZU</span><span> : 0 111 930 344</span>
													</div>
												    
													
														<div class="note note-info note-shadow">
														
																<h3 class="text-center"><b>FOOD HANDLERS LABORATORY RESULTS</b></h3>
														
														</div>
													<hr>
												
											
												<table class="table-striped table-hover"  style="width:45%; margin-left:4%;  font-size:13px;">
														<tbody>
														<tr>
														   <th align="right">Staff Name</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->staff_name);?></b></th>
														</tr>
												        
														<tr>
														   <th align="right">Company</th>
														   <th align="left">: <b><?php if(!empty($this->db->get_where('company',array('company_id'=>$company_id))->row()->company)): echo strtoupper($this->db->get_where('company',array('company_id'=>$company_id))->row()->company); else: echo ""; endif;?></b></th>
														</tr>
														
														<tr>
														   <th align="right">Address</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->address);?></b></th>
														</tr>
														
														<tr>
														   <th align="right">Request Date</th>
														   <th align="left">: <b><?=strtoupper($this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->request_date);?></b></th>
														</tr>
														</tbody>
													</table>
												</div>
												<hr>
										<div class="row">
										     <p>
											 <table class="table-striped table-hover myOtherTable pull left" id="tolo2"  style="width:45%; padding:0.3%; border:1px dashed; border-radius:3px; margin-left:4%;font-size:13px;">
											 	<thead>
													<tr>
													   <th colspan="3"><b>STOOL</b></th>
													</tr>
												</thead>
												<tbody>
													<?php $ee=$this->db->get_where('stula',array('stula_id'=>$stula_id))->result_array();?>
													<?php foreach($ee as $d):?>
													<tr>
														<td><?=strtoupper('Colour');?><td> <td align="left" width=""> : <?=$d['scolour'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Consistency');?><td> <td align="left"> : <?=$d['sconsistency'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Mucus');?><td> <td align="left"> : <?=$d['smucus'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Blood');?><td> <td align="left"> : <?=$d['sblood'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Parasites');?><td align="left"> <td> : <?=$d['sparasite'];?></td>
													</tr>
													<?php endforeach;?>
												</tbody>
											    <tbody>
												   <tr>
													   <th colspan="3"><b>MICROSCOPY</b></th>
													</tr>
													<?php $eew=$this->db->get_where('stu_micro',array('stu_micro_id'=>$stu_micro_id))->result_array();?>
													<?php foreach($eew as $d):?>
													<tr>
														<td>WBC<td> <td align="left"> : <?=$d['stu_micro_wbc'];?></td>
													</tr>
													
													<tr>
														<td>RBC<td> <td align="left"> : <?=$d['stu_micro_rbc'];?></td>
													</tr>
													
													<tr>
														<td>OVA<td> <td align="left"> : <?=$d['stu_micro_ova'];?></td>
													</tr>
													
													<tr>
														<td>Parasites<td> <td align="left"> : <?=$d['stu_micro_parasites'];?></td>
													</tr>
												
													<?php endforeach;?>
												</tbody>
											 </table>
										</p>
								
				
										    <table class="table-striped table-hover myOtherTable" align="center" id="tolo0" style="width:45%; border:1px dashed;padding:0.3%; border-radius:3px;float;right; margin-top:-34%;margin-right:4%; font-size:13px;">
												<thead>
													<tr>
													   <th colspan="3"><b>URINE</b></th>
													</tr>
												  
												</thead>
												<tbody>
													<?php $eee=$this->db->get_where('urina',array('urina_id'=>$urina_id))->result_array();?>
													<?php foreach($eee as $d):?>
													<tr>
														<td style=""><?=strtoupper('Colour');?><td> <td align="left"> : <?=$d['ucolour'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Appearance');?><td> <td align="left"> : <?=$d['uappearance'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Protein');?><td> <td align="left"> : <?=$d['uprotein'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Blood');?><td> <td align="left"> : <?=$d['ublood'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Glucose');?><td align="left"><td> : <?=$d['uglucose'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Ketones');?><td> <td align="left"> : <?=$d['uketones'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Ascobic Acid');?><td> <td align="left"> : <?=$d['uascobic_acid'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Bilirubin');?><td> <td align="left"> : <?=$d['ubilirubin'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Robilinogen');?><td> <td align="left"> : <?=$d['urobilinogen'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Nitrite');?><td align="left"> <td> : <?=$d['unitrite'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('Leucocytes');?><td> <td align="left"> : <?=$d['uleucocytes'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('PH');?><td align="left"> <td> : <?=$d['uph'];?></td>
													</tr>
													
													<tr>
														<td><?=strtoupper('SG');?><td align="left"> <td> : <?=$d['usg'];?></td>
													</tr>
													<?php endforeach;?>
													<br><br>
												<tbody>
												   
													<tr>
													   <th colspan="3"><b>MICROSCOPY</b></th>
													</tr>
													<?php $eew=$this->db->get_where('ura_micro',array('ura_micro_id'=>$ura_micro_id))->result_array();?>
													<?php foreach($eew as $d):?>
													<tr>
														<td>WBC<td> <td align="left"> : <?=$d['ura_micro_wbc'];?></td>
													</tr>
													
													<tr>
														<td>RBC<td> <td align="left"> : <?=$d['ura_micro_rbc'];?></td>
													</tr>
													
													<tr>
														<td>OVA<td> <td align="left"> : <?=$d['ura_micro_ova'];?></td>
													</tr>
													
													<tr>
														<td>Parasites<td> <td align="left"> : <?=$d['ura_micro_parasites'];?></td>
													</tr>
												
													<?php endforeach;?>
												</tbody>
											 </table>
											<p></p>
								    </div>
									<hr>
										<div class="row" style="margin-left:3%;">
										
										   <table class="table-striped table-hover myOtherTable">
											   <tr>
											    <td style="width : 20%;"><b>OTHER TESTS</b> </td>
											    <td style="width : 80%;"> :  <?php if (!empty($this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->other_tests)): echo $this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->other_tests; else: echo ''; endif;?></td>
											   </tr>
											  </table>
											
											 <table class="table-striped table-hover myOtherTable">
											   <tr>
											    <td>COMMENT </td>
											    <td>: <?php if (!empty($this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->comment)): echo $this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->comment; else: echo ''; endif;?></td>
											   </tr>
											  </table>
											  
											   <table class="table-striped table-hover myOtherTable">
												   <tr>
												
														<td>SIGNATURE   </td>
														<td style="width : 60%;">: </td>
													
														<td>DATE   </td>
														<td style="width : 60%;">: <?=date('d-F-Y');?> </td>
													</tr>
											  </table>
											  
										</div>
					
								<div class="row" style="margin-left:3%;">
									<h5 class="text-center"><u>FOR DOCTOR'S USE ONLY</u></h5>
									<p>
									    <table class="table-striped table-hover myOtherTable">
												   <tr>
													   <td>TREATMENT </td>
													   <td>: </td>
												   </tr>
													<tr>
														<td>SIGNATURE   </td>
														<td style="width : 60%;">: </td>
													
														<td>DATE   </td>
														<td style="width : 60%;">: </td>
													</tr>
											  </table>
									
											</div>
									<br>
						                    <div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<button type="submit" class="btn green" onclick="print();"><i class="fa fa-print"></i> Print</button>

																<a href="<?=base_url();?>admin/edit_company_report/<?=$company_test_id;?>/<?=$urina_id;?>/<?=$stula_id;?>/<?=$stu_micro_id;?>/<?=$ura_micro_id;?>/<?=$company_id;?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit </a>				
														
																<a href="<?=base_url();?>admin/company_results" class="btn default"><< Back</a>
																
															</div>
														</div>
													</div>
													<div class="col-md-6">
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
<!-- BEGIN FOOTER -->
<?php include 'includes/footer.php';?>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
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
<!-- END CORE PLUGINS -->
<script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<script type="text/javascript">     
        function printt() {    
          var div = document.getElementById('tk');
		  var oldPage = document.body.innerHTML;
		  var popupWin = window.open('', '', 'width=auto,height=auto');

		  $("body").css('font-family','book antiqua');
		  $("body").css('font-size','12px');
 
		  $(".btn").css('display','none');
		  $(".vv").css('display','none');
          $("table.b4").css('float','left');
		  $("table.afta").css('float','right');
		  $("table td").css('background-color','transparent');
		  $(".afta").css('margin-top','4%');
		  
		  $(".tb1").css('width','95%');
		  $(".tb1").css('margin-left','0%');
		  $(".tb1").css('margin-top','0%');
		  $(".tb1").css('color','black');
		  
		 
		  $(".kt").css('padding-left','0%');
		  $(".kt").css('padding-top','0%');
		  $("div.raa").css('margin-top','0%');
		  $("div.raa").css('padding-bottom','0%');
		  
		  $(".kt").css('width','100%');
		  $(".hoho").css('padding-left','10%');
		  $(".kt").css('padding-top','0%');
		  $(".mm").css('background-color','transparent');
				
		  $(".u1").css('float','left');
		  $(".u2").css('float','left');
		  $(".u3").css('float','right');
		  $(".u4").css('float','right');
			
		  //$("#ff").css('margin-top','4%');
		  $("#tolo1").css('margin-top','0%');
		   $("#tolo2").css('margin-top','30%');
		  $("#tolo0").css('margin-top','-11%');
		  $("#ff").css('height','auto');
		  $("#ff").css('text-align','center');
		  $("table.hoho").css('margin-left','12%');
		  $(".fet").css('height','130px');      
		  $("table td").css('font-family','book antiqua');
		  $("table td.xp").css('font-size','14px');
		  $("table td.xp").css('font-size','12px');
		  $("table td.xp1").css('width','50%');
		
		 
		  $("table td").css('font-size','13px');
		  $("div.page-content-wrapper").css('border-bottom','1px solid grey');
		  $("div.page-content-wrapper").css('border-right','1px solid grey');
		  $("div.page-content-wrapper").css('border-left','1px solid grey');
		  $("div.page-head").css('border-top','1px solid blue');
		  //$("div.page-content-wrapper").css('height','1000px');
		  //$("div.page-content-wrapper").css('height','965px');
		   $("div.page-content-wrapper").css('height','auto');
		  
		  //$("table.ya1").css('float','left');
		  $("table.ya1").css('margin-left','0%');
		  $("table.ya2").css('margin-left','80%');
		  $("table.ya2").css('margin-top','-2%');
		  
		  $("table.ya2").css('float','right');
		  $(".tu").css('margin-top','5%');
		  $("#ft").css('margin-top','0%');
		  $(".yam").css('font-size','36px');
		  $("table.b4").css('margin-top','-2%');
		  $(".yam").css('margin-top','0%');
		  $("div.light").css('height','auto');
		  $("table.afta").css('margin-top','-5%');
		  $("#ff").css('font-size','10px');
		  //$("#ff").css('border','1px solid');
		 // $("#ff").css('border-bottom','none');
		 $("table#aha").css('font-size','9px');
		  $("span#ff").css('font-size','9px');
		  $("span#app").css('float','right');
		   $("table.b4").css('margin-top','-4%');
		  
		   popupWin.document.open();
           popupWin.document.write('<html>');
		   popupWin.document.write('<body>');
		   popupWin.document.write('<header>');
		   popupWin.document.write('</header>');
		   popupWin.document.write(tk.innerHTML);
		   popupWin.document.write('</body></html>');
 	       
		   //Print the document.
   		    popupWin.focus();
   	        popupWin.print();
		    //popupWin.close();
           //Restore orignal HTML
            document.body.innerHTML = oldPage;
		}
     </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>