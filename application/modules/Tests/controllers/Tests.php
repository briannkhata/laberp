<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tests extends MY_Controller {

		function __construct()
		{
			parent::__construct();
		}

	  	 function index(){
	  	 		if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());

		    $data['page_title']  = 'Tests';
			$data['description'] = 'List of Tests';
			$data['module_id'] = 'tests';
			$data['sub_module_id'] = 'tests';
            $data['tests']       = $this->M_Tests->get_tests();
		    $data['content']     = 'Tests/tests';
			echo Modules::run('template/admin_v',$data);
		}

		
		function get_data_from_post(){
			$data['test_name']     = $this->input->post('test_name',TRUE);
			$data['test_code']     = $this->input->post('test_code',TRUE);
			$data['amount']     = $this->input->post('amount',TRUE);
			$data['group_id']  = $this->input->post('group_id',TRUE);
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('tests',array('test_id' =>$update_id))->result_array();
			foreach ($query as $row) {
			  $data['test_name'] = $row['test_name'];
			  $data['test_code'] = $row['test_code'];
			  $data['amount'] = $row['amount'];
			  $data['group_id'] = $row['group_id'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
    		$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){	
					$this->db->where('test_id',$update_id);
					$this->db->update('tests',$data);
				}else{

					$this->db->insert('tests',$data);
				}
			 $this->session->set_flashdata('message','Test saved successfully');
			 redirect('Tests');
			
		}
		
			function submito(){
			$test_id   = $this->input->post('test_id');
			$category_id  = $this->input->post('category_id');
				 
			 if ($this->input->post('test_parameter')) { 
					$test_parameter =	$this->input->post('test_parameter',true);
							
					foreach ($test_parameter as $i => $a) { // need index to match other properties
					$data = array(
					'test_parameter' => $a,
					'test_id' => $test_id,
					'category_id' => $category_id
					);
					$this->db->insert('test_parameters',$data);
					}    
	
				}
			redirect('Tests/creato/'.$test_id);

		}
			
		function submitoo(){
			$test_parameter_id  = $this->input->post('test_parameter_id');
			$data['test_parameter']   = $this->input->post('test_parameter');
			$data['test_id']   = $this->input->post('test_id');
			$category_id   = $this->input->post('category_id');
			$this->db->where('test_parameter_id',$test_parameter_id);
			$this->db->update('test_parameters',$data);
			redirect('Tests/view/'.$data['test_id']);
		}
				function creato($param=''){
			$data['sub_module_id']   = 'tests';
		    $data['test_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'New Parameter';
		    $data['description']  = 'Add Parameter';
		    $data['content']     = 'Tests/new_parameter';
			echo Modules::run('template/admin_v',$data);
		}

			function creatoo($param='',$param1=''){
			$data['sub_module_id']   = 'tests';
		    $data['test_id']   = $param1;
		    $data['test_parameter_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'Edit Parameter';
		    $data['description']  = 'Edit Parameter';
		    $data['content']     = 'Tests/edit_parameter';
			echo Modules::run('template/admin_v',$data);
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

			$data['module_id']   = 'tests';
			$data['sub_module_id']   = 'tests';
		    $data['page_title']  = 'New Test';
			$data['description'] = 'Add new test';
		    $data['content']     = 'Tests/new_test';
			echo Modules::run('template/admin_v',$data);
		}

			 function view($param=''){
		    $data['page_title']  = 'Test Details';
			$data['description'] = 'Test Details';
			$data['module_id'] = 'tests';
			$data['sub_module_id'] = 'tests';
			$data['test_id'] = $param;
		    $data['content']     = 'Tests/test_info';
			echo Modules::run('template/admin_v',$data);
		}

	

		function delete(){
			$test_id = $this->input->post('test_id');
			foreach($test_id as $value){
				$data['deleted'] = 1;
				$this->db->where('test_id',$value);
           		$this->db->update('tests',$data);
        	}
        	//redirect('Items');
		}
		
		
	
}
