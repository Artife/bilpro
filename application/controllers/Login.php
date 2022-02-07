<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
	public function index()
	{   
        $this->load->view('part/header');
        $this->load->view('login');
        $this->load->view('part/footer');
	}
}
