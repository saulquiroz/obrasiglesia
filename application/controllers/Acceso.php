<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');
  }

  function index()
  {
    $usuario = $this->security->xss_clean(strip_tags($this->input->post('username')));
    $password = $this->security->xss_clean(strip_tags($this->input->post('password')));
    if (!$this->usuario_model->login($usuario,$password)==FALSE){
        $tipo = $this->session->userdata('tipo');
          #if ($tipo == 'administrador') {
            redirect('inicio');
        #  }
        }
        else
        {
          redirect('login#error');
        }
  }

}
