<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('usuario_model');

  }

  function index()
  {
    $data['custom_error'] = '';
    $ci = $this->session->userdata('ci');
    $data['usuario'] = $this->usuario_model->datoUsuario($ci);
    $this->load->view('templates/header',$data);
    $this->load->view('user/usuario',$data);
    $this->load->view('templates/footer');
  }

  function guardar()
	{
		$nombre = $this->security->xss_clean(strip_tags($this->input->post('nombre')));
		$apellido = $this->security->xss_clean(strip_tags($this->input->post('apellido')));
		$ci = $this->security->xss_clean(strip_tags($this->input->post('ci')));
		$email = $this->security->xss_clean(strip_tags($this->input->post('email')));
		$telefono = $this->security->xss_clean(strip_tags($this->input->post('telefono')));
		$fechanac_cadena = $this->security->xss_clean(strip_tags($this->input->post('fecha_nac')));
    $fechanac = $time = strtotime($fechanac_cadena);
    $fechanac_date = date('Y-m-d',$fechanac);
    #$date= $this->db->query("INSERT INTO usuario (fecha_nac) VALUES STR_TO_DATE('$fechanac', '%m/%d/%Y')");
		$username = $this->security->xss_clean(strip_tags($this->input->post('username')));
		$password = $this->security->xss_clean(strip_tags($this->input->post('password')));
    $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo')));
    #$foto=$this->security->xss_clean(strip_tags($this->input->post('foto')));


		$datos = 	array(
      "cod_usuario" => $ci,
			"nombre" => $nombre,
			"apellido" => $apellido,
      "fecha_nacimiento" => $fechanac_date,
			"telefono" => $telefono,
      "email" => $email,
			"username" => $username,
			"password" => $password,
      "tipo" => $tipo);

		 if ($this->usuario_model->guardar($datos)==true) {
		  redirect('inicio');
		 }
		 else {
		 	echo "No se pudo realizar el registro";
		 }

	}
    function do_upload() {
        $data['custom_error'] = '';
        $this->form_validation->set_error_delimiters('<div class="col-md-12 alert alert-danger" id="divInfo" style="padding: 0.5%;">','</div>');
        $this->form_validation->set_rules('ci', 'Carnet de Identidad', 'trim|required|is_unique[usuario.cod_usuario]|xss_clean');
        $this->form_validation->set_rules('nombre', 'nombre', 'required|min_length[3]|trim|xss_clean');
        $this->form_validation->set_rules('apellido', 'apellido', 'required|min_length[3]|trim|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[usuario.email]|valid_email|xss_clean');
        $this->form_validation->set_rules('username', 'Nombre de Usuario', 'trim|required|min_length[3]|is_unique[usuario.username]|xss_clean');
        $this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[3]|trim|xss_clean');
        $this->form_validation->set_message('required', 'El %s no puede ir vacío!');
        $this->form_validation->set_message('min_length', 'El %s debe tener al menos %s carácteres');
        $this->form_validation->set_message('is_unique', 'El %s  ya esta registrado');

        //SI EL FORMULARIO PASA LA VALIDACIÓN HACEMOS TODO LO QUE SIGUE
        if ($this->form_validation->run() == TRUE)
        {
            $config['upload_path'] = './assets/imagenes';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = '2000';
            $config['max_width'] = '2024';
            $config['max_height'] = '2008';

            $this->load->library('upload', $config);
        #$this->upload->initialize($config);
        //SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA UPLOAD_VIEW
            if (!$this->upload->do_upload('foto')) {
                $data = array('error' => $this->upload->display_errors());
                #redirect('usuario#error');
            }
            else {
            //EN OTRO CASO SUBIMOS LA IMAGEN, CREAMOS LA MINIATURA Y HACEMOS
            //ENVÍAMOS LOS DATOS AL MODELO PARA HACER LA INSERCIÓN
                $file_info = $this->upload->data();
                //USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
                //ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
                # $this->create_thumbnail($file_info['file_name']);
                $data = array('upload_data' => $this->upload->data());
                #$titulo = $this->input->post('titulo');

                $nombre = $this->security->xss_clean(strip_tags($this->input->post('nombre')));
            		$apellido = $this->security->xss_clean(strip_tags($this->input->post('apellido')));
            		$ci = $this->security->xss_clean(strip_tags($this->input->post('ci')));
            		$email = $this->security->xss_clean(strip_tags($this->input->post('email')));
            		$telefono = $this->security->xss_clean(strip_tags($this->input->post('telefono')));
            		$fechanac_cadena = $this->security->xss_clean(strip_tags($this->input->post('fecha_nac')));
                $fechanac = $time = strtotime($fechanac_cadena);
                $fechanac_date = date('Y-m-d',$fechanac);
                #$date= $this->db->query("INSERT INTO usuario (fecha_nac) VALUES STR_TO_DATE('$fechanac', '%m/%d/%Y')");
            		$username = $this->security->xss_clean(strip_tags($this->input->post('username')));
            		$password = $this->security->xss_clean(strip_tags($this->input->post('password')));
                $tipo=$this->security->xss_clean(strip_tags($this->input->post('tipo')));
                $imagen = $file_info['file_name'];
                #$subir = $this->upload_model->subir($titulo,$imagen);
              #  $data['titulo'] = $titulo;
              #  $data['imagen'] = $imagen;

              /*$data['cod_usuario'] = $ci;
              $data['nombre'] = $nombre;
              $data['apellido'] = $apellido;
              $data['fecha_nac'] = $fechanac_date;
              $data['foto'] = $imagen;
              $data['telefono'] = $telefono;
              $data['email'] = $email;
              $data['username'] = $username;
              $data['password'] = $password;
              $data['tipo'] = $tipo;*/

                $datos = 	array(
                  "cod_usuario" => $ci,
                  "nombre" => $nombre,
                  "apellido" => $apellido,
                  "fecha_nacimiento" => $fechanac_date,
                  "foto" => $imagen,
                  "telefono" => $telefono,
                  "email" => $email,
                  "username" => $username,
                  "password" => $password,
                  "tipo" => $tipo);

                if($this->usuario_model->guardar($datos)==true){
                    redirect('inicio');
                }
                else{
                  $data['custom_error'] = '<div class="form_error"><p>Ocurrio un error al guardar los datos. Intente de nuevo</p></div>';
                }
            }
        }
        else{
          $data['custom_error'] = (validation_errors() ? true : false);
        //SI EL FORMULARIO NO SE VÁLIDA LO MOSTRAMOS DE NUEVO CON LOS ERRORES
        }
        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        $this->load->view('templates/header',$data);
        $this->load->view('user/usuario',$data);
        $this->load->view('templates/footer');
    }
    //FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
    function create_thumbnail($filename){
        $config['image_library'] = 'gd2';
        //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
        $config['source_image'] = 'uploads/'.$filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
        $config['new_image']='uploads/thumbs/';
        $config['width'] = 150;
        $config['height'] = 150;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
    public function visualizar(){

        if(!$this->uri->segment(3) || !is_numeric($this->uri->segment(3))){
            $this->session->set_flashdata('error','El elemento no se puede encontrar, parámetro no se pasa correctamente.');
            redirect('obrasiglesia');
        }

        $this->data['custom_error'] = '';
        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        $data['result'] = $this->usuario_model->getById($this->uri->segment(3));
    $this->load->view('templates/header',$data);
    $this->load->view('user/perfil',$data);

    $this->load->view('templates/footer');


    }
    function delete() {
    $u = $this->uri->segment(3);
    $this->usuario_model->delete($u);
    redirect('editar');
  }


 function update() {

    if ($this->input->post('mit')) {

      $cod_usuario = $this->input->post('cod_usuario');
      $this->usuario_model->update($cod_usuario);

      redirect('editar');
    } else{
      redirect('usuario/edit'.$cod_usuario);
    }

  }

  function edit() {
    $kd = $this->uri->segment(3);
    if ($kd == NULL) {
      redirect('usuario');
    }
     $dt = $this->usuario_model->edit($kd);
     $data1['nombre'] = $dt->nombre;
     $data1['apellido'] = $dt->apellido;
     $data1['fecha_nacimiento'] = $dt->fecha_nacimiento;
     $data1['foto'] = $dt->foto;
     $data1['telefono'] = $dt->telefono;
     $data1['email'] = $dt->email;
     $data1['username'] = $dt->username;
     $data1['password'] = $dt->password;
     $data1['tipo'] = $dt->tipo;
     $data1['cod_usuario'] = $kd;


        $data['custom_error'] = (validation_errors() ? true : false);

        $ci = $this->session->userdata('ci');
        $data['usuario'] = $this->usuario_model->datoUsuario($ci);
        $this->load->view('templates/header',$data);
        $this->load->view('user/edit', $data1);
        $this->load->view('templates/footer');

  }
  public function pdf(){

        $data['result'] = $this->obispo_model->getById($this->uri->segment(3));
        $this->load->helper('mpdf');

        //$this->load->view('relatorios/imprimir/imprimirOs', $data);
        $html = $this->load->view('user/perfil', $data, true);
        pdf_create($html, 'joelrojas' . date('d/m/y'), TRUE);
    }



}
