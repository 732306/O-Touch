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

	function destacados(){
		$this->db->select('*');
		$this->db->from('articulo');
		$this->db->order_by('fecha_publicacion');
		$this->db->limit(6);
		$query = $this->db->get();

		return $query->result();
	}

	function product($idProduct){
		$condition = "a.cod_art =" . "'" . $idProduct . "' and c.id = a.id_cat";
		$this->db->select('*');
		$this->db->from('articulo a, categoria c');
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} 
		else {
			return false;
		}
	}

	function category($idCategory){
		$condition = "id =" . "'" . $idCategory . "'";
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where($condition);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			return $query->result();
		} 
		else {
			return false;
		}
	}
}