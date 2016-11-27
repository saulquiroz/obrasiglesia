<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

	function obrasCocha(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='ARQUIDIÓCESIS DE COCHABAMBA'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasLapaz(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='ARQUIDIÓCESIS DE LA PAZ'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasSantacruz(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='ARQUIDIÓCESIS DE SANTA CRUZ DE LA SIERRA'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasSucre(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='ARQUIDIÓCESIS DE SUCRE'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasCoroico(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIÓCESIS DE COROICO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasElalto(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIÓCESIS DE EL  ALTO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasOruro(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIOCESIS DE ORURO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasPotosi(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIOCESIS DE POTOSÍ'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasSanignacio(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIÓCESIS DE SAN IGNACIO DE VELASCO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasTarija(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='DIÓCESIS DE TARIJA'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasAiquile(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='PRELATURA DE AIQUILE'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasCorocoro(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='PRELATURA DE COROCORO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasBeni(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='VICARIATO DEL BENI'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasCamiri(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='VICARIATO APOSTÓLICO DE CAMIRI'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasChavez(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='VICARIATO APOSTÓLICO DE ÑUFLO CHAVEZ'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasPando(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='VICARIATO APOSTÓLICO DE PANDO'
		GROUP BY b.obras");
		return $query->result_array();
	}
	function obrasReyes(){
		$query = $this->db->query("SELECT b.obras, COUNT(b.obras) AS Cantidad
		FROM obras_datos a, tipo_obras b, sede_episcopal c
		WHERE b.cod_tipoobras = a.cod_tipoobras
		AND c.cod_sede = a.cod_jurisdiccion
		AND c.sede='VICARIATO APOSTÓLICO DE REYES'
		GROUP BY b.obras");
		return $query->result_array();
	}

	
}	
/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */

