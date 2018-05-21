<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Clinics extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		
	    function get_clinics(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('clinic_id','DESC');
			$query = $this->db->get('clinics');
			return $query->result_array();
		}
	
 
}

