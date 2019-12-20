<?php

class Usuarios_model extends CI_Model {

    /**
     * author: Adriano Alves
     * email: adrianobr00@gmail.com
     *
     */
    function __construct() {
        parent::__construct();
    }

    function getUsuarios() {

        $this->db->from('usuarios');
        $this->db->limit('100');
        $query = $this->db->get();
        if ($query) {
            $result = $query->result();
            return $result;
        } else {
            $result = false;
        }
    }

    function getDados($id) {

        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function check_email($email) {
        $this->db->where('email', $email);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }
             
    
       
    public function verificar_cadastro($email) {
         
             
             return true;
             
 
        
    }


    function add($data) {
       $this->db->insert('usuarios', $data);     
        if ($this->db->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    function getById($id) {
        $this->db->where('idUsuarios', $id);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function edit($idUsuario, $data) {
       $this->db->where('idUsuarios', $idUsuario);
       $query = $this->db->update('usuarios', $data);
        return $this->db->affected_rows();
    }

    function delete($table, $fieldID, $ID) {
        $this->db->where($fieldID, $ID);
        $this->db->delete($table);
        if ( $this->db->affected_rows() == '1') 
            {
            return true;            
            }
        else
            {
            return false;            
            }
    }
       

       
}
