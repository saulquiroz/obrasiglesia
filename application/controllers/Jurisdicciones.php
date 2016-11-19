<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurisdicciones extends CI_Controller{

public function __construct()
{
  parent::__construct();
  //Codeigniter : Write Less Do More
    $this->load->model('obras_model');
    $this->load->model('obispo_model');
    $this->load->model('buscar_model');
    $this->load->model('jurisdiccion_model');

}
function index(){
  $ci = $this->session->userdata('ci');
  $data['usuario'] = $this->usuario_model->datoUsuario($ci);
  $this->load->view('inicio/header1');
  $this->load->view('inicio/footer1');
}
function obispo()
{
  $this->form_validation->set_rules('tipo', 'tipo', 'required|trim|xss_clean');
  $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
      if($this->form_validation->run() == false){
        redirect('buscar');
      }
      else{
          $tipo = $this->input->post('tipo');

          if($this->obispo_model->obispoTipo($tipo)){
            $data['resultadoObispoTipo'] = $this->obispo_model->obispoTipo($tipo);
            $this->load->view('buscar/buscar_obispo');
            $this->load->view('buscar/busqueda_obispos',$data);
            $this->load->view('templates/footer');
          }
          else{
              redirect('buscar#error');
          }

      }
}
function jurisdiccion_inicio(){
  //$this->load->view('buscar/buscar_jurisdiccion');
  $this->load->view('inicio/footer1');
}
function jurisdiccion()
{
  $this->form_validation->set_rules('jurisdiccion', 'Jurisdiccion', 'required|trim|xss_clean');
  $this->form_validation->set_message('required', 'El campo no puede ir vacío!');
      if($this->form_validation->run() == false){
        redirect('buscar/jurisdiccion');
        # echo json_encode(array('result'=> false));
      }
      else{
          $jurisdiccion = $this->input->post('jurisdiccion');

          if($this->jurisdiccion_model->datoJurisdiccion($jurisdiccion)){
            $data['resultadoJurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion($jurisdiccion);
            $this->load->view('buscar/buscar_jurisdiccion');
            $this->load->view('buscar/busqueda_jurisdiccion',$data);
            $this->load->view('templates/footer');
          }
          else{
              redirect('buscar/jurisdiccion#error');
          }

      }

}
function obras_inicio(){
  $this->load->view('buscar/buscar_obra');
  $this->load->view('templates/footer');
}
function obras(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect('buscar/obras_inicio');
      # echo json_encode(array('result'=> false));
    }
    else{
      if ($this->input->post('jurisdiccion')!=0) {
          $sql = "WHERE ";
          $jurisdiccion = $this->input->post('jurisdiccion');
          $sql .= "a.cod_jurisdiccion = $jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion AND b.cod_sede = e.cod_sede ";
          if (!is_numeric($this->input->post('ciudad')))
          {
              $ciudad = $this->input->post('ciudad');
              $sql .= "AND a.departamento = '$ciudad' ";
              if ($this->input->post('obra')!=0)
              {
                $obra = $this->input->post('obra');
                $sql .= "AND d.cod_tipoobras = a.cod_tipoobras AND a.cod_tipoobras =$obra";
              }else {
                  $sql .= "AND d.cod_tipoobras = a.cod_tipoobras";
              }
          }
          else {
              if ($this->input->post('obra')!=0)
              {
                $obra = $this->input->post('obra');
                $sql .= "AND d.cod_tipoobras = a.cod_tipoobras AND a.cod_tipoobras =$obra";
              }else {
                $sql .= "AND d.cod_tipoobras = a.cod_tipoobras";
              }
          }
      }
      else
      {
          #$sql=' ';
        if (!is_numeric($this->input->post('ciudad')))
        {
          $sql = "WHERE ";
            $ciudad = $this->input->post('ciudad');
            $sql .= "a.departamento = '$ciudad' AND e.cod_jurisdiccion = a.cod_jurisdiccion AND b.cod_sede = e.cod_sede ";
            if ($this->input->post('obra')!=0) {
              $obra = $this->input->post('obra');
              $sql .= "AND d.cod_tipoobras = a.cod_tipoobras AND a.cod_tipoobras =$obra";
            }
        }
        else
        {
          #   $sql='';
          if ($this->input->post('obra')!=0)
          {
            $sql = "WHERE ";
            $obra = $this->input->post('obra');
            $sql .= "d.cod_tipoobras = a.cod_tipoobras AND a.cod_tipoobras =$obra AND e.cod_jurisdiccion = a.cod_jurisdiccion AND b.cod_sede = e.cod_sede ";
          }
          else
          {
            $sql = "WHERE a.cod_jurisdiccion =  e.cod_jurisdiccion AND a.cod_tipoobras = d.cod_tipoobras";
          }
        }
      }

      if ($this->obras_model->query($sql)) {

        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('buscar/buscar_obra');
        $this->load->view('buscar/busqueda_obra',$data);
        $this->load->view('templates/footer');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('buscar/buscar_obra');
        $this->load->view('buscar/busqueda_obra',$data);
        $this->load->view('templates/footer');

      }
    }
}
function visualizar(){
    if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
        $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
        redirect(base_url());
    }
    $data['result'] = $this->buscar_model->getById($this->uri->segment(3));
    $this->load->view('obras/detalle',$data);
    $this->load->view('templates/footer');
}

function editar()
{
  $this->form_validation->set_rules('tipo', 'tipo', 'required|trim|xss_clean');
  $this->form_validation->set_message('required', 'El campo %s no puede ir vacío!');
      if($this->form_validation->run() == false){
        redirect('buscar');
        # echo json_encode(array('result'=> false));
      }
      else{
          $tipo = $this->input->post('tipo');

          if($this->buscar_model->obispo($tipo) == true){
            $data['resultado_busqueda'] = $this->buscar_model->obispo($tipo) ;
            $this->load->view('buscar/buscar_obispo');
            $this->load->view('buscar/busqueda_obispos',$data);
            $this->load->view('templates/footer');
          }else{
              redirect('buscar#error');
          }

      }
}
function pando(){
  $data['a'] = $this->jurisdiccion_model->datoJurisdiccion(17);
  $this->load->view('inicio/header1');
  $this->load->view('jurisdicciones/pando',$data);
  $this->load->view('inicio/footer1');
}
function beni(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(14);
  $this->load->view('buscar/beni',$data);
  $this->load->view('templates/footer');
}
function reyes(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(18);
  $this->load->view('buscar/reyes',$data);
  $this->load->view('templates/footer');
}
function coroico(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(6);
  $this->load->view('buscar/coroico',$data);
  $this->load->view('templates/footer');
}
function santacruz(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(3);
  $this->load->view('buscar/santacruz',$data);
  $this->load->view('templates/footer');
}
##################################3
function cochabamba(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(1);
  $this->load->view('buscar/cochabamba',$data);
  $this->load->view('templates/footer');
}
function lapaz(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(2);
  $this->load->view('buscar/lapaz',$data);
  $this->load->view('templates/footer');
}
function sucre(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(4);
  $this->load->view('buscar/sucre',$data);
  $this->load->view('templates/footer');
}
function catrense(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(5);
  $this->load->view('buscar/catrense',$data);
  $this->load->view('templates/footer');
}
function elalto(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(7);
  $this->load->view('buscar/elalto',$data);
  $this->load->view('templates/footer');
}
function oruro(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(8);
  $this->load->view('buscar/oruro',$data);
  $this->load->view('templates/footer');
}
function potosi(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(9);
  $this->load->view('buscar/potosi',$data);
  $this->load->view('templates/footer');
}
function sanignacio(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(10);
  $this->load->view('buscar/sanignacion',$data);
  $this->load->view('templates/footer');
}
function tarija(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(11);
  $this->load->view('buscar/tarija',$data);
  $this->load->view('templates/footer');
}
function aiquile(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(12);
  $this->load->view('buscar/aiquile',$data);
  $this->load->view('templates/footer');
}
function corocoro(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(13);
  $this->load->view('buscar/corocoro',$data);
  $this->load->view('templates/footer');
}
function camiri(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(15);
  $this->load->view('buscar/camiri',$data);
  $this->load->view('templates/footer');
}
function chavez(){
  $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(16);
  $this->load->view('buscar/chavez',$data);
  $this->load->view('templates/footer');
}
function pdf(){
      $data['jurisdiccion'] = $this->jurisdiccion_model->datoJurisdiccion(17);
      $this->load->helper('mpdf');
      $html = $this->load->view('buscar/aiquile', $data, true);
      pdf_create($html, 'joelrojas' . date('d/m/y'), TRUE);
  }



}
