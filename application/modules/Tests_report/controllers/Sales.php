<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sales extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	        function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['description']  = 'Sales List';
		    $data['page_title']  = 'Sales';
			$data['module_id'] = 'sales';
		    $data['sales'] = $this->M_Sales->get_sales();
		    $data['content']   = 'Sales/sales';
			echo Modules::run('template/admin_v',$data);
		}
			function view($param=''){
			$data['module_id']   = 'sales';
			$data['sale_id']   = $param;
		    $data['page_title']  = 'Sales Details';
		    $data['description']  = 'Sales Details';
		    $data['content']     = 'Sales/sale_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$sale_id = $this->input->post('sale_id');
			foreach($sale_id as $value){
				$data['deleted'] = 1;
				$this->db->where('sale_id',$value);
           		$this->db->update('sales',$data);
        	}
        	//redirect('Reminders');
		}
		
}
