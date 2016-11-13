<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicial extends CI_Controller {

public function __construct()
{
  parent::__construct();
}

public function index()
{
  $this->load->view('inicio/header1');
  $this->load->view('inicial');
  $this->load->view('inicio/footer1');
}

}
