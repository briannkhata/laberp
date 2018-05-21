<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_Sales extends CI_Model {
	
		function __construct(){
			parent::__construct();
		}
		
	    function get_sales()
		{
		    $this->db->where('sales.deleted',0);
		    $this->db->order_by('sale_time','DESC');
		    $this->db->join('clients','clients.client_id = sales.client_id');
			$query = $this->db->get('sales');
			return $query->result_array();
		}
	
 
}

