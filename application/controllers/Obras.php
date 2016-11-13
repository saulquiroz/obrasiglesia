<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obras extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('obras_model');
  }

  function delete_admin() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_administrativa');
  }
  function delete_comun() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_comunicacion');
  }
  function delete_edu() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_educacion');
  }
  function delete_enc() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_encuentros');
  }
  function delete_mov() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_movilidad');
  }
  function delete_parr() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_parroquia');
  }
  function delete_peni() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_penitenciaria');
  }
  function delete_prod() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_productiva');
  }
  function delete_prot() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_proteccion');
  }
  function delete_rel() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_religiosa');
  }
  function delete_salud() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('obras/lista_salud');
  }

  function visualizar_administrativa(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/administrativa/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_comunicacion(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/comunicacion/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_educacion(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/educacion/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_encuentros(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/encuentros/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_movilidad(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/movilidad/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_parroquia(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/parroquia/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_penitenciaria(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/penitenciaria/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_productiva(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/productiva/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_proteccion(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/proteccion/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_religiosa(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/religiosa/detalle',$data);
      $this->load->view('templates/footer');
  }
  function visualizar_salud(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['result'] = $this->obras_model->getById($this->uri->segment(3));

      $this->load->view('templates/header',$data);
      $this->load->view('obras/salud/detalle',$data);
      $this->load->view('templates/footer');
  }
  


  function lista_administrativa()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraAdministrativa();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/administrativa/lista_administrativa',$data);
      $this->load->view('templates/footer');
  }
  function lista_comunicacion()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraComunicacion();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/comunicacion/lista_comunicacion',$data);
      $this->load->view('templates/footer');
  }
  function lista_educacion()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraEducacion();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/educacion/lista_educacion',$data);
      $this->load->view('templates/footer');
  }
  function lista_encuentros()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraEncuentros();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/encuentros/lista_encuentros',$data);
      $this->load->view('templates/footer');
  }
  function lista_movilidad()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraMovilidad();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/movilidad/lista_movilidad',$data);
      $this->load->view('templates/footer');
  }
  function lista_parroquia()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraParroquia();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/parroquia/lista_parroquia',$data);
      $this->load->view('templates/footer');
  }
  function lista_penitenciaria()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraPenitenciaria();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/penitenciaria/lista_penitenciaria',$data);
      $this->load->view('templates/footer');
  }
 
  
  function lista_productiva()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraProductiva();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/productiva/lista_productiva',$data);
      $this->load->view('templates/footer');
  }
  function lista_proteccion()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraProteccion();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/proteccion/lista_proteccion',$data);
      $this->load->view('templates/footer');
  }
  function lista_religiosa()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraReligiosa();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/religiosa/lista_religiosa',$data);
      $this->load->view('templates/footer');
  }

function lista_salud()
  {
      $ci = $this->session->userdata('ci');
      $data['usuario'] = $this->usuario_model->datoUsuario($ci);
      $data['resultado'] = $this->obras_model->getObraSalud();
      $data['result'] = $this->usuario_model->getUsuarios();
      $data['obras'] = $this->obras_model->datoObra($ci);
    
      $this->load->view('templates/header',$data);
      $this->load->view('obras/salud/lista_salud',$data);
      $this->load->view('templates/footer');
  }

}
