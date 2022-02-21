<?php 
/**
 * Leandro Canelon
 */
class Authentication extends CI_Model {
    
    public function __construct()
    {
       if(!$this->session->has_userdata('authenticated'))
       {
        //perdida de session 
        $this->session->set_flashdata('status', 'Es necesario realizar login para visualizar esta ventana');
        $this->session->set_flashdata('statusType', 'danger');
        redirect(base_url('login'));
       }
    } 
} 
?>