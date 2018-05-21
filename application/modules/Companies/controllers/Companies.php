<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Companies extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	    function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['page_title']  = 'Company List';
		    $data['description']  = 'Company List';
			$data['sub_module_id'] = 'companies';
		    $data['module_id'] = 'company_test';
            $data['companies'] = $this->M_Companies->get_companies();
		    $data['content']   = 'Companies/companies';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['company'] = $this->input->post('company');
			$data['address']     = $this->input->post('address');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('company',array('company_id' =>$update_id))->result_array();
			foreach ($query as $row){
			$data['company']     = $row['company'];
			$data['address']     = $row['address'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('company_id',$update_id);
					$this->db->update('company',$data);
				}
				else{
					$this->db->insert('company',$data);
				}
			$this->session->set_flashdata('message','Company saved successfully');
			redirect('Companies');
		}
		
			function submito(){
				$data['company_id']  = $this->input->post('company_id');
				$data['name']   = $this->input->post('name');
				$data['age']   = $this->input->post('age');
				$data['e_address']   = $this->input->post('e_address');
				$data['gender']   = $this->input->post('gender');
				$this->db->insert('comp_staff',$data);
				redirect('Companies/creato/'.$data['company_id'] );
		}
			
		function submitoo(){
			$cstaff_id  = $this->input->post('cstaff_id');
		    $company_id  = $this->input->post('company_id');
			$data['name']   = $this->input->post('name');
			$data['age']   = $this->input->post('age');
			$data['e_address']   = $this->input->post('e_address');
			$data['gender']   = $this->input->post('gender');
			$this->db->where('cstaff_id',$cstaff_id);
			$this->db->update('comp_staff',$data);
			redirect('Companies/view/'.$company_id);
		}
		
		function create(){
			$update_id = $this->uri->segment(3);
			if(!isset($update_id)){
				$update_id = $this->input->post('update_id',$update_id);
			}
			if(is_numeric($update_id)){
				$data = $this->get_data_from_db($update_id);
				$data['update_id'] = $update_id;
			}
			else{
				$data = $this->get_data_from_post();
			}

			$data['sub_module_id']   = 'companies';
			$data['module_id']   = 'company_tests';
		    $data['page_title']  = 'New Company';
		    $data['description']  = 'Add Company';
		    $data['content']     = 'Companies/new_company';
			echo Modules::run('template/admin_v',$data);
		}
					function creato($param=''){
			$data['sub_module_id']   = 'companies';
		    $data['company_id']   = $param;
			$data['module_id']   = 'company_tests';
		    $data['page_title']  = 'New Company Staff';
		    $data['description']  = 'Add Comapny Staff';
		    $data['content']     = 'Companies/new_staff';
			echo Modules::run('template/admin_v',$data);
		}

			function creatoo($param='',$param1=''){
			$data['sub_module_id']   = 'companies';
		    $data['company_id']   = $param1;
		    $data['cstaff_id']   = $param;
			$data['module_id']   = 'company_tests';
		    $data['page_title']  = 'Edit Staff';
		    $data['description']  = 'Edit Staff';
		    $data['content']     = 'Companies/edit_staff';
			echo Modules::run('template/admin_v',$data);
		}
			function view($param=''){
		    $data['company_id']   = $param;
		    $data['page_title']  = 'Company Details';
		    $data['description']  = 'Company Details';
		    $data['content']     = 'Companies/company_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$company_id = $this->input->post('company_id');
			foreach($company_id as $value){
				$data['deleted'] = 1;
				$this->db->where('company_id',$value);
           		$this->db->update('company',$data);
        	}
        	//redirect('Reminders');
		}
		
		
		
	
}
