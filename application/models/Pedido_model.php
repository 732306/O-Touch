<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedido_model extends CI_Model {

	public function add_pedido($data) {
		$this->db->insert('pedido', $data);
		$insert_id =  $this->db->insert_id();
		if ($this->db->affected_rows() > 0) {
			return $insert_id;
		} else return false;
	}

	public function add_forma($data) {
		$this->db->insert('forma', $data);
		$insert_id =  $this->db->insert_id();
		if ($this->db->affected_rows() > 0) {
			return $insert_id;
		} else return false;
	}
}