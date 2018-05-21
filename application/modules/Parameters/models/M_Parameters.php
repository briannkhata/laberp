<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Parameters extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
		 function get_parameters(){
		   $this->db->where('test_parameters.deleted',0);
		   $this->db->order_by('test_parameter_id','DESC');
		   $this->db->join('category','test_parameters.category_id = category.category_id');
		   $this->db->join('tests','test_parameters.test_id = tests.test_id');
		   $query = $this->db->get('test_parameters');
		   return $query->result_array();
		}

		
}

