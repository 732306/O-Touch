<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda_model extends CI_Model {

	public function cargarCategorias() {
		$categorias = $this->db->query("SELECT * FROM categoria 
			where id in (select DISTINCT id_cat from articulo)");
		if ($categorias->num_rows() > 0) {
			return $categorias->result();
		} else {
			return false;
		}
	}
}