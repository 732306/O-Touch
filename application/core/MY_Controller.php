<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $access = "*";

	public function __construct() {
		parent::__construct();

		$this->login_check();
	}

	public function login_check()
	{	
		if ($this->access != "*") {
			if (!$this->session->userdata("logged_in")) {
				redirect('login','refresh');
			}
			if (! $this->permission_check()) {
				die('<link href="'.base_url().'assets/css/sb-admin-2.min.css" rel="stylesheet">
					<div class="text-center">
			            <div class="error mx-auto" data-text="401">401</div>
			            <p class="lead text-gray-800 mb-5">Acceso denegado.</p>
			            <p class="text-gray-500 mb-0">Parece que no tienes los permisos adecuados...</p>
			            <a href="'.base_url().'">&larr; Volver al inicio.</a>
			        </div>
          ');
			}
		}
	}

	function permission_check() {
		if ($this->access == "@") {
			return true;
		} 
		else {
			$access = is_array($this->access) ? $this->access : explode(",", $this->access);
			if (in_array($this->session->userdata("rol"), array_map("trim", $access))) {
				return true;
			}
			return false;
		}
	}
}