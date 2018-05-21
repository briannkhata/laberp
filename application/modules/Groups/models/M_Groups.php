<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Groups extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_groups(){
			$this->db->where('deleted',0);
			$this->db->order_by('group_id','DESC');
			$query = $this->db->get('group');
			return $query->result_array();
		}
 
}

