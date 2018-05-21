<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Patients extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	    function index(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['description']  = 'Patients List';
		    $data['page_title']  = 'Patients';
			$data['module_id'] = 'patients';
            $data['patients'] = $this->M_Patients->get_today_patients();
		    $data['content']   = 'Patients/today_patients';
			echo Modules::run('template/admin_v',$data);
		}
		
		 function all_patients(){
	    	if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
		    $data['description']  = 'Patients List';
		    $data['page_title']  = 'Patients';
			$data['module_id'] = 'patients';
            $data['patients'] = $this->M_Patients->get_all_patients();
		    $data['content']   = 'Patients/all_patients';
			echo Modules::run('template/admin_v',$data);

		}
			 function sales($param=''){
		    $data['description']  = 'Sales List';
		    $data['client_id']  = $param;
		    $data['page_title']  = 'Sales';
			$data['module_id'] = 'sales';
		    //$data['content']   = 'Sales/sales';
			$this->load->view('Patients/sales',$data);
		}
		
		function refresh_cart(){

			if (!empty($this->input->post('test_id'))){
				$test_id = $this->input->post('test_id');
				$data['test_id'] = $test_id ; 
				$p_price = $this->db->get_where('tests',array('test_id'=>$test_id))->row()->amount;
				if($p_price == 0){
					$data['p_price'] = 0;
				    $data['t_price'] = 0;
				}else{
					$data['p_price'] = $p_price;
				    $data['t_price'] = $p_price;
				}
				
				$this->db->insert('sale_temp',$data);
			}
			$d['client_id'] = $this->input->post('client_id');
		    $this->load->view('Patients/refresh_cart',$d);
			return;
			//echo json_encode(array("status" => TRUE));

	    }
		
	     function send_to_cart(){
			$data['client_id'] = $this->input->post('client_id');
	     	$this->load->view('Patients/send_to_cart',$data);
	     	return;

		}
		
		function submit_sale(){
				$client_id = $this->input->post('client_id');
				$clinic_id = $this->input->post('clinic_id');
			    $request_date = $this->input->post('request_date');
			    $doctor_name = $this->input->post('doctor_name');
				$payment_type = $this->input->post('payment_type');
				$t_amount = $this->input->post('t_amount');
				$t_bill = $this->input->post('t_bill');
				$total = $t_bill;
				$change = $t_amount - $total;
				
				$data0['total'] = $total;
				$data0['t_amount'] = $t_amount;
				$data0['client_id'] = $client_id;
				$data0['user_id'] = $this->session->userdata('user_id');
				$data0['t_bill'] = $t_bill;
				$data0['change'] = $change;
				$data0['sale_time'] = date('Y-m-d h:m:i');
				$data0['payment_type'] = $this->input->post('payment_type');
				$this->db->insert('sales',$data0);
				$sale_id = $this->db->insert_id();
				$this->session->set_userdata('sale_id',$sale_id);
			
				$all = $this->db->get('sale_temp')->result_array();
				foreach($all as $xx){
					$data['test_id'] = $xx['test_id'];
					$data['amount'] = $xx['p_price'];
					$data['discount'] = $xx['discount'];
					$data['sale_id'] = $sale_id;
					$this->db->insert('sales_tests',$data);
					$this->db->where('sale_temp_id !=',NULL);
					$this->db->delete('sale_temp');
					$this->session->set_userdata('client_id',$client_id);
			}
			
				foreach($all as $xx){
					$d['test_id'] = $xx['test_id'];
				    $d['clinic_id'] = $clinic_id;
				    $d['client_id'] = $client_id;
				    $d['doctor_name'] = $doctor_name;
					$d['request_date'] = $request_date;
				    $d['pay_mode'] = $payment_type;
					$d['group_id'] = $this->db->get_where('tests',array('test_id'=>$d['test_id']))->row()->group_id;
					$d['visit_date'] = strtotime(date('Y-m-d h:m:i'));
					$d['day'] = date('d');
					$d['month'] = date('F');
					$d['year'] = date('Y');
					$this->db->insert('requested_tests',$d);
			}
			//redirect('Patients/view/'.$client_id);
		   redirect('Patients/receipt/'.$client_id.'/'.$sale_id.'/'.strtotime(date('Y-m-d h:m:i')));
	    }
		
	
		   function receipt($param='',$param1='',$param2=''){
			//$data["sale_id"]  = $this->session->userdata('sale_id');	
			//$data["client_id"]  = $this->session->userdata('client_id');
			$data["sale_id"]  = $param1;	
			$data["client_id"]  = $param;
			$data["visit_date"]  = $param2;				
			$data['page_title']  = 'Receipt';
			$data['description'] = 'Receipt';
			$data['module_id'] = 'sales';
		    $data['content']  = 'Patients/receipt';
			echo Modules::run('template/admin_v',$data);
	    }
		function cart_update(){
			$sale_temp_id = $this->input->post('sale_temp_id');
			$client_id = $this->input->post('client_id');
			foreach($sale_temp_id as $key => $a){		
					$discount = $this->input->post('discount',TRUE);
					$p_price  = $this->input->post('p_price',TRUE);
					$data = array(
								'discount' => $discount[$key],
								'p_price' => $p_price[$key],
								't_price' => $p_price[$key] - $discount[$key]
								//'item_id' => $item_id[$key],
								);
				$this->db->where('sale_temp_id',$a);
				$this->db->update('sale_temp',$data);
			}
			redirect('Patients/sales/'.$client_id);
		}
		
		 function cart_delete($id){
			$this->db->where('sale_temp_id',$id);
			$this->db->delete('sale_temp');
			return;
		}
		function clear_cart(){
			$this->db->where('sale_temp_id !=',NULL);
			$this->db->delete('sale_temp');
			echo json_encode(array("status" => TRUE));
		}



		
		    function add_parameta($param1='',$param2='',$param3='',$param4=''){
				$group_id=$param1;
				$test_id=$param2;
				$test_idd=$param2;
				$client_id=$param3;
				//$test_idd = $this->db->get_where('requested_tests',array('client_id'=>$param3,'done'=>0,'group_id'=>$param1))->row()->test_id;
				$result0  =  $this->db->query("SELECT * FROM requested_tests WHERE client_id='$param3' AND done = 0 AND group_id = '$param1'");
				    $row = $result0->row();
						if (isset($row)):
							$test_idd = $row->test_id;
						else:
							//$test_idd = $param1;
						endif;
				//$test_id = $this->db->get_where('requested_tests',array('client_id'=>$param3,'done'=>1,'group_id'=>$param1))->row()->test_id;
				$result00  =  $this->db->query("SELECT * FROM requested_tests WHERE client_id='$param3' AND done = 1 AND group_id = '$param1'");
				    $row = $result00->row();
						if (isset($row)):
							$test_id =	$row->test_id;
						else:
							//$test_id = $test_idd;
						endif;
				//$data['test_id']=$test_id;
				//$data['zina']= $this->db->select('*')->from('tests')->join('requested_tests','requested_tests.test_id=tests.test_id')->join('group','group.group_id=tests.group_id')->where('group.group_id',$group_id)->where('requested_tests.client_id',$client_id)->limit(1)->get()->result_array();
				//$data['zina']= $this->db->select('*')->from('tests')->where('group_id',$group_id)->get()->result_array();
				$data['zina']= $this->db->select('*')->from('requested_tests')
				//->join('requested_tests','requested_tests.test_id=tests.test_id')
				//->join('test_parameters','test_parameters.test_id=tests.test_id')
				//->join('group','group.group_id=tests.group_id')
				->where('requested_tests.visit_date',$param4)
				->where('group_id',$group_id)
				->where('requested_tests.client_id',$client_id)
				->get()->result_array();
			
				$data['group_idd']  = $group_id;	
				$data['group_id']  = $group_id;	
				$data['client_id']  = $client_id;
				$data['visit_date']  = $param4;
				$data['test_id']  = $test_id;	
				$data['test_idd']  = $test_idd;	
				//$data['client_id']  = $client_id;	
				$data['module_id']   = 'patients';
				$data['page_title']  = 'New Parameter';
				$data['description']  = 'Add New Parameter';
				$data['content']     = 'Patients/add_parameta';
				echo Modules::run('template/admin_v',$data);
			 
			}
			function  test_result_add()	{
				
				$test_parameter_id = $this->input->post('test_parameter_id');
				foreach($test_parameter_id as $key => $a){		
					$test_result = $this->input->post('test_result',TRUE);
					$units = $this->input->post('units',TRUE);
					$v_date = $this->input->post('v_date',TRUE);
					$ref_range = $this->input->post('ref_range',TRUE);
					$specimen = $this->input->post('specimen',TRUE);
					$report_date = strtotime(date('Y-m-d H:i:s'));
					$group_id = $this->input->post('group_id',TRUE);
					$test_result = $this->input->post('test_result',TRUE);
					$reported_by= $this->input->post('reported_by',TRUE);
					$approved_by= $this->input->post('approved_by',TRUE);
					$comment = $this->input->post('comment',TRUE);
					$mala_mps = $this->input->post('mala_mps',TRUE);
					$mala_ant = $this->input->post('mala_ant',TRUE);
					$test_id  = $this->input->post('test_id',TRUE);
					$client_id  = $this->input->post('client_id',TRUE);
					$data = array(
								'test_parameter_id' => $a,
								'test_result' => $test_result[$key],
								'test_id' => $test_id[$key],
								'client_id' => $client_id,
								'units' => $units[$key],
								'ref_range' => $ref_range[$key],
								'mala_mps' => $mala_mps,
								'mala_ant' => $mala_ant,
								'comment' => $comment,
								'reported_by' => $reported_by,
								'specimen' => $specimen,
								'approved_by' => $approved_by,
								'report_date' => $report_date,
								'v_date' => $v_date,
								'group_id' => $group_id
								);
								$this->db->insert('test_results',$data);
								//$test_result_id = $this->db->insert_id();
								//$this->session->set_userdata('test_result_id',$test_result_id);
								//$this->session->set_userdata('report_date',$report_date);
								//$this->session->set_userdata('v_date',$v_date);
								//$this->session->set_userdata('group_id',$group_id);
								//$this->session->set_userdata('client_id',$client_id);
								
								$page_data['done'] = 1;
  								$this->db->where('group_id',$group_id);
								$this->db->where('client_id',$client_id);
								$this->db->update('requested_tests',$page_data);//update table requests
						}
					//$data['module_id']   = 'patients';
					//$data['page_title']  = 'View Report';
					//$data['description']  = 'Add New Parameter';
					//$data['content']     = 'Patients/report';
					//echo Modules::run('template/admin_v',$data);
				redirect('Patients/report/'.$client_id.'/'.$group_id.'/'.$v_date);      
		}

		function test_result_update(){

				$test_parameter_id = $this->input->post('test_parameter_id');
				foreach($test_parameter_id as $key => $a){		
					$test_result = $this->input->post('test_result',true);
					$units = $this->input->post('units',true);
					$group_id = $this->input->post('group_id',true);
					$ref_range = $this->input->post('ref_range',true);
					$test_result = $this->input->post('test_result',true);
					$reported_by= $this->input->post('reported_by',true);
					$approved_by= $this->input->post('approved_by',true);
					$comment = $this->input->post('comment',true);
					$test_id  = $this->input->post('test_id',true);
					$v_date = $this->input->post('v_date',TRUE);
					$client_id  = $this->input->post('client_id',true);
					$data = array(
								'test_parameter_id' => $a,
								'test_result' => $test_result[$key],
								'test_id' => $test_id[$key],
								'client_id' => $client_id,
								'units' => $units[$key],
								'ref_range' => $ref_range[$key],
								'comment' => $comment,
								'reported_by' => $reported_by,
								'approved_by' => $approved_by,
								'v_date' => $v_date,
								'group_id' => $group_id
								);
								
								$this->db->where('test_parameter_id',$a);
								$this->db->where('test_id',$test_id[$key]);
								$this->db->where('client_id',$client_id);
							    $this->db->where('v_date',$v_date);
								$this->db->update('test_results',$data);
								
				}
				redirect('Patients/report/'.$client_id.'/'.$group_id.'/'.$v_date);      
		}
		
		function report($param='',$param1='',$param2=''){
			$data['client_id'] = $param;
			$data['visit_date'] = $param2;	
			//$data['test_id']  = $param;	
			$data['group_id']  = $param1;		
			$data['page_title']  = 'View Report';
			$data['description']  = 'Medical Report';
			$data['content']     = 'Patients/report';
			echo Modules::run('template/admin_v',$data);
		}
		
		function view_report($param1='',$param2='',$param3='',$param4=''){
			
			$data['test_id']  = $param1;
			$data['client_id'] = $param2;
		    $data['group_id'] = $param3;
			$data['visit_date'] = $param4;
			//$data['report_date'] = $report_date;
			$data['module_id']   = 'patients';
			$data['page_title']  = 'View Report';
			$data['description']  = 'Medical Report';
			$data['content']     = 'Patients/view_report';
			echo Modules::run('template/admin_v',$data);

		}
		
		function add_misc_result(){
			
				$test_result = $this->input->post('test_result');
				$test_parameter = $this->input->post('test_parameter');
					$test_id  = $this->input->post('test_id');
					$client_id  = $this->input->post('client_id');
				    $group_id  = $this->input->post('group_id');
				    $visit_date  = $this->input->post('visit_date');
				foreach($test_result as $key => $a){		
							$data = array(
								'test_result' => $a,
								'test_parameter' => $test_parameter,
								'test_id' => $test_id,
								'client_id' => $client_id,
							    'visit_date' => $visit_date,
								'group_id' => $group_id
								);
								
							    $this->db->insert('misc',$data);
								
								$data0['done'] = 1;
								$this->db->where('test_id',$test_id);
								$this->db->where('client_id',$client_id);
							    $this->db->where('visit_date',$visit_date);
								$this->db->update('requested_tests',$data0);//update table requests
								
				       }
				    redirect('Patients/misc_report/'.$visit_date.'/'.$client_id.'/'.$test_id);

				return;
		}

		function misc_report($param='',$param2='',$param3=''){
				
			
		$misc = $this->db->get_where('misc',array('visit_date' =>$param,'client_id'=>$param2,'test_id'=>$param3))->result_array();
						foreach ($misc as $row) {
							$test_parameter = $row['test_parameter'];
							$test_id  = $row['test_id'];
							$client_id  = $row['client_id'];
							$group_id  = $row['group_id'];
						}

						
			$data0['comment'] = $this->input->post('comment');
			$data0['reported_by'] = $this->input->post('reported_by');
			$data0['approved_by'] =$this->input->post('approved_by');
			
			$this->db->where('visit_date',$param);
			$this->db->where('client_id',$param2);
			$this->db->update('misc',$data0);
			
			$data['client_id'] = $param2;	
			$data['test_id']  = $param3;		
			$data['visit_date']  = $param;	
		    $data['page_title']  = 'Medical Report';
		    $data['description']  = 'Medical Report';
		    $data['content']     = 'Patients/misc_report';
			echo Modules::run('template/admin_v',$data);
		}
		function edit_results($param='',$param1='',$param2='',$param3=''){
				  
			$data['zina']= $this->db->select('*')->from('tests')
			->join('requested_tests','requested_tests.test_id=tests.test_id')
			->join('group','group.group_id=tests.group_id')
		    ->where('tests.group_id',$param2)
			->where('requested_tests.client_id',$param1)
			->where('visit_date',$param)
			->limit(1)
			->get()->result_array();
		
			$data['group_id']  = $param2;
			//$data['test_id']  = $param3;
	        $data['client_id'] = $param1;		
			$data['visit_date']  = $param;	
		    $data['page_title']  = 'Edit Results';
		    $data['description']  = 'Edit Results';
		    $data['content']     = 'Patients/edit_results';
			echo Modules::run('template/admin_v',$data);

		}


		function dello($id){
			$this->db->where('misc_id',$id);
			$this->db->delete('misc');
			return;
		}
		
		
		function get_data_from_post(){
			$data['name']     = $this->input->post('name');
			$data['phone']    = $this->input->post('phone');
			$data['address']    = $this->input->post('address');
			$data['email']    = $this->input->post('email');
			$data['gender']    = $this->input->post('gender');
			$data['age']    = $this->input->post('age');
			$data['disorder']    = $this->input->post('disorder');
			$data['date_added']    = date('Y-m-d H:m:s');
			$data['added_by']    = $this->session->userdata('user_id');
			return $data;
		}

		function get_data_from_db($update_id){
			$query = $this->db->get_where('clients',array('client_id' =>$update_id))->result_array();
			foreach ($query as $row) {
			$data['name']     = $row['name'];
			$data['email']    = $row['email'];
			$data['address']    = $row['address'];
			$data['phone']    = $row['phone'];
			$data['gender']    = $row['gender'];
			$data['age']    = $row['age'];
			$data['disorder']    = $row['disorder'];
			}
			return $data;
		}

		function submit(){
			$data = $this->get_data_from_post();
			$update_id = $this->input->post('update_id', TRUE);
			if (is_numeric($update_id)){
					$this->db->where('client_id',$update_id);
					$this->db->update('clients',$data);
				}
				else{
					$this->db->insert('clients',$data);
				}
			$this->session->set_flashdata('message','Patient saved successfully');
			redirect('Patients');
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

			$data['module_id']   = 'patients';
		    $data['page_title']  = 'New Patients';
		    $data['description']  = 'Add New Patient';
		    $data['content']     = 'Patients/new_patient';
			echo Modules::run('template/admin_v',$data);
		}
		
		
			function view($param=''){
			$data['module_id']   = 'patients';
			$data['client_id']   =$param;
		    $data['page_title']  = 'Patient Info';
		    $data['description']  = 'Patient Details';
		    $data['content']     = 'Patients/patient_info';
			echo Modules::run('template/admin_v',$data);
		}

			function delete(){
			$client_id = $this->input->post('client_id');
			foreach($client_id as $value){
				$data['deleted'] = 1;
				$this->db->where('client_id',$value);
           		$this->db->update('clients',$data);
        	}
        	//redirect('Reminders');
		}
			
}
