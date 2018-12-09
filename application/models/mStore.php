<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mStore extends CI_Model {

	function list_category()
	{
		$query = $this->db->query('SELECT * FROM tbl_product_category');
		return $query->result();
	}
	function list_movie($limit,$start){
		$query = $this->db->get('tbl_product', $limit, $start);
		return $query->result();
	}
	function show_movie($limit = 999, $start = 0){
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();

	}
}
?>