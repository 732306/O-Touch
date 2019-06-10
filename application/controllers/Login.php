<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){
		if ($this->session->logged_in == FALSE) {	
			$this->load->view('tienda/layouts/header');
			$this->load->view('tienda/layouts/menu');
			$this->load->view('tienda/login');
			$this->load->view('tienda/layouts/footer');
		} else {
			redirect('tienda','refresh');
		}
	}	


	public function try_login() {
		$this->load->model('login_model');
		
			$data = array(
				'user_email' => $this->input->post('inputUser'),
				'password' => hash('sha512', $this->input->post('inputPass'))
			);
			$result = $this->login_model->login($data);
			if ($result == TRUE) {
				$user_email = $this->input->post('inputUser');
				$result = $this->login_model->read_user_information($user_email);

				if ($result != false) {
					$this->session->set_userdata('username', $result[0]->nombre);
					$this->session->set_userdata('id_usu', $result[0]->id);
					$this->session->set_userdata('email', $result[0]->correo);
					$this->session->set_userdata('lastname', $result[0]->apellidos);
					$this->session->set_userdata('rol', $result[0]->rol);
					$this->session->set_userdata('logged_in', TRUE);
					redirect('tienda','refresh');
				}
			} 
			else {
				$error_message = 'Usuario o contraseña incorrectos.';
				$this->session->set_flashdata('error_message', $error_message);
				redirect('login','refresh');
			}

	}


	public function new_user_registration() {

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('email_value', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('registration_form');
		} else {
			$data = array(
				'user_name' => $this->input->post('username'),
				'user_email' => $this->input->post('email_value'),
				'user_password' => $this->input->post('password')
			);
			$result = $this->login_database->registration_insert($data);
			if ($result == TRUE) {
				$data['message_display'] = 'Registration Successfully !';
				$this->load->view('login_form', $data);
			}
			 else {
				$data['message_display'] = 'Username already exist!';
				$this->load->view('registration_form', $data);
			}
		}
	}

	public function logout(){

	    $array_items = array('username', 'email', 'lastname', 'id_usu', 'rol');
		$this->session->unset_userdata($array_items);
		$this->session->set_userdata('logged_in', FALSE);
		$this->cart->destroy();

	    redirect('tienda','refresh');
	}

}