<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	function getCantidad(){
	$this->db->select('COUNT(a.cod_obrasdatos as Total');
    $this->db->from('obras_datos');
  	return $query = $this->db->get()->result();
	}
	function cantidadObrasJurisdiccion(){
	$query = $this->db->query("SELECT b.sede, COUNT(b.sede) AS Cantidad
	FROM obras_datos a, sede_episcopal b
	WHERE b.cod_sede = a.cod_jurisdiccion
	GROUP BY b.sede;");
  	return $query->result_array();
	}




}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */