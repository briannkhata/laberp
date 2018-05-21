<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Specimens extends MY_Controller {

		function __construct()
		{
			parent::__construct();

		}

	    function index(){
		    $data['description']  = 'Specimens List';
		    $data['page_title']  = 'Specimens';
			$data['sub_module_id'] = 'specimens';
			$data['module_id']   = 'tests';
            $data['specimens'] = $this->M_Specimens->get_specimen();
		    $data['content']   = 'Specimens/specimens';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['specimen']     = $this->input->post('specimen');
			$data['description']    = $this->input->post('description');
			$data['collection']    = $this->input->post('collection');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('specimen',array('specimen_id' =>$update_id))->result_array();
			foreach ($query as $row){
			$data['specimen']     = $row['specimen'];
			$data['description']    = $row['description'];
			$data['collection']    = $row['collection'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('specimen_id',$update_id);
					$this->db->update('specimen',$data);
				}
				else{
					$this->db->insert('specimen',$data);
				}
			$this->session->set_flashdata('message','Specimen saved successfully');
			redirect('Specimens');
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

			$data['sub_module_id']   = 'specimens';
		    $data['page_title']  = 'New Specimen';
		    $data['description']  = 'Add New Specimen';
		    $data['content']     = 'Specimens/new_specimen';
			echo Modules::run('template/admin_v',$data);
		}

			function view($param=''){
			$data['module_id']   = 'group';
		    $data['page_title']  = 'Group Info';
		    $data['description']  = 'Group Details';
		    $data['user_id']  = $param;
		    $data['content']     = 'Group/group_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$specimen_id = $this->input->post('specimen_id');
			foreach($specimen_id as $value){
				$data['deleted'] = 1;
				$this->db->where('specimen_id',$value);
           		$this->db->update('specimen',$data);
        	}
        	//redirect('Reminders');
		}
			
}
