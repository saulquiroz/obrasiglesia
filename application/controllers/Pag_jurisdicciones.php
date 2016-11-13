<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pag_jurisdicciones extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('jurisdiccion_model');
    $this->load->view('inicio/header1');
  }

  function index()
  {

  }
  function pando(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(17);
    $this->load->view('jurisdiccion/pagina/pag_pando',$data);
    $this->load->view('inicio/footer1');
  }
  function beni(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(14);
    $this->load->view('jurisdiccion/pagina/pag_beni',$data);
     $this->load->view('inicio/footer1');
  }
  function reyes(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(18);
    $this->load->view('jurisdiccion/pagina/pag_reyes',$data);
     $this->load->view('inicio/footer1');
  }
  function coroico(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(6);
    $this->load->view('jurisdiccion/pagina/pag_coroico',$data);
     $this->load->view('inicio/footer1');
  }
  function santacruz(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(3);
    $this->load->view('jurisdiccion/pagina/pag_santacruz',$data);
     $this->load->view('inicio/footer1');
  }
  ##################################3
  function cochabamba(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(1);
    $this->load->view('jurisdiccion/pagina/pag_cochabamba',$data);
     $this->load->view('inicio/footer1');
  }
  function lapaz(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(2);
    $this->load->view('jurisdiccion/pagina/pag_lapaz',$data);
     $this->load->view('inicio/footer1');
  }
  function sucre(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(4);
    $this->load->view('jurisdiccion/pagina/pag_sucre',$data);
     $this->load->view('inicio/footer1');
  }
  function catrense(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(5);
    $this->load->view('jurisdiccion/pagina/pag_castrense',$data);
     $this->load->view('inicio/footer1');
  }
  function elalto(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(7);
    $this->load->view('jurisdiccion/pagina/pag_elalto',$data);
     $this->load->view('inicio/footer1');
  }
  function oruro(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(8);
    $this->load->view('jurisdiccion/pagina/pag_oruro',$data);
     $this->load->view('inicio/footer1');
  }
  function potosi(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(9);
    $this->load->view('jurisdiccion/pagina/pag_potosi',$data);
     $this->load->view('inicio/footer1');
  }
  function sanignacio(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(10);
    $this->load->view('jurisdiccion/pagina/pag_sanignacion',$data);
     $this->load->view('inicio/footer1');
  }
  function tarija(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(11);
  $this->load->view('jurisdiccion/pagina/pag_tarija',$data);
     $this->load->view('inicio/footer1');
  }
  function aiquile(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(12);
    $this->load->view('jurisdiccion/pagina/pag_aiquile',$data);
     $this->load->view('inicio/footer1');
  }
  function corocoro(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(13);
    $this->load->view('jurisdiccion/pagina/pag_corocoro',$data);
     $this->load->view('inicio/footer1');
  }
  function camiri(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(15);
    $this->load->view('jurisdiccion/pagina/pag_camiri',$data);
     $this->load->view('inicio/footer1');
  }
  function chavez(){
    $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(16);
    $this->load->view('jurisdiccion/pagina/pag_chavez',$data);
     $this->load->view('inicio/footer1');
  }


}
