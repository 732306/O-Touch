<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{	
		$this->load->model("shop_model");
		$data["articulo"] = $this->shop_model->fetch_all();
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/shop', $data);
		//$this->load->view('tienda/shop');
		$this->load->view('tienda/layouts/footer');
	}

	public function category($id_categoria = NULL)
	{	
		$this->load->model("shop_model");
		$data["articulo"] = $this->shop_model->fetch_cat($id_categoria);
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/shop', $data);
		//$this->load->view('tienda/shop');
		$this->load->view('tienda/layouts/footer');
	}

}