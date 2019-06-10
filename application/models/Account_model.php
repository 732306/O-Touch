<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function cargarPedidos($data) {
		$this->db->select('*');
		$this->db->from('pedido p, forma f, usuario u');
		$this->db->where("f.num_ped = p.num_ped AND p.id_usu = u.id AND f.id_usu = '" 
			. $data . "'");
		$this->db->order_by('p.fecha');
		$pedidos = $this->db->get();
		if ($pedidos->num_rows() > 0) {
			return $pedidos->result();
		} else {
			return false;
		}
	}

	public function address_insert($data) {
		$this->db->insert('dir_usuario', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		} else return false;
	}

	public function address_delete($id) {
		$this->db->delete('dir_usuario', $id); 
	}

	public function cargarDirecciones($data){
		$condition = "id_usu =" . "'" . $data . "'";
		$this->db->select('*');
		$this->db->from('dir_usuario');
		$this->db->where($condition);
		$this->db->order_by('principal DESC');
		$direcciones = $this->db->get();
		if ($direcciones->num_rows() > 0) {
			return $direcciones->result();
		} else {
			return false;
		}
	}
}