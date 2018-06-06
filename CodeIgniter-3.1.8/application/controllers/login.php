<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('usuario_model');
	}

	public function index()
	{
		$this->load->view('login/headers');
		$this->load->view('login/home');

	}


	function usuarios(){
		$data['segmento'] = $this->uri->segment(3);
		$this->load->view('login/headers');
		if(!$data['segmento']){
			$data['usuarios'] = $this->usuario_model->obtenerUsuarios();
		}
		else{
			$data['usuarios'] = $this->usuario_model->obtenerUsuario($data['segmento']);
		}
		$this->load->view('login/usuarios',$data);
	}

	function nuevo(){
		$this->load->view('login/headers');
		$this->load->view('login/formulario');
	}

	function recibirDatos(){
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo'),
			'password' => $this->input->post('password')

		);
		$this->usuario_model->crearUsuario($data);
		$this->load->view('login/headers');
		$this->load->view('welcome_message');
	}

	function editar(){
		$data['id'] = $this->uri->segment(3);
		$data['usuarios'] = $this->usuario_model->obtenerUsuario($data['id']);
		$this->load->view('login/headers');
		$this->load->view('login/editar',$data);
	}

	function borrar(){
		$id = $this->uri->segment(3);
		$this->usuario_model->eliminarUsuario($id);
		redirect(base_url());

	}
	function actualizar(){

		$data = array(
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo'),
			'password' => $this->input->post('password')

		);
		$this->usuario_model->actualizarUsuario($this->uri->segment(3),$data);
		redirect(base_url());
	}


}
