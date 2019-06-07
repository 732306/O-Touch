<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop_model extends CI_Model {

	function fetch_all() {
		$query = $this->db->get("articulo");
		return $query->result();
	}
}