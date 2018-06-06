<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function loguearse($data){
		$this->db->select('nombre','correo','password');
		$this->db->where('correo', $data['correo']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('usuario');
		if ($query->num_rows() > 0)return $query;
		else return false;

	}

	function crearUsuario($data){
		$this->db->insert('usuario',
			array(
				'nombre'=>$data['nombre'],
				'correo'=>$data['correo'],
				'password'=>$data['password']
			)
		);
	}

	function obtenerUsuarios(){
		$query = $this->db->get('usuario');
		if($query->num_rows() >0) return $query;
		else return false;
	}

	function obtenerUsuario($id){
		$this->db->where('idUsuario',$id);
		$query = $this->db->get('usuario');
		if($query->num_rows() >0) return $query;
		else return false;
	}

	function actualizarUsuario($id,$data){
		$datos = array(
			'nombre'=>$data['nombre'],
			'correo'=>$data['correo'],
			'password'=>$data['password']
		);
		$this->db->where('idUsuario',$id);
		$query = $this->db->update('usuario',$datos);
	}

	function eliminarUsuario($id){
		$this->db->delete('usuario',array('idUsuario'=>$id));
	}
}
?>
