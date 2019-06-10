<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("account_model");
		$this->load->model("login_model");
		$this->load->model("pedido_model");
	}

	public function index()
	{
		$this->load->model("account_model");
		$this->load->model("login_model");

		if ($this->session->logged_in == TRUE) {
			
			$data['usuario'] = $this->login_model->read_user_information_id($this->session->id_usu)[0];

			$data['direcciones'] = $this->account_model->cargarDirecciones($this->session->id_usu);

			$this->load->view('tienda/layouts/header');
			$this->load->view('tienda/layouts/menu');
			$this->load->view('tienda/checkout',$data);
			$this->load->view('tienda/layouts/footer');
		}

		else {
			redirect('Cart','refresh');
		}

		//Cargar datos del usuario
	}

	public function finalizar(){

		$data = array(
				'id_usu' => $this->session->id_usu,
			);

		$idPedido = $this->pedido_model->add_pedido($data);

		foreach ($this->cart->contents() as $item) {
			$datos = array(
				'id_usu' => $this->session->id_usu,
				'num_ped' =>$idPedido,
				'cod_art' =>$item['id'],
				'cantidad' =>$item['qty'],
				'precio' => ($item['price'] * $item['qty'])
			);
			$this->pedido_model->add_forma($datos);			
		}

				$this->cart->destroy();

				$ok_message = 'Pedido Realizado Correctamente!!!';
				$this->session->set_flashdata('pedido_ok', $ok_message);
				redirect('tienda','refresh');

	}	
}