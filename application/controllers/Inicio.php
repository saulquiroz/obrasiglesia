<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');
  }
	public function index()
	{
		if (!$this->session->userdata('usuario')):
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
    else:
		$ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('inicio');
    $this->load->view('templates/footer');
	endif;
	}
	public function logout()
  {
    $this->session->sess_destroy();
		redirect(base_url(''));
    //return redirect(base_url());
  }
}
