<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pag_obispo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('obispo_model');
  }

  function index()
  {

  }
  function obispos_bolivia(){
    if($this->obispo_model->obisposBolivia()){
      $data['resultadoObispoTipo'] = $this->obispo_model->obisposBolivia();
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obisposBolivia();
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  function obispo_cardenal(){
    $tipo = 1;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  function obispo_apostolico(){
    $tipo = 2;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }

  function obispo_titular(){
    $tipo = 3;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  function obispo_auxiliar(){
    $tipo = 5;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  function obispo_emeritos(){
    $tipo = 6;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  function obispo_enlacasadelpadre(){
    $tipo = 7;
    if($this->obispo_model->obispoTipo($tipo)){
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
    else{
      $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
      $this->load->view('inicio/header1');
      $this->load->view('obispo/pagina/pag_obispos',$data);
      $this->load->view('inicio/footer1');
    }
  }
  public function visualizar(){
       if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
           $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
           redirect(base_url());
       }
  # $this->data['custom_error'] = '';
   #$ci = $this->session->userdata('ci');
   #$data['usuario'] = $this->usuario_model->datoUsuario($ci);
   $data['result'] = $this->obispo_model->getById($this->uri->segment(3));
   $this->load->view('inicio/header1',$data);
   $this->load->view('obispo/pagina/pag_perfilobispo',$data);
   $this->load->view('inicio/footer1');

   }



}
