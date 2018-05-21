<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
		    $data['description']  = 'Chnage Password';
		    $data['page_title']  = 'Change Password';
		    $data['username'] = $this->db->get_where('users',array('user_id' => $this->session->userdata('user_id')))->row()->username;
		    $data['content']   = 'Profile/change_password';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['username']     = $this->input->post('username');
			$data['password']    = MD5($this->input->post('password'));
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

		function submit(){
			$data = $this->get_data_from_post();
			$user_id = $this->session->userdata('user_id');
			$this->db->where('user_id',$user_id);
			$this->db->update('users',$data);
		    redirect('Login/logout');
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
		    $data['page_title']  = 'Group Info';
		    $data['description']  = 'Group Details';
		    $data['content']     = 'Group/group_info';
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
