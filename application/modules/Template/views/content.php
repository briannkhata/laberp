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

<!-- END THEME STYLES -->
<!--link rel="shortcut icon" href="<?php echo base_url();?>assets/pos_icon.png"/-->
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
					LAB SOFTWARE</h4>
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
							<li>
								<a href="<?php echo base_url();?>Profile/">
								<i class="icon-user"></i> Change Password</a>
							</li>
							
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
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
		
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title hh">
					<h1><?php echo $page_title;?><small> <?php echo $description;?></small></h1>
				</div>
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
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="<?php echo base_url();?>Dashboard">Home</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">Panel</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#"><?php echo $page_title;?></a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
			    	<?php $this->load->view($content);?>
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
<script src="<?php echo base_url();?>assets/admin/pages/scripts/table-advanced.js"></script>
<script>
      jQuery(document).ready(function() {    
         Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Demo.init(); // init demo features
		TableAdvanced.init();
      });
      $('table').dataTable();
      $('select').select2();
      $('.dd').datepicker({
      	autoclose: true
      });

        jQuery('#invoice').click(function(){    
          $('.invoica').toggle();
      });
 
     $('.invoica').hide();
   </script>
   <script type="text/javascript">
   	  if(jQuery('.checkall').length > 0) {
            jQuery('.checkall').click(function(){
            var parentTable = jQuery(this).parents('table');                       
            var ch = parentTable.find('tbody input[type=checkbox]');                     
            if(jQuery(this).is(':checked')) {
             //check all rows in table
             ch.each(function(){ 
               jQuery(this).attr('checked',true);
               jQuery(this).parent().addClass('checked');  //used for the custom checkbox style
               jQuery(this).parents('tr').addClass('selected'); // to highlight row as selected
             });
            } else {
            //uncheck all rows in table
            ch.each(function(){ 
              jQuery(this).attr('checked',false); 
              jQuery(this).parent().removeClass('checked'); //used for the custom checkbox style
              jQuery(this).parents('tr').removeClass('selected');
            }); 
        }
        });
    }
    jQuery('.alert').fadeOut(5000);
   </script>
   <script type="text/javascript">
   	function get_itemss(){
		$.post("<?php echo base_url();?>Receivings/refresh_cart",
		{
			item_id : $('#item_id').val()
		},
		function(data,status){
			   var container = $('#prolistt'); //jquery selector (get element by id)
			if(data){
				container.html(data);
				send_to_cartt();
               $("#item_id").find('option').attr("selected",false) ;
			}
		});
	}

	function get_items(){
		$.post("<?php echo base_url();?>Sales/refresh_cart",
		{
			item_id : $('#item_id').val()
		},
		function(data,status){
			   var container = $('#prolist'); //jquery selector (get element by id)
			if(data){
				container.html(data);
				reset();
               	send_to_cart();
			}

		});
	}
	

	function reset(){
		$(".itemo").find('option').attr("selected",false);
	}

	function send_to_cart(){
		$.post("<?php echo base_url();?>Sales/send_to_cart",
		{
			 item_id : $('#item_id').val(),
		   client_id : $('#client_id').val(),
			  t_bill : $('#t_bill').val()
		},
		function(data,status){
			   var container = $('#hule'); //jquery selector (get element by id)
			if(data){
				container.html(data);
			}
		});
	}
	
	
	function send_to_cartt(){
		$.post("<?php echo base_url();?>Receivings/send_to_cart",
		{
			 item_id : $('#item_id').val(),
		 supplier_id : $('#supplier_id').val(),
			  t_bill : $('#t_bill').val()
		},
		function(data,status){
			   var container = $('#hulee'); //jquery selector (get element by id)
			if(data){
				container.html(data);
			}
		});
	}
	
	function delete_cart(id){
          $.ajax({
            url : "<?php echo site_url('Sales/cart_delete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
			  get_items();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }	

    function delete_cartt(id){
          $.ajax({
            url : "<?php echo site_url('Receivings/cart_delete')?>/"+id,
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
	
	

		/*$('#discount').on('keyup change',function()
		{
			$('#total_bill').val(parseFloat($('#total_bill').val() - $(this).val()));//change after discoutn
		});
		
		$('#amount_tendered').on('keyup change',function()
		{
			$('#change').val(parseFloat($(this).val() - $('#total_bill').val()));//change after amount tendered
		});*/
</script>
<script type="text/javascript">
	function saveInlineEdit(editableObj,column,id) {
		// no change change made then return false
			if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
			return false;
			// send ajax to update value
			
			$.ajax({
			url: "<?php echo site_url('Sales/update_cart/')?>",
			type: "POST",
			dataType: "json",
			data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
			success: function(response) {
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			//$(editableObj).css("background","#FDFDFD");
			 get_items();
			},
			error: function () {
			console.log("errr");
			}
			});
		}
		function saveInlineEditt(editableObj,column,id) {
		// no change change made then return false
			if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
			return false;
			// send ajax to update value
			
			$.ajax({
			url: "<?php echo site_url('Sales/update_cartt/')?>",
			type: "POST",
			dataType: "json",
			data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
			success: function(response) {
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			//$(editableObj).css("background","#FDFDFD");
			 get_items();
			},
			error: function () {
			console.log("errr");
			}
			});
		}
	</script>

	<script type="text/javascript">
	function saveInlineEditoo(editableObj,column,id) {
		// no change change made then return false
			if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
			return false;
			// send ajax to update value
			
			$.ajax({
			url: "<?php echo site_url('Receivings/update_carto/')?>",
			type: "POST",
			dataType: "json",
			data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
			success: function(response) {
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			//$(editableObj).css("background","#FDFDFD");
			 get_itemss();
			},
			error: function () {
			console.log("errr");
			}
			});
		}
		function saveInlineEdito(editableObj,column,id) {
		// no change change made then return false
			if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
			return false;
			// send ajax to update value
			
			$.ajax({
			url: "<?php echo site_url('Receivings/update_cart/')?>",
			type: "POST",
			dataType: "json",
			data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
			success: function(response) {
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			//$(editableObj).css("background","#FDFDFD");
			  get_itemss();
			},
			error: function () {
			console.log("errr");
			}
			});
		}
		function saveInlineEdito1(editableObj,column,id) {
		// no change change made then return false
			if($(editableObj).attr('data-old_value') === editableObj.innerHTML)
			return false;
			// send ajax to update value
			
			$.ajax({
			url: "<?php echo site_url('Receivings/update_cartt/')?>",
			type: "POST",
			dataType: "json",
			data:'column='+column+'&value='+editableObj.innerHTML+'&id='+id,
			success: function(response) {
			// set updated value as old value
			$(editableObj).attr('data-old_value',editableObj.innerHTML);
			//$(editableObj).css("background","#FDFDFD");
			  get_itemss();
			},
			error: function () {
			console.log("errr");
			}
			});
		}
		function refresh(){
			location.reload();
		}

			jQuery('select').select2();

	</script>
</body>
</html>


     <script type="text/javascript">
            var maxField = 3000; //Input fields increment limitation
			var addButton = $('.add_button'); //Add button selector
			var wrapper = $('.field_wrapper'); //Input field wrapper
			var fieldHTML = '<div class="form-group"><input type="text" name="test_parameter[]"  class="form-control" placeholder="Test Parameter" autofocus="true"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="fa fa-remove" style="color:red;"></i></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButton).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapper).append(fieldHTML); // Add field html
				}
			});
			$(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
    </script>
	<script type="text/javascript">
            var maxField = 3000; //Input fields increment limitation
			var addButtonn = $('.add_buttonn'); //Add button selector
			var wrapperr = $('.field_wrapperr'); //Input field wrapper
			var fieldHTMLl = '<div class="form-group"><input type="text" name="test_code[]"  class="form-control" placeholder="Test Code"><input type="text" name="test_name[]"  class="form-control" placeholder="Test Name"><input type="text" name="amount[]"  class="form-control" placeholder="Amount"><a href="javascript:void(0);" class="remove_buttonn" title="Remove field"><i class="fa fa-remove" style="color:red;"></i></a></div>'; //New input field html 
			var x = 1; //Initial field counter is 1
			$(addButtonn).click(function(){ //Once add button is clicked
				if(x < maxField){ //Check maximum number of input fields
					x++; //Increment field counter
					$(wrapperr).append(fieldHTMLl); // Add field html
				}
			});
			$(wrapperr).on('click', '.remove_buttonn', function(e){ //Once remove button is clicked
				e.preventDefault();
				$(this).parent('div').remove(); //Remove field html
				x--; //Decrement field counter
			});
    </script>
    <script>

			jQuery('.fao').hide();
		    jQuery('.hai').hide();
			var maxField = 5000; //Input fields increment limitation
			var addButton1 = $('.add_button1'); //Add test result selector
			var addButton2 = $('.add_button2'); //Add test selector
			var wrapper1 = $('.field_wrapper1'); //Input field wrapper
			var wrapper2 = $('.field_wrapper2'); //Input field wrapper
			var fieldHTML1 = '<div class="field_wrapper"><div class="form-group"><div class="col-md-4"><input type="text" name="test_parameter"  class="form-control" placeholder="Test"></div><div class="col-md-8"><input type="text" name="test_result[]"  class="form-control" placeholder="Result"></div></div></div>'; //New input field html 
			var fieldHTML2 = '<div class="form-group"><div class="col-md-4"></div><div class="col-md-8"><input type="text" name="test_result[]"  class="form-control" placeholder="Result"></div></div>';
			var x = 1; //Initial field counter is 1
			$(addButton1).click(function(){ 
				if(x < maxField){ 
					x++; //Increment field counter
					$(wrapper2).append(fieldHTML1); // Add field html
				}
				jQuery('#zaki').hide();
				jQuery('.hai').show();
				jQuery('.fao').show();
				jQuery('#onani').hide();
			});
			
			$(addButton2).click(function(){ 
				if(x < maxField){ 
					x++; //Increment field counter
					$(wrapper1).append(fieldHTML2); // Add field html
				}
				jQuery('#zaki').hide();
			});
			
			$('#buma').click(function(){ 
				//jQuery('#zaki').hide();
				jQuery('#onani').show();
				//jQuery('.fao').show();
			});
			
			
			/*$(addButton2).live('click', function()
			{
				if(x < maxField)
				{ 
						x++; //Increment field counter
						$(wrapper1).append(fieldHTML2); // Add field html
				}
			});*/
		
			
</script>
<script type="text/javascript">
			function save_misc(){
		        var yolo = "<?php echo site_url('Patients/add_misc_result')?>";
		    
		       // ajax adding data to database
		          $.ajax({
		            url : yolo,
		            type: "POST",
		            data: $('#misc').serialize(),
		            dataType: "JSON",
		            success: function(data)
		            {
					   location.reload();
					   jQuery('#onani').show();
		            },
					
		            error: function (jqXHR, textStatus, errorThrown)
		            {
		                alert('Error adding or updating data!');
						//alert("DATA SAVED SUCCESSFULLY");
		               
		            },
					/*complete: function(xhr,status) 
					{
						alert("DATA SAVED SUCCESSFULLY");
		               //$('#misc')[0].reset();
					   location.reload();
		            }*/
					
		        });
		    }


		    function dello(id){
      if(confirm('ARE YOU SURE?')){
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('Patients/dello')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
               
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


