<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{	
		$this->load->view('dashboard/layouts/header');
		$this->load->view('dashboard/layouts/aside');
		$this->load->view('dashboard/admin/dashboard');
		$this->load->view('dashboard/layouts/footer');
	}
}
