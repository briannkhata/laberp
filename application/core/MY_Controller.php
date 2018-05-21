<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends MX_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Tests/M_Tests');
			$this->load->model('Categories/M_Categories');
			$this->load->model('Parameters/M_Parameters');
			$this->load->model('Company/M_Company');
			$this->load->model('Patients/M_Patients');
			$this->load->model('Staff/M_Staff');
			$this->load->model('Groups/M_Groups');
			$this->load->model('Specimens/M_Specimens');
			$this->load->model('Clinics/M_Clinics');
			$this->load->model('Login/M_Login');
			$this->load->model('User_type/M_User_type');
			$this->load->model('Companies/M_Companies');
			$this->load->model('Company_tests/M_Company_tests');
			$this->load->model('Comp_results/M_Comp_results');
			$this->load->model('New_test/M_New_test');
			$this->load->model('Sales/M_Sales');
		}

	 
}
