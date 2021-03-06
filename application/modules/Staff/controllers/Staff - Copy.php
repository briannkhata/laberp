<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Staff extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
		    $data['description']  = 'Staff List';
		    $data['page_title']  = 'Staff';
			$data['module_id'] = 'staff';
			$data['user_id']   = $this->session->userdata('user_id');
            $data['staffs'] = $this->M_Staff->get_staffs();
		    $data['content']   = 'Staff/staffs';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['name']     = $this->input->post('name');
			$data['phone']    = $this->input->post('phone');
			$data['address']    = $this->input->post('address');
			$data['username']    = $this->input->post('username');
			$data['password']    = MD5($this->input->post('password'));
			$data['email']    = $this->input->post('email');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('users',array('user_id' =>$update_id))->result_array();
			foreach ($query as $row){
			$data['name']     = $row['name'];
			$data['email']    = $row['email'];
			$data['address']    = $row['address'];
			$data['phone']    = $row['phone'];
			$data['username']    = $row['username'];
			$data['password']    = $row['password'];

			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('user_id',$update_id);
					$this->db->update('users',$data);
				}
				else{

					$this->db->insert('users',$data);
					$user_id = $this->db->insert_id();

					$sub_module_id = $this->input->post('sub_module_id', TRUE);
					if(!empty($sub_module_id)){
					foreach($sub_module_id as $key => $a){		
						$sub_module_action_id = $this->input->post('sub_module_action_id', TRUE);
						foreach ($sub_module_action_id as $key => $value) {
						$data0 = array(
								'sub_module_id' => $a,
								'user_id' => $user_id,
								'sub_module_action_id' => $value
								);
						$this->db->insert('user_sub_module_actions',$data0);
					}
				}
			}
					$module_id = $this->input->post('module_id', TRUE);
					if(!empty($module_id)){
					foreach($module_id as $key => $a){	
					$action_id = $this->input->post('action_id', TRUE);
					foreach ($action_id as $key => $valuee) {
					$data1 = array(
							'module_id' => $a,
							'user_id' => $user_id,
							'action_id' => $valuee
							);
					$this->db->insert('user_module_actions',$data1);
					}
				}
			}
				}
			$this->session->set_flashdata('message','Staff saved successfully');
			redirect('Staff');
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

			$data['module_id']   = 'staff';
		    $data['page_title']  = 'New Staff';
		    $data['description']  = 'Add New Staff';
		    $data['content']     = 'Staff/new_staff';
			echo Modules::run('template/admin_v',$data);
		}

			function view($param=''){
			$data['module_id']   = 'staff';
		    $data['page_title']  = 'Staff Info';
		    $data['description']  = 'Staff Details';
		    $data['user_id']  = $param;
		    $data['content']     = 'Staff/staff_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$user_id = $this->input->post('user_id');
			foreach($user_id as $value){
				$data['deleted'] = 1;
				$this->db->where('user_id',$value);
           		$this->db->update('users',$data);
        	}
        	//redirect('Reminders');
		}
			
}
