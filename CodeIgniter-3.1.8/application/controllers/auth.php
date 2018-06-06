<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('usuario_model');
	}

	function index(){
		$this->load->view('login/headers');
		$this->load->view('login/form');
	}
	function logIn(){
//		$data ['params'] = explode("/", $_SERVER["QUERY_STRING"]);
//		$data['email'] = array();
		$cadenaCompleta = explode("&", $_SERVER["QUERY_STRING"]);
		$cadenasimple  = explode("=", $cadenaCompleta[0]);
		$cadenaCorreo = $cadenasimple[1];
		$cadenasimple  = explode("=", $cadenaCompleta[1]);
		$cadenaPassword = $cadenasimple[1];
		$data = array(
			'correo' => $cadenaCorreo,
			'password' => $cadenaPassword,
		);
		$data['usuarios'] = $this->usuario_model->loguearse($data);
		$this->load->view('login/home',$data);
	}
}
