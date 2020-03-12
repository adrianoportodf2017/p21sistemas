<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller {

    /**
     * author: Adriano Alves
     * email: adrianobr00@gmail.com
      função para reduzir e padronizar as outras classes
     *
     */
    public function __construct() {
        parent::__construct();


        if ((!session_id()) || (!$this->session->userdata('logado'))) {
            redirect('login');
        } else if ($this->session->userdata('status') == 'desativado') {
            redirect('usuarios/ativar');
        }
         else if ($this->session->userdata('perfil') == 'Administrador') {
            redirect('Cpanel');
        } else       
        
         {
            $this->load->model('MinhaConta_Model', '', true);
            $this->load->model('Usuarios_model', '', true);
            $this->load->model('Dashboard_Model', '', true);
            $this->load->library('session');
            $this->load->helper(array('form', 'codegen_helper'));
        }
    }

    public function index() {
        
    }

}
