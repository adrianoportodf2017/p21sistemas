<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard_Model
 *
 * @author Adriano
 */
class MinhaConta_Model extends CI_Model
{

    /**
     * author: Ramon Silva
     * email: adrianobr00@gmail.com
     *
     */

    function __construct()
    {
        parent::__construct();
}
 public function getDados()
    {
        $this->db->where('idUsuarios', $this->session->userdata('id'));
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }
 public function update($where, $data)
    {
        $this->db->update('usuarios', $data, $where);
        return $this->db->affected_rows();
    }
	
  public function alterarSenha($senha)
    {
        $this->db->set('senha', password_hash($senha, PASSWORD_DEFAULT));
        $this->db->where('idUsuarios',  $this->session->userdata('id'));
        $this->db->update('usuarios');

        if ($this->db->affected_rows() >= 0) {
            return true;
        }
        return false;
    }	
	
	
     }               
    
    
    