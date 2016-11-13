<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurisdiccion_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function guardar($data){
    $this->db->insert('jurisdiccion',$data);
    if ($this->db->affected_rows() > 0 ) {
      return true;
    }
    else {
      return false;
    }
  }
  function guardar2($data){
    $this->db->insert('obispo_jurisdiccion',$data);
    if ($this->db->affected_rows() > 0 ) {
      return true;
    }
    else {
      return false;
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
            $row_set[] = array('label'=>$row['nombre'].' '.$row['apellido'], 'id'=>$row['nombre'].' '.$row['apellido']);
        }
        echo json_encode($row_set);
    }
  }
  public function autoCompleteObispo2($q)
  {

    $this->db->select('*');
    $this->db->limit(5);
    $this->db->from('usuario');
    $this->db->like('nombre', $q);
    $this->db->join('obispo','obispo.cod_usuario = usuario.cod_usuario');
    $query = $this->db->get();
    if($query->num_rows() > 0){
        foreach ($query->result_array() as $row){
            $row_set[] = array('label'=>$row['nombre'].' '.$row['apellido'], 'id'=>$row['cod_obispo']);
        }
        echo json_encode($row_set);
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
          $this->db->like('nombre', $q);
          $query = $this->db->get('sede_episcopal');
          if($query->num_rows() > 0){
              foreach ($query->result_array() as $row){
                  $row_set[] = array('label'=>$row['nombre'], 'id'=>$row['cod_sede'],);
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
    function datoJurisdiccion($id){
      #$this->db->select('sede_episcopal.sede as sede,obispo.*,usuario.*');
    $this->db->select('*');
      $this->db->from('obispo_jurisdiccion');
      $this->db->join('jurisdiccion','jurisdiccion.cod_jurisdiccion= obispo_jurisdiccion.cod_jurisdiccion');
      $this->db->join('obispo','obispo.cod_obispo= obispo_jurisdiccion.cod_obispo');
      $this->db->join('usuario','usuario.cod_usuario= obispo.cod_obispo');
      $this->db->join('sede_episcopal', 'sede_episcopal.cod_sede = jurisdiccion.cod_sede');
      $this->db->where('obispo_jurisdiccion.cod_jurisdiccion',$id);
      #$this->db->and('obispos.cod_usuario=jurisdiccion.obaux1');
      return $query = $this->db->get()->result();
    }


}
