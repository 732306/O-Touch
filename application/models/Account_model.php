<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function cargarPedidos($data) {
		$this->db->select('u.nombre, u.apellidos, p.num_ped, p.fecha, p.estado, f.precio');
		$this->db->from('Pedido p, Forma f, Usuario u');
		$this->db->where("f.num_ped = p.num_ped AND p.id_usu = u.id AND f.id_usu = '" . $data['id_usu'] . "'");
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

	public function cargarDirecciones($data){
		$condition = "id_usu =" . "'" . $data['id_usu'] . "'";
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