<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class New_test extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

		   function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['page_title']  = 'Company Tests';
		    $data['description']  = 'Company Tests';
			$data['sub_module_id'] = 'new_test';
			$data['module_id'] = 'company_tests';
            $data['result'] = $this->M_New_test->get_companytests();
		    $data['content']   = 'New_test/new_tests';
			echo Modules::run('template/admin_v',$data);
		}
			 function view($param='',$param1='',$param2=''){
			$data['ctest_id']   =$param;
			$data['company_id']   = $this->db->get_where('ctest',array('ctest_id'=>$param))->row()->company_id;
			$data['count']   = $this->db->get_where('ctest',array('ctest_id'=>$param))->row()->count;
			$data['request_date']   = $this->db->get_where('ctest',array('ctest_id'=>$param))->row()->request_date;
		    $data['page_title']  = 'New Test';
		    $data['description']  = 'New Test';
		    $data['content']     = 'New_test/new_testo';
			echo Modules::run('template/admin_v',$data);
		}
		 function medical_report($param='',$param1='',$param2=''){
			$data['cstaff_id']   =$param;
			$data['company_id']   = $param1;
			$data['count']   = $param2;
			//$data['request_date']   = $this->db->get_where('ctest',array('ctest_id'=>$param))->row()->request_date;
		    $data['page_title']  = 'Medical Report';
		    $data['description']  = 'Medical Report';
		    $data['content']     = 'New_test/company_report';
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
			redirect('New_test/medical_report/'.$data['cstaff_id'].'/'.$data['company_id'].'/'.$data['count']);
		}
		
		function update_company_test(){		
			$company_test_id   = $this->input->post('company_test_id');
			$urina_id   = $this->input->post('urina_id');
			$stula_id   = $this->input->post('stula_id');
			$ura_micro_id   = $this->input->post('ura_micro_id');
			$stu_micro_id   = $this->input->post('stu_micro_id');
			$count   = $this->input->post('count');
		    $company_id   = $this->input->post('company_id');
			$cstaff_id   = $this->input->post('cstaff_id');
			
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
	
			$this->db->where('company_test_id',$company_test_id);
			$this->db->update('company_test',$data);
			//$company_test_id = $this->db->insert_id();
			$this->session->set_userdata('company_test_id',$company_test_id);
			$this->session->set_flashdata('message','Changes Saved successfully');
			redirect('New_test/medical_report/'.$cstaff_id.'/'.$company_id.'/'.$count);
		}
		
				function get_data_from_post(){
			$data['test_title']     = $this->input->post('test_title');
			$data['date_created']    = date('Y-m-d H:m:s');
			$data['request_date']    = $this->input->post('request_date');
			$data['count']    = $this->input->post('count');
			$data['company_id']    = $this->input->post('company_id');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('ctest',array('ctest_id' =>$update_id))->result_array();
			foreach ($query as $row) {
			$data['company_id']     = $row['company_id'];
			$data['count']    = $row['count'];
			$data['test_title']    = $row['test_title'];
			$data['request_date']    = $row['request_date'];
			$data['date_created']    = $row['date_created'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('ctest_id',$update_id);
					$this->db->update('ctest',$data);
				}
				else{
					$this->db->insert('ctest',$data);
				}
			$this->session->set_flashdata('message','Test saved successfully');
			redirect('New_test');
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

			$data['module_id']   = 'company_tests';
			$data['sub_module_id']   = 'new_test';
		    $data['page_title']  = 'New Test';
		    $data['description']  = 'Add New Test';
		    $data['content']     = 'New_test/new_test';
			echo Modules::run('template/admin_v',$data);
		}
		
		function edit_company_report($param='',$param1='',$param2='',$param3='',$param4='',$param5=''){
		
			$data['rr']= $this->db->select('*')->from('company_test')
			->join('urina','company_test.urina_id=urina.urina_id')
			->join('stula','company_test.stula_id=stula.stula_id')
			->join('company','company_test.company_id=company.company_id')
			->join('ura_micro','company_test.ura_micro_id=ura_micro.ura_micro_id')
			->join('stu_micro','company_test.stu_micro_id=stu_micro.stu_micro_id')
			->where('company_test_id',$param)
			//->where('company_test_id',$param)
			//->where('company_test_id',$param)
			//->where('company_test_id',$param)
			->get()->result_array();
			$data['company_test_id']  = $param;
			$data['urina_id']  = $param1;
			$data['stula_id']  = $param2;
			$data['ura_micro_id']  = $param3;
			$data['stu_micro_id']  = $param4;
			$data['company_id']  = $param5;
			//$data['module_id']   = 'company_tests';
			//$data['sub_module_id']   = 'new_test';
		    $data['page_title']  = 'Edit Report';
		    $data['description']  = 'Edit Report';
		    $data['content']     = 'New_test/edit_company_report';
			echo Modules::run('template/admin_v',$data);
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
			$ctest_id = $this->input->post('ctest_id');
			foreach($ctest_id as $value){
				$data['deleted'] = 1;
				$this->db->where('ctest_id',$value);
           		$this->db->update('ctest',$data);
        	}
        	//redirect('Reminders');
		}
		
		
		
	
}
