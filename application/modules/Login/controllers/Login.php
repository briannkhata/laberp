<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller {

		function __construct(){
			parent::__construct();


		}

		function index(){
				if($this->M_Login->is_logged_in())
				{
					redirect('Dashboard');
				}
				else
				{
						
					if($this->form_validation->run() == FALSE)
					{
						$this->load->view('login');
					}
					else
					{
						redirect('Dashboard');
					}
				}
			}

		function signin(){   		

			$username	=	$this->input->post('username');
		    $password	=	MD5($this->input->post('password'));		  
			$user      =   $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password' AND deleted='0'");
			$row = $user->row();
				if (isset($row)){	
					$user_id =	$row->user_id;
					$name	=	$row->name;
					$photo	=	$row->photo;
					$user_type	=	$row->user_type;
					$this->session->set_userdata('user_login', '1');
					$this->session->set_userdata('user_id',$user_id);
					$this->session->set_userdata('name',$name);
					$this->session->set_userdata('photo',$photo);
					$this->session->set_userdata('user_type',$user_type);
					redirect('dashboard');
				}else{
				$this->session->set_flashdata('message','Invalid Username or Password');
				redirect('login');
		    }
	}

	function logout(){
		$this->M_Login->logout();
	}

	function syncdb(){
	$old = $this->load->database('labcare', TRUE); // the TRUE paramater tells CI that you'd like to return the database object.
	$from_old = $old->get('clients')->result_array();
		foreach ($from_old as $row) {
		    $data['client_id'] = $row['client_id'];
			$data['visit_date'] = $row['visit_date'];
		    $data['doctor_name'] = $row['doctor_name'];
		    $data['request_date'] = $row['request_date'];	
		    $data['clinic_id'] = $row['clinic_id'];		
		    $data['pay_mode'] = $row['pay_mode'];
		}
	}
	
		
		
	
}
