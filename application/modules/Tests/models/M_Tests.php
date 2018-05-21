<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Tests extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
		 function get_tests(){
		   $this->db->where('tests.deleted',0);
		   $this->db->order_by('test_id','DESC');
		   $this->db->join('group','tests.group_id = group.group_id');
		   $query = $this->db->get('tests');
		   return $query->result_array();
		}

		
}

