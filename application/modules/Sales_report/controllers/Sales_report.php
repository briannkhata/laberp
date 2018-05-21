<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales_report extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	        function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['description']  = 'Sales List';
		    $data['page_title']  = 'Sales';
			$data['module_id'] = 'sales';
			$data['sub_module_id'] = 'sales_report';
		    $data['content']   = 'Sales_report/filter';
			echo Modules::run('template/admin_v',$data);
		}
			
			 function filter_report(){
			$data['from'] = $this->input->post('from');
			$data['to'] = $this->input->post('to');
		    $data['page_title']  = 'Reports';
			$data['description'] = 'Sales Report';
		    $data['module_id'] = 'sales';
			$data['sub_module_id'] = 'sales_report';
		    $data['content']   = 'Sales_report/sales_report';
		    echo Modules::run('template/admin_v',$data);
		}

}
