<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
	public function index()    
	{  
        $this->load->view('part/header');
        $this->load->view('registro');
        $this->load->view('part/footer');
	}
    public function registro()
    {   
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
    }
}
