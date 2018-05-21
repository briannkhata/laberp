<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class M_New_test extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
	    function get_companytests(){
		    $this->db->where('ctest.deleted',0);
			$this->db->order_by('ctest_id','DESC');
		    $this->db->join('company','ctest.company_id = company.company_id');
			$query = $this->db->get('ctest');
			return $query->result_array();
		}
		function gett_string($length = 5){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
 
}

