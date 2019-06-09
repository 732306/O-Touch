<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("account_model");
	}

	public function index(){
		if ($this->session->logged_in == TRUE) {		
			$data = array(
				'pedidos' => $this->account_model->cargarPedidos($this->session->id_usu)
			);
			$this->load->view('tienda/layouts/header');
			$this->load->view('tienda/layouts/menu');
			$this->load->view('tienda/account', $data);
			$this->load->view('tienda/layouts/footer');
		}

		else {
			redirect('tienda','refresh');
		}
	}

	public function profile(){	
		if ($this->session->logged_in == TRUE) {
			$this->load->view('tienda/layouts/header');
			$this->load->view('tienda/layouts/menu');
			$this->load->view('tienda/account/profile');
			$this->load->view('tienda/layouts/footer');
		}

		else {
			redirect('tienda','refresh');
		}

	}	

	public function addresses(){
		if ($this->session->logged_in == TRUE) {
			$this->load->model('account_model');
			$data = array(
				'direcciones' => $this->account_model->cargarDirecciones($this->session->id_usu)
			);
			$this->load->view('tienda/layouts/header');
			$this->load->view('tienda/layouts/menu');
			$this->load->view('tienda/account/addresses', $data);
			$this->load->view('tienda/layouts/footer');

		}
		else {
			redirect('tienda','refresh');
		}
	}

	public function addAddress() {
		$this->load->model('account_model');

		$data = array(
				'id_usu' => $this->session->id_usu,
				'calle' => strtolower($this->input->post('inputCalle')),
				'num' => $this->input->post('inputNumero'),
				'puerta' => strtolower($this->input->post('inputPuerta')),
				'ciudad' => strtolower($this->input->post('inputCiudad')),
				'provincia' => strtolower($this->input->post('inputProvincia')),
				'cp' => $this->input->post('inputCP'),
				'pais' => $this->input->post('listaPais'),
				'principal' => $this->input->post('inputPrincipal')
			);
		$result = $this->account_model->address_insert($data);
		if ($result == false) {
			$error_message = 'No se ha podido añadir la dirección.';
			$this->session->set_flashdata('error_message', $error_message);
			redirect('account/addresses','refresh');
		} else {
			redirect('account/addresses','refresh');
		}
	}
}