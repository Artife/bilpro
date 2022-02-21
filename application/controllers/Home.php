<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
	public function __construct()
    {
        parent::__construct(); 
        $this->load->model('Authentication');
    }
	public function index()
	{    
        $this->load->view('part/header');
        $this->load->view('home');
        $this->load->view('part/footer');
	} 
}
