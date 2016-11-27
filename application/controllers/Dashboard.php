<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function _construct(){
		parent::_construct();
	}
	public function index()
	{
		if (!$this->session->userdata('usuario')){
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
			}
 	  	 else{
		$ci = $this->session->userdata('ci');
		$data['usuario'] = $this->usuario_model->datoUsuario($ci);
		//total de obras registradas
		$data['total'] = $this->usuario_model->getCantidad();
		$data['cantidadObras'] = $this->usuario_model->cantidadObrasJurisdiccion();
		//modelo de Obras registradas en la jurisdiccion de cochabamba
		$data['obrasCocha']= $this->dashboard_model->obrasCocha();
		//modelo de obras registradas en la jurisdiccion de la paz
		$data['obrasLapaz']= $this->dashboard_model->obrasLapaz();
		//modelo de obras registradas en la jurisdiccion de santa cruz
		$data['obrasSantacruz']= $this->dashboard_model->obrasSantacruz();
		//modelo de obras registradas en la jurisdiccion de sucre
		$data['obrasSucre']= $this->dashboard_model->obrasSucre();
		//modelo de obras registradas en la jurisdiccion de coroico
		$data['obrasCoroico']= $this->dashboard_model->obrasCoroico();
		//modelo de obras registradas en la jurisdiccion de el alto
		$data['obrasElalto']= $this->dashboard_model->obrasElalto();
		//modelo de obras registradas en la jurisdiccion de oruro
		$data['obrasOruro']= $this->dashboard_model->obrasOruro();
		//modelo de obras registradas en la jurisdiccion de potosi
		$data['obrasPotosi']= $this->dashboard_model->obrasPotosi();
		//modelo de obras registradas en la jurisdiccion de san ignacio
		$data['obrasSanignacio']= $this->dashboard_model->obrasSanignacio();
		//modelo de obras registradas en la jurisdiccion de tarija
		$data['obrasTarija']= $this->dashboard_model->obrasTarija();
		//modelo de obras registradas en la jurisdiccion de aiquile
		$data['obrasAiquile']= $this->dashboard_model->obrasAiquile();
		//modelo de obras registradas en la jurisdiccion de corocoro
		$data['obrasCorocoro']= $this->dashboard_model->obrasCorocoro();
		//modelo de obras registradas en la jurisdiccion de beni
		$data['obrasBeni']= $this->dashboard_model->obrasBeni();
		//modelo de obras registradas en la jurisdiccion de camiri
		$data['obrasCamiri']= $this->dashboard_model->obrasCamiri();
		//modelo de obras registradas en la jurisdiccion de chavez
		$data['obrasChavez']= $this->dashboard_model->obrasChavez();
		//modelo de obras registradas en la jurisdiccion de pando
		$data['obrasPando']= $this->dashboard_model->obrasPando();
		//modelo de obras registradas en la jurisdiccion de reyes
		$data['obrasReyes']= $this->dashboard_model->obrasReyes();
    	$this->load->view('templates/header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
		}
	}

	function cantidadobras(){
		$cantidadObras[] = $this->usuario_model->cantidadObrasJurisdiccion();
		$json_string = json_encode($cantidadObras);
		return $json_string;

	}

	function areas(){
		if (!$this->session->userdata('usuario')){
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
			}
 	  	 else{
		$ci = $this->session->userdata('ci');
		$data['usuario'] = $this->usuario_model->datoUsuario($ci);
		$data['enero'] = $this->areas_model->enero();
		$data['febrero'] = $this->areas_model->febrero();
		$data['marzo'] = $this->areas_model->marzo();
		$data['abril'] = $this->areas_model->abril();
		$data['mayo'] = $this->areas_model->mayo();
		$data['junio'] = $this->areas_model->junio();
		$data['julio'] = $this->areas_model->julio();
		$data['agosto'] = $this->areas_model->agosto();
		$data['septiembre'] = $this->areas_model->septiembre();
		$data['octubre'] = $this->areas_model->octubre();
		$data['noviembre'] = $this->areas_model->noviembre();
		$data['diciembre'] = $this->areas_model->diciembre();
		$this->load->view('templates/header',$data);
		$this->load->view('dashboards/areas',$data);
		$this->load->view('templates/footer');
		}
	}

	function montoInvertido(){
		$this->load->model('montos_model');
		if (!$this->session->userdata('usuario')){
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
			}
 	  	else{
		$ci = $this->session->userdata('ci');
		$data['usuario'] = $this->usuario_model->datoUsuario($ci);
		$data['monto'] = $this->montos_model->montoInvertido();
		$this->load->view('templates/header',$data);
		$this->load->view('dashboards/montos',$data);
		$this->load->view('templates/footer');
		}
	}
	function fecha(){
		$this->load->model('fechas_model');
		if (!$this->session->userdata('usuario')){
			$this->session->set_flashdata('mensaje','Debes Iniciar Sesion');
			redirect(base_url());
			}
 	  	else{
		$ci = $this->session->userdata('ci');
		$data['usuario'] = $this->usuario_model->datoUsuario($ci);
		$data['enero'] = $this->fechas_model->enero();
		$data['febrero'] = $this->fechas_model->febrero();
		$data['marzo'] = $this->fechas_model->marzo();
		$data['abril'] = $this->fechas_model->abril();
		$data['mayo'] = $this->fechas_model->mayo();
		$data['junio'] = $this->fechas_model->junio();
		$data['julio'] = $this->fechas_model->julio();
		$data['agosto'] = $this->fechas_model->agosto();
		$data['septiembre'] = $this->fechas_model->septiembre();
		$data['octubre'] = $this->fechas_model->octubre();
		$data['noviembre'] = $this->fechas_model->noviembre();
		$data['diciembre'] = $this->fechas_model->diciembre();
		$this->load->view('templates/header',$data);
		$this->load->view('dashboards/fechas',$data);
		$this->load->view('templates/footer');
		}
	}

}
