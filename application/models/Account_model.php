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

	public function address_get($idDireccion) {
		$condition = "id_dir =" . "'" . $idDireccion . "'";
		$this->db->select('*');
		$this->db->from('dir_usuario');
		$this->db->where($condition);
		$direcciones = $this->db->get();
		if ($direcciones->num_rows() == 1) {
			return $direcciones->result();
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

	public function address_update($parametros,$id) {
		$query=$this->db->query("update dir_usuario SET calle='".$parametros['calle']."',num='".$parametros['num']."',puerta='".$parametros['puerta']."', cp='".$parametros['cp']."',ciudad='".$parametros['ciudad']."',provincia='".$parametros['provincia']."', pais='".$parametros['pais']."' where id_dir='".$id."'");

  		return 1;
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

	public function profile_update($parametros, $id){
  		$query=$this->db->query("update usuario SET nombre='".$parametros['nombre']."',apellidos='".$parametros['apellidos']."',genero='".$parametros['genero']."', correo='".$parametros['correo']."',nif='".$parametros['nif']."' where id='".$id."'");

  		return 1;
	}

	public function list_users(){
  		$r = $this->db->get("usuario");
  		return $r->result();
 	}
}