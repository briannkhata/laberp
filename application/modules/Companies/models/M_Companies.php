<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Companies extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_companies(){
		    $this->db->where('deleted',0);
			$this->db->order_by('company_id','DESC');
			$query = $this->db->get('company');
			return $query->result_array();
		}
	
 
}

