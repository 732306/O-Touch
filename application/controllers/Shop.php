<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{	
		$this->load->view('tienda/layouts/header');
		$this->load->view('tienda/layouts/menu');
		$this->load->view('tienda/shop');
		$this->load->view('tienda/layouts/footer');
	}	
}