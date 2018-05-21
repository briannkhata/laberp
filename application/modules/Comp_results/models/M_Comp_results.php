<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class M_Comp_results extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
	    function get_comp_results(){
		    $this->db->where('ctest.deleted',0);
			$this->db->group_by('company.company_id');
			$this->db->join('company','company.company_id = ctest.company_id');
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

