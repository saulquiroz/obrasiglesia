<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lista_obispo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('usuario_model');
    $this->load->model('obispo_model');
  }

  function index()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obispo_model->getObispo();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obispo'] = $this->obispo_model->datoObispo($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obispo/lista_obispo',$data);
      $this->load->view('templates/footer');
  }

}
