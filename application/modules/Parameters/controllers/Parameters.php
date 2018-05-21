<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Parameters extends MY_Controller {

		function __construct()
		{
			parent::__construct();
		}

	  	 function index(){
	  	 	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
	  	 
		    $data['page_title']  = 'Test Parameters';
			$data['description'] = 'List of Test Parameters';
			$data['module_id'] = 'tests';
			$data['sub_module_id'] = 'parameters';
            $data['params']       = $this->M_Parameters->get_parameters();
		    $data['content']     = 'Parameters/parameters';
			echo Modules::run('template/admin_v',$data);
		}

		function get_data_from_post(){
			$data['category_id']     = $this->input->post('category_id',TRUE);
			$data['test_id']     = $this->input->post('test_id',TRUE);
			$data['test_parameter']  = $this->input->post('test_parameter',TRUE);
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('test_parameters',array('test_parameter_id' =>$update_id))->result_array();
			foreach ($query as $row) {
			  $data['test_id'] = $row['test_id'];
			  $data['category_id'] = $row['category_id'];
			  $data['test_parameter'] = $row['test_parameter'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){	
					$this->db->where('test_parameter_id',$update_id);
					$this->db->update('test_parameters',$data);
				}
				else{
					$this->db->insert('test_parameters',$data);
					$update_id = $this->db->insert_id();
					
				}
			 $this->session->set_flashdata('message','Parameter saved successfully');
			redirect('Parameters');
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
			$data['sub_module_id']   = 'parameters';
		    $data['page_title']  = 'New Parameter';
			$data['description'] = 'Add new parameter';
		    $data['content']     = 'Parameters/new_parameter';
			echo Modules::run('template/admin_v',$data);
		}

	
		function delete(){
			$test_parameter_id = $this->input->post('test_parameter_id');
			foreach($test_parameter_id as $value){
				$data['deleted'] = 1;
				$this->db->where('test_parameter_id',$value);
           		$this->db->update('test_parameters',$data);
        	}
        	//redirect('Items');
		}
	
	
}
