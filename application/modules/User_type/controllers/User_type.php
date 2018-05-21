<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_type extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['page_title']  = 'Usertypes';
		    $data['description']  = 'Usertype List';
			$data['sub_module_id'] = 'user_type';
			$data['module_id'] = 'config';
            $data['usertype'] = $this->M_User_type->get_usertypes();
		    $data['content']   = 'User_type/user_types';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			//$data['user_type'] = $this->input->post('user_type');
			$data['desc']     = $this->input->post('desc');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('user_type',array('user_type' =>$update_id))->result_array();
			foreach ($query as $row){
			//$data['user_type']     = $row['user_type'];
			$data['desc']     = $row['desc'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('user_type',$update_id);
					$this->db->update('user_type',$data);
				}
				else{
					$this->db->insert('user_type',$data);
				}
			$this->session->set_flashdata('message','Usertype saved successfully');
			redirect('User_type');
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

			$data['sub_module_id']   = 'user_type';
			$data['module_id']   = 'config';
		    $data['page_title']  = 'New Usertype';
		    $data['description']  = 'Add Usertype';
		    $data['content']     = 'User_type/new_usertype';
			echo Modules::run('template/admin_v',$data);
		}

		function save_rights(){
					$user_type = $this->input->post('user_type');
					$module_id = $this->input->post('module_id', TRUE);
				    $action_id = $this->input->post('action_id', TRUE);
					$sub_module_id = $this->input->post('sub_module_id', TRUE);
					$sub_module_action_id = $this->input->post('sub_module_action_id', TRUE);



		        if(!empty($module_id)):

					      foreach($module_id as $key => $a):	
		$action_id = $this->input->post('action_id', TRUE);
					foreach ($action_id as $key => $valuee):
					$data1 = array(
							'module_id' => $a,
							'user_type' => $user_type,
							'action_id' => $valuee
							);
					$this->db->insert('user_module_actions',$data1);
					endforeach;
					endforeach;
					endif;
		

					     if(!empty($module_id) && !empty($sub_module_id)):
					                foreach($sub_module_id as $key => $a):		
						$sub_module_action_id = $this->input->post('sub_module_action_id', TRUE);
						foreach ($sub_module_action_id as $key => $value):
						$data0 = array(
								'sub_module_id' => $a,
								'user_type' => $user_type,
								'sub_module_action_id' => $value
								);
						$this->db->insert('user_sub_module_actions',$data0);
					endforeach;
					endforeach;
			endif;

			
			redirect('User_type/view/'.$user_type);
		}

			function view($param=''){
		    $data['user_type']   = $param;
		    $data['page_title']  = 'Rights Info';
		    $data['description']  = 'Rights Details';
		    $data['content']     = 'User_type/rights';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$user_type = $this->input->post('user_type');
			foreach($user_type as $value){
				$data['deleted'] = 1;
				$this->db->where('user_type',$value);
           		$this->db->update('user_type',$data);
        	}
        	//redirect('Reminders');
		}
		
		
		
	
}
