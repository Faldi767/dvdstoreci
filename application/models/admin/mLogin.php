<?php
class mLogin extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get($email)
	{	
		$this->db->where('customer_email',$email);
		$query = $this->db->get('tbl_customer');
		return $query->row();		
	}
	
}