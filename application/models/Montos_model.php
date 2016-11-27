<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Montos_model extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}

	function montoInvertido(){
		$query = $this->db->query("SELECT AVG(a.monto_invertido) AS porcentaje, b.obras
		from obras_datos a, tipo_obras b
		where a.cod_tipoobras= b.cod_tipoobras
		and a.cod_obrasdatos is not null
		and a.cod_usuario is not null
		and a.nombre is not null
		and a.sigla is not null 
		and a.congregacion is not null 
		and a.fechaCreacion is not null 
		and a.nit is not null
		and a.areaDeAccion is not null
		and a.horarioAtencion is not null 
		and a.poblacionMeta is not null
		and a.departamento is not null
		and a.provincia is not null 
		and a.localidadComunidad is not null
		and a.direccion is not null 
		and a.telefono_a 
		and a.fax is not null 
		and a.casilla is not null 
		and a.paginaWeb is not null 
		and a.email is not null 
		and a.vicariaZonaPastoral is not null 
		and a.parroquia is not null
		and a.nombre_obra is not null 
		and a.cargo_obra is not null 
		and a.profesion_obra is not null 
		and a.fecha_obra is not null 
		and a.email_obra is not null 
		and a.telefono_obra is not null 
		and a.nombre_legal is not null
		and a.profesion_legal is not null 
		and a.email_legal is not null 
		and a.telefono_legal is not null
		and a.numtestimonios_legal is not null
		and a.monto_invertido is not null 
		and a.ingresos is not null 
		and a.gasto is not null 
		and a.agua is not null 
		and a.electricidad is not null 
		and a.gas_natural is not null
		and a.gas_licuado is not null 
		and a.telefono_b is not null 
		and a.internet is not null 
		and a.numero_formulario is not null 
		and a.nombre_formulario is not null 
		and a.nombre_empadronador is not null
		and a.fecha_llenado is not null 
		and a.cod_jurisdiccion is not null 
		and a.cod_tipoobras is not null");
		return $query->result_array();
	}

}

/* End of file Montos_model.php */
/* Location: ./application/models/Montos_model.php */