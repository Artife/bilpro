<?php 
/**
 * Leandro Canelon
 */
class ProyectosModel extends CI_Model {
         
    public function registroProyectos($data)
    { 
        return $this->db->insert('proyectos', $data);
    } 
}

?>