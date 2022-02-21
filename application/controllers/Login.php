<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->view('part/header');
        $this->load->view('login');
        $this->load->view('part/footer');
	}

	public function validar()
	{   
        $this->form_validation->set_rules('correo', 'Correo', 'trim|required|valid_email');
        $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required');

		if($this->form_validation->run() == FALSE){  
			$this->session->set_flashdata('status', 'Error al validar el usuario y contraseña');
			$this->session->set_flashdata('statusType', 'danger');
            redirect(base_url('login'));           
        }else{
			$data = array( 
				'correo' => $this->input->post('correo'),
				'pass' => $this->input->post('pass') 
			);
			$validarUsuario = new UsersModel;
			$result = $validarUsuario->validarUsuario($data);  
			
			if($result == FALSE){ 
				$this->session->set_flashdata('status', 'Error al validar el usuario y contraseña');
				$this->session->set_flashdata('statusType', 'danger');
				redirect(base_url('login'));
			}	
			$auth = [
				'id' => $result->id,
				'nombre' => $result->nombre,
				'apellido' => $result->apellido,
				'cargo' => $result->cargo,
				'foto' => $result->foto,
				'logger' => true
			];
			
			if($result->status == 2)
			{	
				//usuario desactivado 
				$this->session->set_flashdata('status', 'El usuario se enecuentra deshabilitado');
				$this->session->set_flashdata('statusType', 'danger');
				redirect(base_url('login'));
			}
			else if($result->status == 1)
			{
				//redirect a home  
				$this->session->set_userdata('authenticated', '1');
				$this->session->set_userdata('auth_user', $auth);
				$this->session->set_flashdata('status', 'Bienvenido a bilpro el sistema para generar procedimientos');
				$this->session->set_flashdata('statusType', 'success');
				redirect(base_url('home'));
			}else{ 
				//Error al validar el usuario y contraseña
				$this->session->set_flashdata('status', 'Error al validar el usuario y contraseña');
				$this->session->set_flashdata('statusType', 'danger');
				redirect(base_url('login'));
			}
		}	
			
	}

}
