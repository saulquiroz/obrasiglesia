<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obras_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function guardar($data){
    $this->db->insert('obras_datos',$data);
    if ($this->db->affected_rows() > 0 ) {
      return true;
    }
    else {
      return false;
    }
  }

  function query($sql){
    $query = $this->db->query("SELECT b.sede, a.nombre, d.obras, a.departamento, a.cod_obrasdatos FROM obras_datos a, sede_episcopal b, tipo_obras d, jurisdiccion e ".$sql."");
  return $query->result_array();
  }

  function getById($cod_obra){
      $this->db->where('cod_obrasdatos',$cod_obra);
      $this->db->limit(1);
      return $this->db->get('obras_datos')->row();
  }
function datoObra($ci){
    $this->db->where('cod_obrasdatos',$ci);
      $venta = $this->db->get('obras_datos');
      if ($venta -> num_rows() > 0) {
          foreach ($venta->result() as $key ) {
              $datos[] = $key;
          }
          return $datos;
      }
  }
     
    function getObraAdministrativa(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra Administrativa' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraComunicacion(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra de Comunicacion Social' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraEducacion(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra de Educacion' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraEncuentros(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Casa de Encuentros' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraMovilidad(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra de Movilidad Humana' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraParroquia(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='parroquia' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraPenitenciaria(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra penitenciaria' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraProductiva(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra productiva' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraProteccion(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra de Proteccion Social' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraReligiosa(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Casa Religiosa' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }
    function getObraSalud(){
    $query = $this->db->query("SELECT * FROM obras_datos a, tipo_obras c, sede_episcopal b, jurisdiccion e  WHERE b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras  = a.cod_tipoobras AND c.obras='Obra de Salud' GROUP BY a.cod_obrasdatos");
    return $query->result();
    }

    function delete($a) {
    $this->db->delete('obras_datos', array('cod_obrasdatos' => $a));
    return;
  }



  function edit($a) {
    $d = $this->db->query("SELECT a.*, c.* FROM obras_datos a, sede_episcopal b, tipo_obras c, jurisdiccion e  WHERE a.cod_obrasdatos = $a AND b.cod_sede = e.cod_sede AND e.cod_jurisdiccion = a.cod_jurisdiccion AND c.cod_tipoobras = a.cod_tipoobras")->row();

    #$d = $this->db->get_where('obras_datos', array('cod_obrasdatos' => $a))->row();



    

    return $d;
    #return $query->result();
  }

  function update($cod_obrasdatos) {
    $cod_obrasdatos = $this->input->post('cod_obrasdatos');
    $nombre = $this->input->post('nombre');
    $sigla = $this->input->post('sigla');
    $congregacion = $this->input->post('congregacion');
    $fechaCreacion = $this->input->post('fechaCreacion');
    $NIT = $this->input->post('NIT');
    $areaDeAccion = $this->input->post('areaDeAccion');
    $horarioAtencion = $this->input->post('horarioAtencion');
    $poblacionMeta = $this->input->post('poblacionMeta');
    #
    $cod_tipoobras = $this->input->post('cod_tipoobras');
    $departamento = $this->input->post('departamento');
    $provincia = $this->input->post('provincia');
    $municipio = $this->input->post('municipio');
    $localidadComunidad = $this->input->post('localidadComunidad');
    $direccion = $this->input->post('direccion');
    $telefono_a = $this->input->post('telefono_a');
    $fax = $this->input->post('fax');
    $casilla = $this->input->post('casilla');
    $paginaWeb = $this->input->post('paginaWeb');
    $email = $this->input->post('email');
    #
    $cod_jurisdiccion = $this->input->post('cod_jurisdiccion');
    #$jurisdiccion = $this->input->post('jurisdiccion');
    $vicariaZonaPastoral = $this->input->post('vicariaZonaPastoral');
    $parroquia = $this->input->post('parroquia');
    #
    $nombre_obra = $this->input->post('nombre_obra');
    $cargo_obra = $this->input->post('cargo_obra');
    $profesion_obra = $this->input->post('profesion_obra');
    $fecha_obra = $this->input->post('fecha_obra');
    $email_obra = $this->input->post('email_obra');
    #
    $nombre_legal = $this->input->post('nombre_legal');
    $profesion_legal = $this->input->post('profesion_legal');
    $email_legal = $this->input->post('email_legal');
    $telefono_legal = $this->input->post('telefono_legal');
    $numtestimonios_legal = $this->input->post('numtestimonios_legal');
    #
     $monto_invertido = $this->input->post('monto_invertido');
    $ingresos = $this->input->post('ingresos');
    $gasto = $this->input->post('gasto');
    #
    $agua = $this->input->post('agua');
    $electricidad = $this->input->post('electricidad');
    $gas_natural = $this->input->post('gas_natural');
    $gas_licuado = $this->input->post('gas_licuado');
    $telefono_b = $this->input->post('telefono_b');
    $internet = $this->input->post('internet');
    #
    $numero_formulario = $this->input->post('numero_formulario');
    $nombre_formulario = $this->input->post('nombre_formulario');
    $nombre_empadronador = $this->input->post('nombre_empadronador');
    $fecha_llenado = $this->input->post('fecha_llenado');
    $data1 = array(
        
    
      "nombre" => $nombre,
        "sigla" => $sigla,
        "congregacion" => $congregacion,
        "fechaCreacion" => $fechaCreacion,
        "NIT" => $NIT,
        "areaDeAccion" => $areaDeAccion,
        "horarioAtencion" => $horarioAtencion,
        "poblacionMeta" => $poblacionMeta,
        #
        "cod_tipoobras" => $cod_tipoobras,
        "departamento" => $departamento,
        "provincia" => $provincia,
        "municipio" => $municipio,
        "localidadComunidad" => $localidadComunidad,
        "direccion" => $direccion,
        "telefono_a" => $telefono_a,
        "fax" => $fax,
        "casilla" => $casilla,
        "paginaWeb" => $paginaWeb,
        "email" => $email,
        #
        "cod_jurisdiccion" => $cod_jurisdiccion,
        #"jurisdiccion" => $jurisdiccion,
        "vicariaZonaPastoral" => $vicariaZonaPastoral,
        "parroquia" => $parroquia,
        #
        "nombre_obra" => $nombre_obra,
        "cargo_obra" => $cargo_obra,
        "profesion_obra" => $profesion_obra,
        "fecha_obra" => $fecha_obra,
        "email_obra" => $email_obra,
        #
        "nombre_legal" => $nombre_legal,
        "profesion_legal" => $profesion_legal,
        "email_legal" => $email_legal,
        "telefono_legal" => $telefono_legal,
        "numtestimonios_legal" => $numtestimonios_legal,
        #
        "monto_invertido" => $monto_invertido,
        "ingresos" => $ingresos,
        "gasto" => $gasto,
        #
        "agua" => $agua,
        "electricidad" => $electricidad,
        "gas_natural" => $gas_natural,
        "gas_licuado" => $gas_licuado,
        "telefono_b" => $telefono_b,
        "internet" => $internet,
        #
        "numero_formulario" => $numero_formulario,
        "nombre_formulario" => $nombre_formulario,
        "nombre_empadronador" => $nombre_empadronador,
        "fecha_llenado" => $fecha_llenado,
      
    );
    $this->db->where('cod_obrasdatos', $cod_obrasdatos);
    $this->db->update('obras_datos', $data1);
  }
}
