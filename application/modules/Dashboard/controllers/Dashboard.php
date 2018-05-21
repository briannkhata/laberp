<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends MY_Controller {

		function __construct(){
			parent::__construct();

		}

	  	function index(){
	  		if(!$this->M_Login->is_logged_in())
	  	 	redirect(base_url());
			$data['page_title']  = 'Dashboard';
			$data['description'] = 'Statistics & Reports';
		    $data['content']     = 'Dashboard/dashboard';
			echo Modules::run('template/admin_v',$data);
		}
	
}
