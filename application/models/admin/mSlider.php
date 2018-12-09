<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mSlider extends CI_Model {

	function tampil($limit = 999, $start = 0)
	{
		$this->db->select('*');
		$this->db->from('tbl_slider');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}
	function get_slider_list($limit, $start){
		$query = $this->db->get('tbl_slider', $limit, $start);
		return $query;
	}
	function save_slider($data, $tbl){
		$this->db->insert($tbl,$data);
	}
	function edit_slider($where, $data, $tbl){
		$this->db->where($where);
		$this->db->update($tbl, $data);
	}
	function delete_slider($where, $tbl){
		$this->db->where($where);
		$this->db->delete($tbl);
	}
}
?>