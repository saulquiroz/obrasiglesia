<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->model('usuario_model');
		$this->load->model('dashboard_model');

	}
	public function index()
	{
		if (!$this->session->userdata('usuario')){
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
			}
 	  	 else{
		$ci = $this->session->userdata('ci');
		$data['usuario'] = $this->usuario_model->datoUsuario($ci);
		$data['total'] = $this->usuario_model->getCantidad();
		$data['cantidadObras'] = $this->usuario_model->cantidadObrasJurisdiccion();
    	$this->load->view('templates/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
		}
	}

	function cantidadobras(){
		$cantidadObras[] = $this->usuario_model->cantidadObrasJurisdiccion();
		$json_string = json_encode($cantidadObras);
		return $json_string;

	}


}
