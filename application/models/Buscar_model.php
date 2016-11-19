<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function obispo($tipo){
    $this->db->select('obispos.*, usuario.*');
    $this->db->from('obispos');
    $this->db->join('usuario','usuario.cod_usuario= obispos.cod_usuario');
    $this->db->where('cod_tipoobispo',$tipo);
  			return $query = $this->db->get()->result();
  }
  function getById($cod_obra){
      $this->db->where('cod_obrasdatos',$cod_obra);
      $this->db->limit(1);
      return $this->db->get('obras_datos')->row();
  }
}
