<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groups extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
		    $data['description']  = 'Group List';
		    $data['page_title']  = 'Group';
			$data['sub_module_id'] = 'groups';
			$data['module_id']   = 'tests';
            $data['group'] = $this->M_Groups->get_groups();
		    $data['content']   = 'Groups/groups';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['group_name']     = $this->input->post('group_name');
			$data['description']    = $this->input->post('description');
			$data['has_units']    = $this->input->post('has_units');
			return $data;
		}
		
			function get_data_from_posto(){
			$data['category_id']     = $this->input->post('category_id');
			$data['test_id']    = $this->input->post('test_id');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('group',array('group_id' =>$update_id))->result_array();
			foreach ($query as $row){
			$data['group_name']     = $row['group_name'];
			$data['description']    = $row['description'];
			$data['has_units']    = $row['has_units'];
			}
			return $data;
		}
		function submito(){
			//$test_code   = $this->input->post('test_code');
			$group_id  = $this->input->post('group_id');
			$test_name   = $this->input->post('test_name');
	 		$amount   = $this->input->post('amount');

			 if ($this->input->post('test_code')) { 
					$test_code =	$this->input->post('test_code',true);
							
					foreach ($test_code as $i => $a) { // need index to match other properties
					$data = array(
					'test_code' => $a,
					'test_name' => $test_name[$i],
					'amount' => $amount[$i],
					'group_id' => $group_id
					);
					$this->db->insert('tests',$data);
					}    
				}
			redirect('Groups/creato/'.$group_id);

		}
			
		function submitoo(){
			$test_id  = $this->input->post('test_id');
			$data['test_code']   = $this->input->post('test_code');
			$data['test_name']   = $this->input->post('test_name');
			$data['amount']   = $this->input->post('amount');
			$group_id   = $this->input->post('group_id');
			$this->db->where('test_id',$test_id);
			$this->db->update('tests',$data);
			redirect('Groups/view/'.$group_id);
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('group_id',$update_id);
					$this->db->update('group',$data);
				}
				else{
					$this->db->insert('group',$data);
				}
			$this->session->set_flashdata('message','Group saved successfully');
			redirect('Groups');
		}
		
			function creato($param=''){
			$data['sub_module_id']   = 'groups';
		    $data['group_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'New Test';
		    $data['description']  = 'Add Test';
		    $data['content']     = 'Groups/new_test';
			echo Modules::run('template/admin_v',$data);
		}

			function creatoo($param='',$param1=''){
			$data['sub_module_id']   = 'groups';
		    $data['group_id']   = $param1;
		    $data['test_id']   = $param;
			$data['module_id']   = 'tests';
		    $data['page_title']  = 'Edit Test';
		    $data['description']  = 'Edit Test';
		    $data['content']     = 'Groups/edit_test';
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

			$data['sub_module_id']   = 'group';
		    $data['page_title']  = 'New Group';
		    $data['description']  = 'Add New Group';
		    $data['content']     = 'Groups/new_group';
			echo Modules::run('template/admin_v',$data);
		}

			function view($param=''){
			$data['sub_module_id']   = 'group';
			$data['group_id']   =$param;
		    $data['page_title']  = 'Group Info';
		    $data['description']  = 'Group Details';
		    $data['content']     = 'Groups/group_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$group_id = $this->input->post('group_id');
			foreach($group_id as $value){
				$data['deleted'] = 1;
				$this->db->where('group_id',$value);
           		$this->db->update('group',$data);
        	}
        	//redirect('Reminders');
		}
			
}
