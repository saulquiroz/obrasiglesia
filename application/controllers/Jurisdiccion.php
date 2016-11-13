<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurisdiccion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('jurisdiccion_model');
    $this->load->helper('array_helper');
  }

  function index()
  {
    $data['custom_error'] = '';
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('jurisdiccion/jurisdiccion',$data);
    $this->load->view('templates/footer');
  }
  function guardar(){

    $data['custom_error'] = '';
    $this->form_validation->set_error_delimiters('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 0.5%;">','</div>');

    $this->form_validation->set_rules('cargo', 'Cargo', 'required|trim|xss_clean');
    $this->form_validation->set_rules('obispoa', 'Obispo Oficial', 'trim|is_unique[obispo_jurisdiccion.cod_obispo]|xss_clean');
    $this->form_validation->set_rules('historia', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('ereccion', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('territorio', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('administracion', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('curia', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('comisiones', 'Ubicacion', 'trim|xss_clean');
    $this->form_validation->set_rules('instituciones', 'Ubicacion', 'trim|xss_clean');

    $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
    $this->form_validation->set_message('is_unique', 'El %s  ya esta registrado');

    if ($this->form_validation->run() == TRUE)
    {
        $config['upload_path'] = './assets/imagenes';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = '2000';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008';

        $this->load->library('upload', $config);
    #$this->upload->initialize($config);
    //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
        if (!$this->upload->do_upload('foto')) {
            $data = array('error' => $this->upload->display_errors());
            redirect('jurisdiccion#error');
        }
        else {
        //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
        //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
            $file_info = $this->upload->data();
            //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
            //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
            # $this->create_thumbnail($file_info['file_name']);
            $data = array('upload_data' => $this->upload->data());

            $sede = $this->security->xss_clean(strip_tags($this->input->post('sede_id')));
            $cargo = $this->security->xss_clean(strip_tags($this->input->post('cargo')));
            $mapa = $this->security->xss_clean(strip_tags($this->input->post('mapa')));
          	$datas['obispo'] = $this->security->xss_clean($this->input->post('obispoa'));
            $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo_obispo')));
            $historia = $this->input->post('historia');
            $ereccion= $this->input->post('ereccion');
            $territorio = $this->input->post('territorio');
            $administracion = $this->input->post('administracion');
            $curia = $this->input->post('curia');
            $comisiones =$this->input->post('comisiones');
            $instituciones = $this->input->post('instituciones');
            $imagen = $file_info['file_name'];

      		$datos = 	array(
            "cargo" => $cargo,
      			"mapa" => $imagen,
            "historia" => $historia,
            "ereccion" => $ereccion,
            "territorio" => $territorio,
            "administracion" => $administracion,
            "curia" => $curia,
            "comisiones" => $comisiones,
            "sectores" => $instituciones,######3
            "cod_sede" => $sede,
          );
            $this->jurisdiccion_model->guardar($datos);

          foreach ($datas as $dat ) {
            for ($i=0; $i < count($dat); $i++) {
              echo $dat[$i];
            }
          }

          $i=0;
          $contadorObispo = 0;
          $contadorDescrip = 1;
          while(!empty($dat[$i])){
            echo "<br>";
            echo "I :".$i;
            echo "dat: ".$dat[$i];
            echo "<br>";
                $Default['cod_obispo']=$dat[$contadorObispo];
                $Data['cod_jurisdiccion']=$sede;
                $Data['descripcion']=$dat[$contadorDescrip];
                #$guardar[$i]=$data_edit;
                $i=$i+2;
                $B=ArrayMergeKeepKeys($Default,$Data);
                $contadorObispo = $contadorObispo+2;
                $contadorDescrip = $contadorDescrip+2;
                $this->jurisdiccion_model->guardar2($B);
              #  if (($contadorObispo>count($dat))||($contadorDescrip>count($dat))) {
                ##}
          }

         }
    }
    else
    {
        $data['custom_error'] = (validation_errors() ? true : false);
    }

    $data['custom_error'] = '';
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('jurisdiccion/jurisdiccion',$data);
    $this->load->view('templates/footer');

  }

  function buscarCi(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->jurisdiccion_model->autoCompleteCi($q);
      }
  }
  function buscarSede(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->jurisdiccion_model->autoCompleteSede($q);
      }
  }
  function buscarTipoCargo(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->jurisdiccion_model->autoCompleteCargo($q);
      }
  }
  function buscarObispoNombre(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->jurisdiccion_model->autoCompleteObispo($q);
      }
  }
  function buscarObispoNombre2(){
    if (isset($_GET['term'])){
          $q = strtolower($_GET['term']);
          $this->jurisdiccion_model->autoCompleteObispo2($q);
      }
  }


}
