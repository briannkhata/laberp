<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Categories extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
				
	    function get_categories(){
		    $this->db->where('deleted',0);
			$this->db->order_by('category_id','DESC');
			$query = $this->db->get('category');
			return $query->result_array();
		}
	
 
}

