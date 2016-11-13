<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrativa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('obras_model');
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
  }

  function index()
  {
      $data['custom_error']= '';
      $data['mensaje']= '';
      $this->load->view('obras/administrativa/obras_administrativa',$data);
      $this->load->view('templates/footer');
  }


 function delete() {
    $u = $this->uri->segment(3);
    $this->obras_model->delete($u);
    redirect('editar');
  }


 function update() {

    if ($this->input->post('mit')) {

      $cod_obrasdatos = $this->input->post('cod_obrasdatos');
      $this->obras_model->update($cod_obrasdatos);

      redirect('obras/lista_administrativa');
    } else{
      redirect('administrativa/edit'.$cod_obrasdatos);
    }

  }

  function edit() {
    $kd = $this->uri->segment(3);
    if ($kd == NULL) {
      redirect('administrativa');
    }
     $dt = $this->obras_model->edit($kd);
     
     $data1['nombre'] = $dt->nombre;
     $data1['sigla'] = $dt->sigla;
     $data1['congregacion'] = $dt->congregacion;
     $data1['fechaCreacion'] = $dt->fechaCreacion;
     $data1['NIT'] = $dt->NIT;
     $data1['areaDeAccion'] = $dt->areaDeAccion;
     $data1['horarioAtencion'] = $dt->horarioAtencion;
     $data1['poblacionMeta'] = $dt->poblacionMeta;

     #
     $data1['cod_tipoobras'] = $dt->cod_tipoobras;
     $data1['departamento'] = $dt->departamento;
     $data1['provincia'] = $dt->provincia;
     $data1['municipio'] = $dt->municipio;
     $data1['localidadComunidad'] = $dt->localidadComunidad;
     $data1['direccion'] = $dt->direccion;
     $data1['telefono_a'] = $dt->telefono_a;
     $data1['fax'] = $dt->fax;
     $data1['casilla'] = $dt->casilla;
     $data1['paginaWeb'] = $dt->paginaWeb;
     $data1['email'] = $dt->email;
     #
     $data1['cod_jurisdiccion'] = $dt->cod_jurisdiccion;
     $data1['vicariaZonaPastoral'] = $dt->vicariaZonaPastoral;
     $data1['parroquia'] = $dt->parroquia;
     #
     $data1['nombre_obra'] = $dt->nombre_obra;
     $data1['cargo_obra'] = $dt->cargo_obra;
     $data1['profesion_obra'] = $dt->profesion_obra;
     $data1['fecha_obra'] = $dt->fecha_obra;
     $data1['email_obra'] = $dt->email_obra;
     $data1['telefono_obra'] = $dt->telefono_obra;
     #
     $data1['nombre_legal'] = $dt->nombre_legal;
     $data1['profesion_legal'] = $dt->profesion_legal;
     $data1['email_legal'] = $dt->email_legal;
     $data1['telefono_legal'] = $dt->telefono_legal;
     $data1['numtestimonios_legal'] = $dt->numtestimonios_legal;
     #
     $data1['monto_invertido'] = $dt->monto_invertido;
     $data1['ingresos'] = $dt->ingresos;
     $data1['gasto'] = $dt->gasto;
     #
     $data1['agua'] = $dt->agua;
     $data1['electricidad'] = $dt->electricidad;
     $data1['gas_natural'] = $dt->gas_natural;
     $data1['gas_licuado'] = $dt->gas_licuado;
     $data1['telefono_b'] = $dt->telefono_b;
     $data1['internet'] = $dt->internet;
     #
     $data1['numero_formulario'] = $dt->numero_formulario;
     $data1['nombre_formulario'] = $dt->nombre_formulario;
     $data1['nombre_empadronador'] = $dt->nombre_empadronador;
     $data1['fecha_llenado'] = $dt->fecha_llenado;
     $data1['cod_obrasdatos'] = $kd;

        $data['custom_error'] = (validation_errors() ? true : false);

        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        
        $this->load->view('obras/administrativa/edit', $data1);
        $this->load->view('templates/footer');

  }
  
  function registrar(){
    $this->form_validation->set_rules('nombre', '"Nombre"', 'required|min_length[3]|trim|xss_clean',array(
                'required'      => 'Debe Ingresar el %s de la obra',
                'is_unique'     => 'Ese %s ya existe.'
        ));
    $this->form_validation->set_rules('jurisdiccion_id', '"Jurisdiccion"', 'required|trim|xss_clean',array(
                'required'      => 'Debe Ingresar la %s a la que pertenece la obra',
        ));
    #$this->form_validation->set_message('required', 'El campo %s no puede ir vacío!');
    $this->form_validation->set_message('min_length', 'El campo debe tener al menos %s carácteres');
    $data['custom_error']= '';
    //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
    if ($this->form_validation->run() == TRUE)
    {
              #DATOS GENERALES
      $nombre = $this->security->xss_clean(strip_tags($this->input->post('nombre')));
      $sigla = $this->security->xss_clean(strip_tags($this->input->post('sigla')));
      $congregacion = $this->security->xss_clean(strip_tags($this->input->post('congregacion')));
      $fechacrea_cadena = $this->security->xss_clean(strip_tags($this->input->post('fecha_creacion')));
      $fechacrea = $time = strtotime($fechacrea_cadena);
      $fechacreacion_date = date('Y-m-d',$fechacrea);
      $nit = $this->security->xss_clean(strip_tags($this->input->post('nit')));
      $tipo_area=$this->security->xss_clean(strip_tags($this->input->post('tipo_area')));
      $tipo_hora=$this->security->xss_clean(strip_tags($this->input->post('tipo_hora')));
      $poblacion_meta=$this->security->xss_clean(strip_tags($this->input->post('poblacion_meta')));
              #DATOS GEOGRAFICOS
      $tipo_departamento = $this->security->xss_clean(strip_tags($this->input->post('tipo_departamento')));
      $provincia = $this->security->xss_clean(strip_tags($this->input->post('provincia')));
      $municipio = $this->security->xss_clean(strip_tags($this->input->post('municipio')));
      $comunidadzu = $this->security->xss_clean(strip_tags($this->input->post('comunidadzu')));
      $direccion = $this->security->xss_clean(strip_tags($this->input->post('direccion')));
      $telefono_geo = $this->security->xss_clean(strip_tags($this->input->post('telefono_geo')));
      $fax_geo = $this->security->xss_clean(strip_tags($this->input->post('fax_geo')));
      $casilla_geo = $this->security->xss_clean(strip_tags($this->input->post('casilla_geo')));
      $paginaweb_geo = $this->security->xss_clean(strip_tags($this->input->post('paginaweb_geo')));
      $email_geo = $this->security->xss_clean(strip_tags($this->input->post('email_geo')));
              #INFORMACION jurisdiccion
      $jurisdiccion = $this->security->xss_clean(strip_tags($this->input->post('jurisdiccion_id')));
      $vicaria = $this->security->xss_clean(strip_tags($this->input->post('vicaria')));
      $parroquia = $this->security->xss_clean(strip_tags($this->input->post('parroquia')));
              #INFORMACION DEL RESPONSABLE DE LA OBRA
      $nombre_obra = $this->security->xss_clean(strip_tags($this->input->post('nombre_obra')));
      $cargo_obra = $this->security->xss_clean(strip_tags($this->input->post('cargo_obra')));
      $profesion_obra = $this->security->xss_clean(strip_tags($this->input->post('profesion_obra')));
      $fechanom_cadena = $this->security->xss_clean(strip_tags($this->input->post('fechanombramiento_obra')));
      $fechanom = $time = strtotime($fechanom_cadena);
      $fechanombramiento_date = date('Y-m-d',$fechanom);
      $email_obra = $this->security->xss_clean(strip_tags($this->input->post('email_obra')));
              #INFORMACION REPRESENTANTE LEGAL
      $nombre_legal = $this->security->xss_clean(strip_tags($this->input->post('nombre_legal')));
      $profesion_legal = $this->security->xss_clean(strip_tags($this->input->post('prefesion_legal')));
      $email_legal = $this->security->xss_clean(strip_tags($this->input->post('email_legal')));
      $telefono_legal = $this->security->xss_clean(strip_tags($this->input->post('telefono_legal')));
      $testimonio_legal = $this->security->xss_clean(strip_tags($this->input->post('testimonio_legal')));
              #IGRESOS Y GASTOS
      $monto_economica = $this->security->xss_clean(strip_tags($this->input->post('monto_economica')));
      $ingresos_economica = $this->security->xss_clean(strip_tags($this->input->post('ingresos_economica')));
      $gasto_economica = $this->security->xss_clean(strip_tags($this->input->post('gasto_economica')));
              #GASTOS SERVICIOS BASICOS
      $agua_gastos = $this->security->xss_clean(strip_tags($this->input->post('agua_gastos')));
      $energia_gastos = $this->security->xss_clean(strip_tags($this->input->post('energia_gastos')));
      $gasnatural_gastos = $this->security->xss_clean(strip_tags($this->input->post('gasnatural_gastos')));
      $gaslicuado_gastos = $this->security->xss_clean(strip_tags($this->input->post('gaslicuado_gastos')));
      $telefono_gastos = $this->security->xss_clean(strip_tags($this->input->post('telefono_gastos')));
      $internet_gastos = $this->security->xss_clean(strip_tags($this->input->post('internet_gastos')));
              #DATOS ADICIONALES
      $numeroform = $this->security->xss_clean(strip_tags($this->input->post('numeroform')));
      $nombre_responsable = $this->security->xss_clean(strip_tags($this->input->post('nombre_responsable')));
      $nombre_empadronador = $this->security->xss_clean(strip_tags($this->input->post('nombre_empadronador')));

      $fechalle_cadena = $this->security->xss_clean(strip_tags($this->input->post('fecha_llenado')));
      $fechalle = $time = strtotime($fechalle_cadena);
      $fechallenado_date = date('Y-m-d',$fechalle);
      $ci = $this->session->userdata('ci');
      $obra  = $this->session->userdata('administrativa');
      $datos = 	array(
        "cod_usuario" => $ci,
        "nombre" => $nombre,
  			"sigla" => $sigla,
  			"congregacion" => $congregacion,
        "fechaCreacion" => $fechacreacion_date,
  			"NIT" => $nit,
        "areaDeAccion" => $tipo_area,
  			"horarioAtencion" => $tipo_hora,
  			"poblacionMeta" => $poblacion_meta,
        #
        "cod_tipoobras" => $obra,
        "departamento" => $tipo_departamento,
        "provincia" => $provincia,
        "municipio" => $municipio,
        "localidadComunidad" => $comunidadzu,
        "direccion" => $direccion,
        "telefono_a" => $telefono_geo,
        "fax" => $fax_geo,
        "casilla" => $casilla_geo,
        "paginaWeb" => $paginaweb_geo,
        "email" => $email_geo,
        #
        "cod_jurisdiccion" => $jurisdiccion,
        "vicariaZonaPastoral" => $vicaria,
        "parroquia" => $parroquia,
        #
        "nombre_obra" => $nombre_obra,
        "cargo_obra" => $cargo_obra,
        "profesion_obra" => $profesion_obra,
        "fecha_obra" => $fechanombramiento_date,
        "email_obra" => $email_obra,
        #
        "nombre_legal" => $nombre_legal,
        "profesion_legal" => $profesion_legal,
        "email_legal" => $email_legal,
        "telefono_legal" => $telefono_legal,
        "numtestimonios_legal" => $testimonio_legal,
        #
        "monto_invertido" => $monto_economica,
        "ingresos" => $ingresos_economica,
        "gasto" => $gasto_economica,
        #
        "agua" => $agua_gastos,
        "electricidad" => $energia_gastos,
        "gas_natural" => $gasnatural_gastos,
        "gas_licuado" => $gaslicuado_gastos,
        "telefono_b" => $telefono_gastos,
        "internet" => $internet_gastos,
        #
        "numero_formulario" => $numeroform,
        "nombre_formulario" => $nombre_responsable,
        "nombre_empadronador" => $nombre_empadronador,
        "fecha_llenado" => $fechallenado_date,
      );
        if ($this->obras_model->guardar($datos)) {
        $this->session->set_flashdata('mensaje', 'EL REGISTRO FUE COREECTO');
   		  redirect('inicio');
   		 }
   		 else {
        $this->session->set_flashdata('mensaje', 'Error al registrar los datos, ingrese los datos correctamente.');
      }
     }
     else{
     //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
     $data['custom_error'] = (validation_errors() ? true : false);
     }

     $data['mensaje']= $this->session->flashdata('mensaje');
     $this->load->view('obras/administrativa/obras_administrativa',$data);
     $this->load->view('templates/footer');
   }

}
