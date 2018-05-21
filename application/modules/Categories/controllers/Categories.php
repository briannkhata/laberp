<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Categories extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['page_title']  = 'Categories';
		    $data['description']  = 'Item category List';
			$data['sub_module_id'] = 'categories';
			$data['module_id'] = 'tests';
            $data['categories'] = $this->M_Categories->get_categories();
		    $data['content']   = 'Categories/categories';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['category']     = $this->input->post('category');
			$data['description']    = $this->input->post('description');
			return $data;
		}

		function get_data_from_posto(){
			$data['category_id']     = $this->input->post('category_id');
			$data['test_id']    = $this->input->post('test_id');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('category',array('category_id' =>$update_id))->result_array();
			foreach ($query as $row){
			$data['category']     = $row['category'];
			$data['description']    = $row['description'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('category_id',$update_id);
					$this->db->update('category',$data);
				}
				else{
					$this->db->insert('category',$data);
				}
			$this->session->set_flashdata('message','Category saved successfully');
			redirect('Categories');
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
			redirect('Categories/creato/'.$category_id);

		}
			
		function submitoo(){
			$test_parameter_id  = $this->input->post('test_parameter_id');
			$data['test_parameter']   = $this->input->post('test_parameter');
			$data['test_id']   = $this->input->post('test_id');
			$category_id   = $this->input->post('category_id');
			$this->db->where('test_parameter_id',$test_parameter_id);
			$this->db->update('test_parameters',$data);
			redirect('Categories/view/'.$category_id);
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

			$data['sub_module_id']   = 'categories';
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'New Category';
		    $data['description']  = 'Add Category';
		    $data['content']     = 'Categories/new_category';
			echo Modules::run('template/admin_v',$data);
		}

		function creato($param=''){
			$data['sub_module_id']   = 'categories';
		    $data['category_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'New Parameter';
		    $data['description']  = 'Add Parameter';
		    $data['content']     = 'Categories/new_parameter';
			echo Modules::run('template/admin_v',$data);
		}

			function creatoo($param='',$param1=''){
			$data['sub_module_id']   = 'categories';
		    $data['category_id']   = $param1;
		    $data['test_parameter_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'Edit Parameter';
		    $data['description']  = 'Edit Parameter';
		    $data['content']     = 'Categories/edit_parameter';
			echo Modules::run('template/admin_v',$data);
		}

			function view($param=''){
			$data['module_id']   = 'config';
		    $data['category_id']   = $param;
			$data['sub_module_id']   = 'categories';
		    $data['page_title']  = 'Categories Info';
		    $data['description']  = 'Categories Details';
		    $data['content']     = 'Categories/category_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$category_id = $this->input->post('category_id');
			foreach($category_id as $value){
				$data['deleted'] = 1;
				$this->db->where('category_id',$value);
           		$this->db->update('category',$data);
        	}
        	//redirect('Reminders');
		}

		
		
		
	
}
