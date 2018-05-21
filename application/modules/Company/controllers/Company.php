<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Company extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

		 function index(){
		    $data['page_title']  = 'Lab Details';
		    $data['description']  = 'Lab SetUp';
			$data['sub_module_id']   = 'company';
			$data['module_id']   = 'Config';
			$data['company_setting']      = $this->M_Company->get_company();
		    $data['content']     = 'Company/company_setting';
			echo Modules::run('template/admin_v',$data);
		}


		function save(){
			$labo_id = $this->input->post('labo_id', TRUE);
			$data['name'] = $this->input->post('name', TRUE);
			$data['email'] = $this->input->post('email', TRUE);
			$data['phone'] = $this->input->post('phone', TRUE);
			$data['address'] = $this->input->post('address', TRUE);
			$data['currency'] = $this->input->post('currency', TRUE);
			$data['telphone'] = $this->input->post('telphone', TRUE);

		//$destination = './uploads/logo/'.$data['company_name'];
			//$company_logo = '';

			//if($_FILES['company_logo']['tmp_name'] !=''){
			$data['logo'] = $_FILES['logo']['name'];
			$destination = 'uploads/logos/'.$data['logo'];

				//move_uploaded_file($_FILES['company_logo']['tmp_name'],$destination);
				//}else{

				//}
			//if($_FILES['company_logo']['tmp_name'] !=''){
				///$this->db->where('company_id',$company_id);
				//$this->db->update('company',$data);
				//}else{
	
			$this->db->where('labo_id',$labo_id);
			$this->db->update('labo',$data);
			move_uploaded_file($_FILES['logo']['tmp_name'],$destination);
				//}
			$this->session->set_flashdata('message','Settings saved successfully');
			redirect('Company');
		}

}
