<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pag_busqueda extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('obras_model');
    $this->load->model('buscar_model');
    
    $this->load->view('inicio/header1');
  }

  function index()
  {
    $this->load->view('obras/pagina/pag_buscarobra');
    $this->load->view('inicio/footer1');
  }
  function busquedaobra(){
      $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
      $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
      $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
      if($this->form_validation->run() == false){
        redirect(base_url());
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
              $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = a.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
            }
          }
        }

        if ($this->obras_model->query($sql)) {
          $data['resultadoQuery']= $this->obras_model->query($sql);
          $this->load->view('obras/pagina/pag_buscarobra');
          $this->load->view('obras/pagina/pag_busquedaobra',$data);
          $this->load->view('inicio/footer1');
        }
        else {
          #$data['sql']= $sql;
          $data['resultadoQuery']= $this->obras_model->query($sql);
          $this->load->view('obras/pagina/pag_buscarobra');
          $this->load->view('obras/pagina/pag_busquedaobra',$data);
          $this->load->view('inicio/footer1');

        }
      }
  }
  function buscarreligiosa(){
    $this->load->view('obras/pagina/pag_buscarreligiosa');
    $this->load->view('inicio/footer1');
  }
  function busquedareligiosa(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarreligiosa');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarreligiosa');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarparroquia(){
    $this->load->view('obras/pagina/pag_buscarparroquia');
    $this->load->view('inicio/footer1');
  }
  function busquedaparroquia(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarparroquia');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarparroquia');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscareducacion(){
    $this->load->view('obras/pagina/pag_buscareducacion');
    $this->load->view('inicio/footer1');
  }
  function busquedaeducacion(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscareducacion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscareducacion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarsalud(){
    $this->load->view('obras/pagina/pag_buscarsalud');
    $this->load->view('inicio/footer1');
  }
  function busquedasalud(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarsalud');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarsalud');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarproteccion(){
    $this->load->view('obras/pagina/pag_buscarproteccion');
    $this->load->view('inicio/footer1');
  }
  function busquedaproteccion(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarproteccion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarproteccion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarcomunicacion(){
    $this->load->view('obras/pagina/pag_buscarcomunicacion');
    $this->load->view('inicio/footer1');
  }
  function busquedacomunicacion(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarcomunicacion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarcomunicacion');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarencuentros(){
    $this->load->view('obras/pagina/pag_buscarencuentros');
    $this->load->view('inicio/footer1');
  }
  function busquedaencuentros(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarencuentros');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarencuentros');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscaradministrativa(){
    $this->load->view('obras/pagina/pag_buscaradministrativa');
    $this->load->view('inicio/footer1');
  }
  function busquedaadministrativa(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscaradministrativa');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscaradministrativa');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarmovilidad(){
    $this->load->view('obras/pagina/pag_buscarmovilidad');
    $this->load->view('inicio/footer1');
  }
  function busquedamovilidad(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarmovilidad');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarmovilidad');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarproductiva(){
    $this->load->view('obras/pagina/pag_buscarproductiva');
    $this->load->view('inicio/footer1');
  }
  function busquedaproductiva(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarproductiva');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarproductiva');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function buscarpenitenciaria(){
    $this->load->view('obras/pagina/pag_buscarpenitenciaria');
    $this->load->view('inicio/footer1');
  }
  function busquedapenitenciaria(){
    $this->form_validation->set_rules('jurisdiccion','jurisdiccion','trim|xss_clean');
    $this->form_validation->set_rules('ciudad','Ciudad','trim|xss_clean');
    $this->form_validation->set_rules('obra','Obra','trim|xss_clean');
    if($this->form_validation->run() == false){
      redirect(base_url());
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
            $sql = "WHERE d.cod_tipoobras = a.cod_tipoobras AND b.cod_sede = e.cod_jurisdiccion AND e.cod_jurisdiccion = a.cod_jurisdiccion";
          }
        }
      }

      if ($this->obras_model->query($sql)) {
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarpenitenciaria');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
      else {
        #$data['sql']= $sql;
        $data['resultadoQuery']= $this->obras_model->query($sql);
        $this->load->view('obras/pagina/pag_buscarpenitenciaria');
        $this->load->view('obras/pagina/pag_busquedas',$data);
        $this->load->view('inicio/footer1');
      }
    }
  }
  function visualizar(){
      if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
          $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
          redirect(base_url());
      }
      $data['result'] = $this->buscar_model->getById($this->uri->segment(3));
      $this->load->view('obras/pagina/pag_detalle',$data);
      $this->load->view('inicio/footer1');
  }

}
