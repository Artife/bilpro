<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nuevo_proyecto extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
	public function __construct()
    {
        parent::__construct(); 
        $this->load->library('form_validation');
        $this->load->model('ProyectosModel');
        $this->load->model('Authentication');   
    }
	public function index()
	{    
        $this->load->view('part/header');
        $this->load->view('nuevo-proyecto');
        $this->load->view('part/footer');
	}     
    public function registro()
	{            
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');        
        $this->form_validation->set_rules('url_admin_pre', 'URL Administrador Pre', 'trim');
        $this->form_validation->set_rules('url_admin_pro', 'URL Administrador Pro', 'trim');
        $this->form_validation->set_rules('url_user_pre', 'URL Administrador Pre', 'trim');
        $this->form_validation->set_rules('url_user_pro', 'URL Administrador Pre', 'trim');
        $this->form_validation->set_rules('ws_pre', 'URL Administrador Pre', 'trim');
        $this->form_validation->set_rules('ws_pro', 'URL Administrador Pre', 'trim');        
        if($this->form_validation->run() == FALSE){   
            $this->session->set_flashdata('status', 'Error al momento de guardar el proyecto'); 
            $this->session->set_flashdata('statusType', 'danger');
            redirect(base_url('nuevo-proyecto')); 
        }else{ 
           $data = array(                
               'user' => $this->session->auth_user['id'],
               'nombre' => $this->input->post('nombre'),
               'tipo' => $this->input->post('tipo'),
               'url_admin_pro' => $this->input->post('url_admin_pro'),
               'url_admin_pre' => $this->input->post('url_admin_pre'),
               'url_user_pre' => $this->input->post('url_user_pre'),
               'url_user_pro' => $this->input->post('url_user_pro'),
               'ws_pre' => $this->input->post('ws_pre'),
               'ws_pro' => $this->input->post('ws_pro')
            );
           $registroProyectos = new ProyectosModel;
           $result = $registroProyectos->registroProyectos($data);
           if($result)
           {
               $this->session->set_flashdata('status', 'El proyecto se guardo con éxito');            
               $this->session->set_flashdata('statusType', 'success');   
           }else{
               $this->session->set_flashdata('status', 'Error al momento de guardar el proyecto'); 
               $this->session->set_flashdata('statusType', 'danger');
           } 
           redirect(base_url('nuevo-proyecto'));
        } 
	}
}
