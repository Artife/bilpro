<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salir extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UsersModel');
    }
	public function index()
	{    
        $this->session->sess_destroy();
        $this->load->view('part/header');
        $this->load->view('salir');
        $this->load->view('part/footer');
	} 

}
