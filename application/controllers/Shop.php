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
		$this->load->view('tienda/layouts/footer');
	}

	public function category($id_categoria = NULL){	
		$this->load->model("shop_model");

		$data["articulo"] = $this->shop_model->fetch_cat($id_categoria);
		$data["categoria"] = $this->shop_model->category($id_categoria)[0];
		
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/shop', $data);
		$this->load->view('tienda/layouts/footer');
	}

	public function product($id_articulo = NULL){
		$this->load->model("shop_model");
		$data["articulo"] = $this->shop_model->product($id_articulo)[0];

		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/product',$data);
		$this->load->view('tienda/layouts/footer');
	}
}