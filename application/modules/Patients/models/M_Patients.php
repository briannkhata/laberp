<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Patients extends CI_Model {
		function __construct()
		{
			parent::__construct();
		}

		 function get_today_patients(){
			//$this->db->where('deleted',0);
			//$this->db->order_by('client_id','DESC');
			//$query = $this->db->get('clients');
			//return $query->result_array();
			$this->db->select('*');
			$this->db->from('clients');
			$this->db->join('requested_tests','requested_tests.client_id = clients.client_id');
			$this->db->where('day',date('d'));
			$this->db->where('month',date('F'));
			$this->db->where('year',date('Y'));
			$this->db->where('deleted',0);
			$this->db->order_by('clients.client_id','DESC');
			$this->db->group_by('clients.client_id');
			return $client= $this->db->get()->result_array();
		}
		function get_all_patients(){
			$this->db->select('*');
			$this->db->from('clients');
			//$this->db->join('requested_tests','requested_tests.client_id = clients.client_id');
			//$this->db->where('day',date('d'));
			//$this->db->where('month',date('F'));
			//$this->db->where('year',date('Y'));
			$this->db->where('deleted',0);
			$this->db->order_by('clients.client_id','DESC');
			$this->db->group_by('clients.client_id');
			return $client= $this->db->get()->result_array();
		}
	
	}
