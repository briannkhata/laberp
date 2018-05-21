<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Company_tests extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_usertypes(){
		    $this->db->where('deleted',0);
			$query = $this->db->get('user_type');
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

