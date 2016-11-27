<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fechas_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	function enero(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-01-01') AND DATE_FORMAT(CURDATE(), '%Y-01-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function febrero(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-02-01') AND DATE_FORMAT(CURDATE(), '%Y-02-29')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function marzo(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-03-01') AND DATE_FORMAT(CURDATE(), '%Y-03-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function abril(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-04-01') AND DATE_FORMAT(CURDATE(), '%Y-04-30')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function mayo(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-05-01') AND DATE_FORMAT(CURDATE(), '%Y-05-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function junio(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-06-01') AND DATE_FORMAT(CURDATE(), '%Y-06-30')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function julio(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-07-01') AND DATE_FORMAT(CURDATE(), '%Y-07-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function agosto(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-08-01') AND DATE_FORMAT(CURDATE(), '%Y-08-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function septiembre(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-09-01') AND DATE_FORMAT(CURDATE(), '%Y-09-30')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function octubre(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-10-01') AND DATE_FORMAT(CURDATE(), '%Y-10-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function noviembre(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-11-01') AND DATE_FORMAT(CURDATE(), '%Y-11-30')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	function diciembre(){
		$query = $this->db->query("SELECT MAX(b.obras) as tipo, COUNT(b.obras) as c 
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		and fechaCreacion between DATE_FORMAT(CURDATE(), '%Y-12-01') AND DATE_FORMAT(CURDATE(), '%Y-12-31')
		GROUP BY b.obras ORDER BY c DESC LIMIT 1");
		return $query->result_array();
	}
	
}

/* End of file Fechas_model.php */
/* Location: ./application/models/Fechas_model.php */