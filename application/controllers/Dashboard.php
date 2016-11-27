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
		$this->load->view('templates/header',$data);
		$this->load->view('dashboards/areas',$data);
		$this->load->view('templates/footer');
		}
	}

}
