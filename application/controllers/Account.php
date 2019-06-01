<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("account_model");
	}

	public function index()
	{	
		$data = array(
			'pedidos' => $this->account_model->cargarPedidos($this->session->id_usu)
		);
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/account', $data);
		$this->load->view('tienda/layouts/footer');
	}

	public function profile()
	{	
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/account/profile');
		$this->load->view('tienda/layouts/footer');
	}	

	public function addresses()
	{	
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/account/addresses');
		$this->load->view('tienda/layouts/footer');
	}

	public function orders()
	{	
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/account/orders');
		$this->load->view('tienda/layouts/footer');
	}
}