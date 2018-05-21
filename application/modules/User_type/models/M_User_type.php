<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_User_type extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		
	    function get_usertypes()
		{
		    $this->db->where('deleted',0);
			$query = $this->db->get('user_type');
			return $query->result_array();
		}
	
 
}

