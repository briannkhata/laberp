<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comp_results extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

		   function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['page_title']  = 'Company Results';
		    $data['description']  = 'Company Test Results';
			$data['module_id'] = 'comp_results';
			$data['sub_module_id'] = 'company_tests';
            $data['result'] = $this->M_Comp_results->get_comp_results();
		    $data['content']   = 'Comp_results/comp_results';
			echo Modules::run('template/admin_v',$data);
		}
		  function view($param='',$param1='',$param2=''){
			$data['cstaff_id']   =$param;
			$data['company_id']   =$param1;
			$data['count']   =$param2;
		    $data['page_title']  = 'Medical Report';
		    $data['description']  = 'Medical Report';
		    $data['content']     = 'Comp_results/company_report';
			echo Modules::run('template/admin_v',$data);
		}
		
		function new_test($param=''){
		    $data['company_id']  = $param;
			$data['page_title']  = 'New Test';
		    $data['description']  = 'New Test';
			$data['module_id'] = 'company_tests';
		    $data['content']   = 'Company_tests/new_test';
			echo Modules::run('template/admin_v',$data);
		}
		function view_comp_results(){
		    $data['company_id']  = $this->input->post('company_id');
		    $data['count']  = $this->input->post('count');
			$data['page_title']  = 'Company Results';
		    $data['description']  = 'Company Results';
			$data['module_id'] = 'company_tests';
		    $data['content']   = 'Comp_results/staffs';
			echo Modules::run('template/admin_v',$data);
		}
		function new_testsubmit(){
			$data['count'] = $this->input->post('count');
			$data['company_id'] = $this->input->post('company_id');
			$data['test_title'] = $this->input->post('test_title');
			$data['request_date'] = $this->input->post('request_date');
			$this->db->insert('ctest',$data);
			redirect('Company_tests/new_testo/'.$data['company_id'].'/'.$data['count'].'/'.strtotime($data['request_date']));
		}
		function new_testo($param='',$param1='',$param2=''){
			$data['company_id'] = $param;
		    $data['count'] = $param1;
		    $data['request_date'] = $param2;
			$data['page_title']  = 'New Test';
		    $data['description']  = 'New Test';
			$data['module_id'] = 'company_tests';
		    $data['content']   = 'Company_tests/new_testo';
			echo Modules::run('template/admin_v',$data);
		}

		function add_company_test(){
					
			$data0['scolour']   = $this->input->post('scolour');
			$data0['sconsistency']   = $this->input->post('sconsistency');
			$data0['smucus'] = $this->input->post('smucus');
			$data0['sblood'] = $this->input->post('sblood');
			$data0['sparasite']   = $this->input->post('sparasite');
			$this->db->insert('stula',$data0);
			$stula_id = $this->db->insert_id();
			
			
			$data00['ucolour']   = $this->input->post('ucolour');
			$data00['uappearance']   = $this->input->post('uappearance');
			$data00['urobilinogen'] = $this->input->post('urobilinogen');
			$data00['ubilirubin'] = $this->input->post('ubilirubin');
			$data00['uprotein']   = $this->input->post('uprotein');
			$data00['unitrite']   = $this->input->post('unitrite');
			$data00['uglucose']   = $this->input->post('uglucose');
			$data00['uleucocytes']   = $this->input->post('uleucocytes');
			$data00['uascobic_acid']   = $this->input->post('uascobic_acid');
			$data00['ublood']   = $this->input->post('ublood');
			$data00['uph']   = $this->input->post('uph');
			$data00['usg']   = $this->input->post('usg');
			$data00['uketones']   = $this->input->post('uketones');
			$this->db->insert('urina',$data00);
			$urina_id = $this->db->insert_id();
			
			
			$data11['stu_micro_wbc']   = $this->input->post('stu_micro_wbc');
			$data11['stu_micro_rbc']   = $this->input->post('stu_micro_rbc');
			$data11['stu_micro_ova'] = $this->input->post('stu_micro_ova');
			$data11['stu_micro_parasites']   = $this->input->post('stu_micro_parasites');
			$this->db->insert('stu_micro',$data11);
			$stu_micro_id = $this->db->insert_id();
			
			$data1['ura_micro_wbc'] = $this->input->post('ura_micro_wbc');
			$data1['ura_micro_rbc'] = $this->input->post('ura_micro_rbc');
			$data1['ura_micro_ova'] = $this->input->post('ura_micro_ova');
			$data1['ura_micro_parasites']   = $this->input->post('ura_micro_parasites');
			$this->db->insert('ura_micro',$data1);
			$ura_micro_id = $this->db->insert_id();
			
			$data['ura_micro_id'] = $ura_micro_id;
			$data['stu_micro_id'] = $stu_micro_id;
			$data['urina_id'] = $urina_id;
			$data['stula_id'] = $stula_id;
			$data['request_date']   = $this->input->post('request_date');
			$data['company_id']   = $this->input->post('company_id');
			$data['cstaff_id'] = $this->input->post('cstaff_id');
			$data['other_tests'] = $this->input->post('other_tests');
			$data['count'] = $this->input->post('count');
			$data['comment'] = $this->input->post('comment');
			$this->db->insert('company_test',$data);
			$company_test_id = $this->db->insert_id();
			$this->session->set_userdata('company_test_id',$company_test_id);
			$this->session->set_flashdata('message','Test Details Saved successfully');
			redirect('Company_tests/view/'.$data['cstaff_id'].'/'.$data['company_id'].'/'.$data['count']);
		}
		
		function update_company_test(){		
			$company_test_id   = $this->input->post('company_test_id');
			$urina_id   = $this->input->post('urina_id');
			$stula_id   = $this->input->post('stula_id');
			$ura_micro_id   = $this->input->post('ura_micro_id');
			$stu_micro_id   = $this->input->post('stu_micro_id');
			
			$data0['scolour']   = $this->input->post('scolour');
			$data0['sconsistency']   = $this->input->post('sconsistency');
			$data0['smucus'] = $this->input->post('smucus');
			$data0['sblood'] = $this->input->post('sblood');
			$data0['sparasite']   = $this->input->post('sparasite');
			$this->db->where('stula_id',$stula_id);
			$this->db->update('stula',$data0);
			//$stula_id = $this->db->insert_id();
			
			
			$data00['ucolour']   = $this->input->post('ucolour');
			$data00['uappearance']   = $this->input->post('uappearance');
			$data00['urobilinogen'] = $this->input->post('urobilinogen');
			$data00['ubilirubin'] = $this->input->post('ubilirubin');
			$data00['uprotein']   = $this->input->post('uprotein');
			$data00['unitrite']   = $this->input->post('unitrite');
			$data00['uglucose']   = $this->input->post('uglucose');
			$data00['uleucocytes']   = $this->input->post('uleucocytes');
			$data00['uascobic_acid']   = $this->input->post('uascobic_acid');
			$data00['ublood']   = $this->input->post('ublood');
			$data00['uph']   = $this->input->post('uph');
			$data00['usg']   = $this->input->post('usg');
			$data00['uketones']   = $this->input->post('uketones');
			$this->db->where('urina_id',$urina_id);
			$this->db->update('urina',$data00);
			//$urina_id = $this->db->insert_id();
			
			
			$data11['stu_micro_wbc']   = $this->input->post('stu_micro_wbc');
			$data11['stu_micro_rbc']   = $this->input->post('stu_micro_rbc');
			$data11['stu_micro_ova'] = $this->input->post('stu_micro_ova');
			$data11['stu_micro_parasites']   = $this->input->post('stu_micro_parasites');
			$this->db->where('stu_micro_id',$stu_micro_id);
			$this->db->update('stu_micro',$data11);
			//$stu_micro_id = $this->db->insert_id();
			
			
			$data1['ura_micro_wbc'] = $this->input->post('ura_micro_wbc');
			$data1['ura_micro_rbc'] = $this->input->post('ura_micro_rbc');
			$data1['ura_micro_ova'] = $this->input->post('ura_micro_ova');
			$data1['ura_micro_parasites']   = $this->input->post('ura_micro_parasites');
			$this->db->where('ura_micro_id',$ura_micro_id);
			$this->db->update('ura_micro',$data1);
			//$ura_micro_id = $this->db->insert_id();
			

			$data['ura_micro_id'] = $ura_micro_id;
			$data['stu_micro_id'] = $stu_micro_id;
			$data['urina_id'] = $urina_id;
			$data['stula_id'] = $stula_id;
			//$microscopy_id = $this->db->insert_id();
			

			$data['ura_micro_id'] = $ura_micro_id;
			$data['stu_micro_id'] = $stu_micro_id;
			$data['urina_id'] = $urina_id;
			$data['stula_id'] = $stula_id;
			$data['request_date']   = $this->input->post('request_date');
			$data['company_id']   = $this->input->post('company_id');
			$data['address'] = $this->input->post('address');
			$data['staff_name'] = $this->input->post('staff_name');
			$data['other_tests'] = $this->input->post('other_tests');
			$data['comment'] = $this->input->post('comment');
			$this->db->where('company_test_id',$company_test_id);
			$this->db->update('company_test',$data);
			//$company_test_id = $this->db->insert_id();
			$this->session->set_userdata('company_test_id',$company_test_id);
			$this->session->set_flashdata('message','Test changes Saved successfully');
			redirect(base_url() .'admin/company_reportt', 'refresh');
		}
		
		function company_report(){
			       $company_test_id = $this->session->userdata('company_test_id');
				   $admin  =   $this->db->query("SELECT * FROM company_test WHERE company_test_id='$company_test_id'");
				    $row = $admin->row();
						if (isset($row))
						{								
							$company_test_id  = $row->company_test_id;
							$urina_id  = $row->urina_id;
							$stula_id = $row->stula_id;
							$ura_micro_id  = $row->ura_micro_id;
							$stu_micro_id  = $row->ura_micro_id;
							$company_id  = $row->company_id;
						}

			$data['page_title']  = 'Company Report >> '.$this->db->get_where('company_test',array('company_test_id'=>$company_test_id))->row()->staff_name;
			$data['company'] = $this->db->get("labo")->row()->name;
			$data['company_test_id']  = $company_test_id;
			$data['urina_id']  = $urina_id;
			$data['stula_id']  = $stula_id;
			$data['ura_micro_id']  = $ura_micro_id;
			$data['stu_micro_id']  = $stu_micro_id;
			$data['company_id']  = $company_id;
			$data['system']  = 'LabSoft';
			$this->load->view('company_report',$data);			
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
