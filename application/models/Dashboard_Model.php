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
class Dashboard_Model extends CI_Model {

    /**
     * author: Ramon Silva
     * email: adrianobr00@gmail.com
     *
     */
    function __construct() {
        parent::__construct();
    }

    public function check_credentials($email) {

        $this->db->where('email', $email);
        $this->db->limit(1);
        return $this->db->get('usuarios')->row();
    }

    public function xml($data) {

        $query = 'INSERT IGNORE INTO xml (`nome`, `razao`, `documento`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `tabeliao`, `ativo`) VALUES ("' . $data['nome'] . '", "' . $data['razao'] . '" , "' . $data['documento'] . '", "' . $data['cep'] . '", "' . $data['endereco'] . '", "' . $data['bairro'] . '", "' . $data['cidade'] . '","' . $data['uf'] . '","' . $data['tabeliao'] . '","' . $data['ativo'] . '")' . " ON DUPLICATE KEY UPDATE nome=VALUES(nome), razao=VALUES(razao), documento=VALUES(documento), cep=VALUES(cep),endereco=VALUES(endereco), bairro=VALUES(bairro), cidade=VALUES(cidade), uf=VALUES(uf), tabeliao=VALUES(tabeliao), ativo=VALUES(ativo)";
        $sql = $this->db->query($query);
        
        return $sql;
    }
       public function excel($data) {

        $query = 'INSERT IGNORE INTO xml (`nome`, `razao`, `documento`, `cep`, `endereco`, `bairro`, `cidade`, `uf`, `email`, `telefone`, `tabeliao`, `ativo`) VALUES ("' . $data['nome'] . '", "' . $data['razao'] . '" , "' . $data['documento'] . '", "' . $data['cep'] . '", "' . $data['endereco'] . '", "' . $data['bairro'] . '", "' . $data['cidade'] . '","' . $data['uf'] . '","' . $data['email'] . '","' . $data['telefone'] . '","' . $data['tabeliao'] . '","' . $data['ativo'] . '")' . " ON DUPLICATE KEY UPDATE nome=VALUES(nome), razao=VALUES(razao), documento=VALUES(documento), cep=VALUES(cep),endereco=VALUES(endereco), bairro=VALUES(bairro), cidade=VALUES(cidade), uf=VALUES(uf), email=VALUES(email), telefone=VALUES(telefone),tabeliao=VALUES(tabeliao), ativo=VALUES(ativo)";
        $sql = $this->db->query($query);
        return $sql;
    }

    public function getDadosXML() {
        
        $this->db->from('xml');
        $query = $this->db->get();
        if ($query) {
            $result = $query->result();
            return $result;
        } else {
            $result = false;
        }
    }

    public function excluirItem($idItem) {

        $this->db->where('id', $idItem);
        $this->db->delete('xml');
        if ($this->db->affected_rows() == '1') {
            return true;
        } else {
            return false;
        }
    }

    function qntLinhas() {
        $query = $this->db->get('xml');

        if ($query) {
            return (int) $query->num_rows();
        } else {
            $result = false;
        }
    }

    function addItem($table, $data) {
        $this->db->insert("xml", $data);
        if ($this->db->affected_rows() == '1') {
            return true;
        }

        return false;
    }

    public function editarItem($id, $data) {
        $this->db->where('id', $id);
        $query = $this->db->update('xml', $data);
        $result = $this->db->affected_rows();
        return $result;
    }

}
