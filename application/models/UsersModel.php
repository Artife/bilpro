<?php 
/**
 * Leandro Canelon
 */
class UsersModel extends CI_Model {
    
    public function validarUsuario($data)
    {   
        $this->db->select('*');
        $this->db->where('correo', $data['correo']);
        $this->db->where('pass', $data['pass']);
        $this->db->from('users');
        $this->db->limit(1);    
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->row();
        }else{
            return false;
        } 
    } 
    public function registroUsuario($data)
    { 
        return $this->db->insert('users', $data);
    } 
}

?>