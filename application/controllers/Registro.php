<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	/**
	 * Bilbomatica.es. 
     * Leandro Canelon Creator
	 */
    public function __construct()
    {
        parent::__construct();// you have missed this line.        
        $this->load->library('form_validation');
        $this->load->model('UsersModel');
    }  
	public function index()    
	{  
        $this->load->view('part/header');
        $this->load->view('registro');
        $this->load->view('part/footer');
	}
    public function nuevo_usuario()
    { 
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|alpha');        
        $this->form_validation->set_rules('apellido', 'Apellido', 'trim|required|alpha');
        $this->form_validation->set_rules('cargo', 'Cargo', 'trim');
        $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email|is_unique[users.correo]');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required');
        $this->form_validation->set_rules('repeatPass', 'Repetir Contraseña', 'trim|required|matches[pass]');
        if($this->form_validation->run() == FALSE){ 
            $this->index();            
        }else{
           $data = array(
               'nombre' => $this->input->post('nombre'),
               'apellido' => $this->input->post('apellido'),
               'cargo' => $this->input->post('cargo'),
               'correo' => $this->input->post('correo'),
               'pass' => $this->input->post('pass') 
           );
           $registroUsuario = new UsersModel;
           $result = $registroUsuario->registroUsuario($data);
           if($result)
           {
               $this->session->set_flashdata('status', 'El registro se completó con éxito');
               redirect(base_url('login'));
           }else{
               $this->session->set_flashdata('status', 'Error al momento de crear el usuario');
               redirect(base_url('registro'));
           }
        }
 
    }
}
