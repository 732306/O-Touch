<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	protected $access = "gestor";
	//protected $access = array("gestor", "comercial");

	public function __construct() {
		parent::__construct();
		$this->load->model("dashboard_model");
	}

	public function index()
	{	
		$data = array(
			'usuarios' => $this->dashboard_model->cargarUsuarios()
		);
		$this->load->view('dashboard/admin/dashboard', $data);
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('usuario');
	}
}
