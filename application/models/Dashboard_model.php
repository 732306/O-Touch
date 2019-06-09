<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->model("dashboard_model");
	}

	public function cargarUsuarios() {
		$this->db->select('*');
		$this->db->from('usuario');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
}