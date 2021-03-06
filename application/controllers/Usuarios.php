<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 /**
     * Classe Usuarios .

     * Gerenciamento de usuários e atualizaçoes e cadastro e exclusão
     *
     * Essa aplicação requer CodeIgniter 3.+.
     *
     * @package    Project extends CodeIgniter
     * @subpackage 
     * @author     Adriano alves <adrianobr00@gmail.com>
     * @since      v1.0
     * @category   Controller
     */
class Usuarios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios_model', '', true);
        $this->load->library('email');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('form_validation');
    }
    
    

    public function index() {
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        } else if (($this->session->userdata('perfil') == 'Administrador')) {
            $this->load->view('tema/header');
            $this->data['usuarios'] = $this->Usuarios_model->getUsuarios();
            $this->load->view('usuarios/usuarios', $this->data);
            $this->load->view('modal/modal', $this->data);
            $this->load->view('tema/footer');
        }
        else{
            
            echo 'vc nao tem autorização';
            
        }
    }


    
    
     /**
      |--------------------------------------------------------------------------
      | cadastrarUsuario
      |--------------------------------------------------------------------------
      |     Função para novos usuarios acessar sistema, cadastro feito na tela de login
      *  funcao: envia o email informando para o usuario que o registro foi recebido
      |
      |  @return array json_encode
     */


    function cadastrarUsuario() {


        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');
        $senha = $this->input->post('password');
        $data = array(
            'nome' => $this->input->post('nome'),
            'email' => $this->input->post('email'),
            'senha' => password_hash($senha, PASSWORD_DEFAULT) /*  SENHA PADRAO PARA NOVOS USUARIOS 123456 */

            
        );
        $email = $this->input->post('email');
        $emailcheck = $this->Usuarios_model->check_email($email);
        if ($emailcheck) {
            $response = array("erroremail" => true);
            echo json_encode($response);
        } else if ($this->Usuarios_model->add($data) == true) {
            $response = array("success" => true);
            echo json_encode($response);
        } else {
            $response = array("success" => false);
            echo json_encode($response);
        }
    }

    
      /**
      |--------------------------------------------------------------------------
      | ativar
      |--------------------------------------------------------------------------
      |     Função para ativar novos usuarios, verifica se o usuario recebeu o email com o token de ativação
      *  funcao: envia o email informando para o usuario que o registro foi recebido
      |
     */
    function ativar() {
        $email = $this->input->get('email');
           $dados = $this->Usuarios_model->verificar_cadastro($email);
      
            $this->dados['ativado'] = $dados;
            $this->load->view('ativar/ativar', $this->dados);
        }
    
      /**
      |--------------------------------------------------------------------------
      | userEdit
      |--------------------------------------------------------------------------
   
      | FUNCAO PARA LISTAR DADOS DO USUARIO PARA EDI??O 
      
     */

    

    function userEdit() {
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
            
        } else if (($this->session->userdata('perfil') == 'Administrador')) {
            $id = $this->uri->segment(3);
            header('Access-Control-Allow-Origin: ' . base_url());
            header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
            header('Access-Control-Max-Age: 1000');
            header('Access-Control-Allow-Headers: Content-Type');
            $this->load->view('tema/header');
            $this->data['usuarios'] = $this->Usuarios_model->getUsuarios();
            $this->data['userEdit'] = $this->Usuarios_model->getByid($id);
            //var_dump( $this->dados['usuarios']);die;
            $this->load->view('usuarios/userEdit', $this->data);
            //$this->load->view('tema/topo');
            $this->load->view('modal/modal', $this->data);
            $this->load->view('tema/footer');
        } else {
            echo 'Você não tem autorização';
        }
    }

    /**
     *  FUNCAO para setar dados dentro do banco
     * 
     * 
     * @return array json_encode
     * 
     *  */

    function userEditar() {
        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
             } else if (($this->session->userdata('perfil') == 'Administrador')) {
   
            $id = $this->input->post('idUsuarios');

            $data = array(
                'nome' => $this->input->post('nome'),
                'email' => $this->input->post('email'),
                'telefone' => $this->input->post('telefone'),
                'perfil' => $this->input->post('perfil'),
                'cargo' => $this->input->post('cargo'),
                'celular' => $this->input->post('celular'));


            if ($this->Usuarios_model->edit(array('idUsuarios' => $id), $data) == true) {
                $response = array("success" => true);
                echo json_encode($response);
            } else {
                $response = array("error" => true);
                echo json_encode($response);
            }
        }
          else {
             
               echo 'Você não tem autorização';
    }}

    /* FUNCAO PARA ExcLUIR USUARIOS */

 }
