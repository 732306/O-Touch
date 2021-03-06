<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("tienda_model");
	}

	public function index()
	{	
		$categorias = $this->tienda_model->cargarCategorias();
		$this->session->set_userdata('titulos', $categorias);

		$this->load->model("shop_model");
		$data["articulos"] = $this->shop_model->destacados();

		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/index',$data);
		$this->load->view('tienda/layouts/footer');
	}
}