<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obispo_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function guardar($data){
    $this->db->insert('obispo',$data);
    if ($this->db->affected_rows() >= 0 ) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }
  public function autoCompleteCi($q){
        $this->db->select('*');
        $this->db->limit(5);
        $this->db->like('cod_usuario', $q);
        $query = $this->db->get('usuario');
        if($query->num_rows() > 0){
            foreach ($query->result_array() as $row){
                $row_set[] = array('label'=>$row['cod_usuario'].'  -  '.$row['nombre'].' '.$row['apellido'], 'id'=>$row['cod_usuario']);
            }
            echo json_encode($row_set);
        }
    }
  public function autoCompleteSede($q){
          $this->db->select('*');
          $this->db->limit(5);
          $this->db->like('sede', $q);
          $query = $this->db->get('sede_episcopal');
          if($query->num_rows() > 0){
              foreach ($query->result_array() as $row){
                  $row_set[] = array('label'=>$row['sede'], 'id'=>$row['cod_sede'],);
              }
              echo json_encode($row_set);
          }
    }
    public function autoCompleteCargo($q){
            $this->db->select('*');
            $this->db->limit(5);
            $this->db->like('tipo', $q);
            $query = $this->db->get('tipo_obispos');
            if($query->num_rows() > 0){
                foreach ($query->result_array() as $row){
                    $row_set[] = array('label'=>$row['tipo'].' - '.$row['cargo'], 'id'=>$row['cod_tipoobispo']);
                }
                echo json_encode($row_set);
            }
    }
    public function autoCompleteObispo($q)
    {
      $this->db->select('*');
      $this->db->limit(5);
      $this->db->like('nombre', $q);
      $query = $this->db->get('usuario');
      if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
              $row_set[] = array('label'=>$row['nombre'].' '.$row['apellido'], 'id'=>$row['cod_usuario']);
          }
          echo json_encode($row_set);
      }
    }


    function datoObispo($ci){
    $this->db->where('cod_obispo',$ci);
      $venta = $this->db->get('obispo');
      if ($venta -> num_rows() > 0) {
          foreach ($venta->result() as $key ) {
              $datos[] = $key;
          }
          return $datos;
      }
  }

    function getObispo(){
    $this->db->select('obispo.*, usuario.*');
    $this->db->from('obispo','usuario');
    $this->db->join('usuario','usuario.cod_usuario = obispo.cod_usuario');

    //$this->db->limit(1);
    //$query = $this->db->get();
  return $query = $this->db->get()->result();
    }

    function getById($ci){
      $this->db->select('*');
      $this->db->from('usuario');
       $this->db->join('obispo','obispo.cod_usuario = usuario.cod_usuario');
        $this->db->where('cod_obispo',$ci);
        $this->db->limit(1);
        return $this->db->get()->row();
    }

    function delete($a) {
    $this->db->delete('obispo', array('cod_obispo' => $a));
    return;
  }

  function edit($a) {
    $d = $this->db->get_where('obispo', array('cod_obispo' => $a))->row();
    return $d;
  }

  function update($cod_obispo) {
    $cod_obispo = $this->input->post('cod_obispo');
    $bibliografia = $this->input->post('bibliografia');
    $ordenacionSacerdotal = $this->input->post('ordenacionSacerdotal');
    $ordenacionEpiscopal = $this->input->post('ordenacionEpiscopal');
    $lugarNacimiento = $this->input->post('lugarNacimiento');
    $fax = $this->input->post('fax');
    $ubicacion = $this->input->post('ubicacion');

    $data1 = array(
      'bibliografia' => $bibliografia,
      'ordenacionSacerdotal' => $ordenacionSacerdotal,
      'ordenacionEpiscopal' => $ordenacionEpiscopal,
      'lugarNacimiento' => $lugarNacimiento,
      'fax' => $fax,
      'ubicacion' => $ubicacion

    );
    $this->db->where('cod_obispo', $cod_obispo);
    $this->db->update('obispo', $data1);
  }

  function datoObispo1($id){
      $this->db->select('sede_episcopal.*, obispo.*, usuario.*');
      $this->db->from('obispo');
      $this->db->join('sede_episcopal','sede_episcopal.cod_sede= obispo.cod_sede');
      $this->db->join('usuario','usuario.cod_usuario= obispo.cod_usuario');
      $this->db->where('cod_obispo',$id);
      return $query = $this->db->get()->result();
    }

    function obispoTipo($tipo){
      $this->db->select('*');
      $this->db->from('obispo');
      $this->db->join('usuario','usuario.cod_usuario = obispo.cod_usuario');
      $this->db->join('tipo_obispos','tipo_obispos.cod_tipoobispo = obispo.cod_tipoobispo');
      $this->db->where('obispo.cod_tipoobispo',$tipo);
        return  $query = $this->db->get()->result();
    }
    function obisposBolivia(){
      $this->db->select('*');
      $this->db->from('obispo');
      $this->db->join('usuario','usuario.cod_usuario = obispo.cod_usuario');
      $this->db->join('tipo_obispos','tipo_obispos.cod_tipoobispo = obispo.cod_tipoobispo');
        return  $query = $this->db->get()->result();
    }

}
