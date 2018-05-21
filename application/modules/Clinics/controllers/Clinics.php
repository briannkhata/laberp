<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Clinics extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	    function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['description']  = 'Clinic List';
		    $data['page_title']  = 'Clinics';
			$data['module_id'] = 'clinics';
            $data['clinics'] = $this->M_Clinics->get_clinics();
		    $data['content']   = 'Clinics/clinics';
			echo Modules::run('template/admin_v',$data);

		}

		function get_data_from_post(){
			$data['clinic_name']     = $this->input->post('clinic_name');
			$data['address']    = $this->input->post('address');
			$data['phone']    = $this->input->post('phone');
			$data['email']    = $this->input->post('email');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('clinics',array('clinic_id' =>$update_id))->result_array();
			foreach ($query as $row) {
			$data['clinic_name'] = $row['clinic_name'];
			$data['address'] = $row['address'];
			$data['phone'] = $row['phone'];
			$data['email'] = $row['email'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('clinic_id',$update_id);
					$this->db->update('clinics',$data);
				}
				else{
					$this->db->insert('clinics',$data);
				}
			$this->session->set_flashdata('message','Clinic saved successfully');
			redirect('Clinics');
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

			$data['module_id']   = 'clinics';
		    $data['page_title']  = 'New Clinic';
		    $data['description']  = 'Add New Clinic';
		    $data['content']     = 'Clinics/new_clinic';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$clinic_id = $this->input->post('clinic_id');
			foreach($clinic_id as $value){
				$data['deleted'] = 1;
				$this->db->where('clinic_id',$value);
           		$this->db->update('clinics',$data);
        	}
        	return;
		}
			
}
