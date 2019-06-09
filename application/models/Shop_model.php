<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

	function fetch_all() {
		$query = $this->db->get("articulo");
		return $query->result();
	}

	function fetch_cat($idCat){
		$condition = "id_cat =" . "'" . $idCat . "'";
		$this->db->select('*');
		$this->db->from('articulo');
		$this->db->where($condition);
		$query = $this->db->get();

		return $query->result();
	}
}