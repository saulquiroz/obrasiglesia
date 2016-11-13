<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editar extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('usuario_model');
  }

  function index()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->usuario_model->getUsuarios();
      $this->load->view('templates/header',$data);
      $this->load->view('user/editar',$data);
      $this->load->view('templates/footer');
  }

}
