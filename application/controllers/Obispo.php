<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obispo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('obispo_model');
  }

  function index()
  {
    $data['custom_error'] = '';
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('obispo/obispo',$data);
    $this->load->view('templates/footer');
  }
  function guardar(){
    $data['custom_error'] = '';
    $this->form_validation->set_error_delimiters('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 0.5%;">','</div>');

    $this->form_validation->set_rules('nombre_id', 'Obispo', 'trim|required|is_unique[obispo.cod_usuario]|xss_clean');
    $this->form_validation->set_rules('ordenacion_sacerdotal', 'Ordenacion Sacramental', 'required|trim|xss_clean');
    $this->form_validation->set_rules('ordenacion_episcopal', 'Ordenacion Episcopal', 'required|trim|xss_clean');
    $this->form_validation->set_rules('sede', 'Sede Episcopal', 'trim|required|xss_clean');
    $this->form_validation->set_rules('fax', 'Fax', 'trim|xss_clean');
    $this->form_validation->set_rules('ubicacion', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('tipo_cargo', 'Tipo - Cargo', 'trim|required|xss_clean');
    $this->form_validation->set_rules('lugar_nacimiento', 'Lugar Nacimiento', 'trim|xss_clean');
    $this->form_validation->set_rules('bibliografia', 'Bibliografia', 'trim|xss_clean');

    $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
    $this->form_validation->set_message('is_unique', 'El %s  ya esta registrado');

    if ($this->form_validation->run() == TRUE)
    {
      $nombre = $this->security->xss_clean(strip_tags($this->input->post('nombre_id')));
  		$fecha_cadenaSacramental = $this->security->xss_clean(strip_tags($this->input->post('ordenacion_sacramental')));
      $fechasacramental = $time = strtotime($fecha_cadenaSacramental);
      $fecha_cadenaEpiscopal = $this->security->xss_clean(strip_tags($this->input->post('ordenacion_episcopal')));
      $fechaepiscopal = $time = strtotime($fecha_cadenaEpiscopal);
      $fechasacramental_date = date('Y-m-d',$fechasacramental);
      $fechaepiscopal_date = date('Y-m-d',$fechaepiscopal);
      $sede = $this->security->xss_clean(strip_tags($this->input->post('sede_id')));
  		$fax = $this->security->xss_clean(strip_tags($this->input->post('fax')));
    	$ubicacion = $this->security->xss_clean(strip_tags($this->input->post('ubicacion')));
      $lugar_nacimiento = $this->security->xss_clean(strip_tags($this->input->post('lugar_nacimiento')));
  		$tipo = $this->security->xss_clean(strip_tags($this->input->post('tipo_cargo_id')));
      $bibiografia=$this->security->xss_clean(strip_tags($this->input->post('bibliografia')));
      $datos = 	array(
        "bibliografia" => $bibiografia,
        "ordenacionSacerdotal" => $fechasacramental_date,
        "ordenacionEpiscopal" => $fechaepiscopal_date,
        "lugarNacimiento" => $lugar_nacimiento,
        "fax" => $fax,
        "ubicacion" => $ubicacion,
        "cod_usuario" => $nombre,
        "cod_tipoobispo" => $tipo,
        "cod_sede" => $sede);

        if ($this->obispo_model->guardar($datos)) {
         redirect('inicio');
        }
        else {
         $data['custom_error'] = '<div class="form_error"><p>Ocurrio un error al guardar los datos. Intente de nuevo</p></div>';
        }
    }
    else
    {
        $data['custom_error'] = (validation_errors() ? true : false);
    }
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('obispo/obispo',$data);
    $this->load->view('templates/footer');

    #$foto=$this->security->xss_clean(strip_tags($this->input->post('foto')));

  }
   function lista_obispo()
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

  function buscarCi(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->obispo_model->autoCompleteCi($q);
      }
  }
  function buscarSede(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->obispo_model->autoCompleteSede($q);
      }
  }
  function buscarTipoCargo(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->obispo_model->autoCompleteCargo($q);
      }
  }
  function buscarObispoNombre(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->obispo_model->autoCompleteObispo($q);
      }
  }


   public function visualizar(){

        if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
            $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
            redirect('obrasiglesia');
        }

        $this->data['custom_error'] = '';
        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        $data['result'] = $this->obispo_model->getById($this->uri->segment(3));

    $this->load->view('templates/header',$data);
    $this->load->view('obispo/perfil_obispo',$data);
    $this->load->view('templates/footer');

    }



    function delete() {
    $u = $this->uri->segment(3);
    $this->obispo_model->delete($u);
    redirect('lista_obispo');
  }


 function update() {

    if ($this->input->post('mit')) {

      $cod_obispo = $this->input->post('cod_obispo');
      $this->obispo_model->update($cod_obispo);

      redirect('lista_obispo');
    } else{
      redirect('obispo/edit'.$cod_obispo);
    }

  }

  function edit() {
    $kd = $this->uri->segment(3);
    if ($kd == NULL) {
      redirect('obispo');
    }
     $dt = $this->obispo_model->edit($kd);
     $data1['bibliografia'] = $dt->bibliografia;
     $data1['ordenacionSacerdotal'] = $dt->ordenacionSacerdotal;
     $data1['ordenacionEpiscopal'] = $dt->ordenacionEpiscopal;
     $data1['lugarNacimiento'] = $dt->lugarNacimiento;
     $data1['fax'] = $dt->fax;
     $data1['ubicacion'] = $dt->ubicacion;
     $data1['cod_obispo'] = $kd;


        $data['custom_error'] = (validation_errors() ? true : false);

        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        $this->load->view('templates/header',$data);
        $this->load->view('obispo/edit', $data1);
        $this->load->view('templates/footer');

  }
  function pdf(){
        $data['obispo'] = $this->obispo_model->datoObispo1(17);

        $this->load->helper('mpdf');
        $html = $this->load->view('obispo/perfil_obispo', $data, true);
        pdf_create($html, 'joelrojas' . date('d/m/y'), TRUE);
    }
}
