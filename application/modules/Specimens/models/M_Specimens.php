<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Specimens extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_specimen(){
			$this->db->where('deleted',0);
			$this->db->order_by('specimen_id','DESC');
			$query = $this->db->get('specimen');
			return $query->result_array();
		}
 
}

