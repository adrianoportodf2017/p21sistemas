<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/* 	/*

  para acessar o my controller entre em core my controle,

  listagem de usuarios
 
 
 
  usuarios estao tudo lá

  descricao  do PerfilUser
 *
 * @author Adriano
 */

class Minhaconta extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('MinhaConta_Model', '', true);
        $this->dados['usuario'] = $this->MinhaConta_Model->getDados();
    }

    public function index() {
        $this->load->view('tema/header');
        // $this->load->view('tema/menssagens');
        $this->load->view('minhaconta/MinhaConta', $this->dados['usuario']);
        $this->load->view('tema/footer');
    }

    public function update() {



        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');
        $id = $this->session->userdata('id');
        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'telefone' => $this->input->post('telefone'),
            'celular' => $this->input->post('celular'),
            'numero' => $this->input->post('numero'),
            'bairro' => $this->input->post('bairro'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'));
        if ($this->MinhaConta_Model->update(array('idUsuarios' => $id), $data) == true) {
            $response = array("success" => true);
            echo json_encode($response);
        } else {
            $response = array("error" => true);
            echo json_encode($response);
            ;
        }
    }

    public function alterarSenha()

    /*     * *func?o para alterar a senha
      @resSenha = variavel vai informar se a senha esta errada ou senhas estao corretas e mandar mensagem para usuario
     * * */ {


        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');


        $id = $this->MinhaConta_Model->getDados();


        $oldSenha = $this->input->post('oldSenha');
        $senha = $this->input->post('novaSenha');
        $Csenha = $this->input->post('confirmarSenha');



        if (!password_verify($oldSenha, $id->senha)) {
            $response = array("senha_invalida" => true);
            echo json_encode($response);
        } elseif ($senha != $Csenha) {
            $response = array("senha_igual" => true);
            echo json_encode($response);
        } else {
            $response = $this->MinhaConta_Model->alterarSenha($senha);
            if ($response) {
                $response = array("success" => true);
                echo json_encode($response);
            } else {
                $response = array("success" => false);
                echo json_encode($response);
            }
        }
    }

}

//$this->db->where('idUsuarios', $this->session->userdata('id'));
             // $this->db->update('usuarios', $data);
             //echo json_encode($insert);
    
        
        
        
        
    
                
                
                
                 
                
                
    
    
    
    


            
        
        
        
        
    
                
                
                
                 
                
                
    
    
    
    

