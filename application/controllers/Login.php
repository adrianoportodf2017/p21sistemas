<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 *função login
	 */
	 
	 
	 
	    public function __construct()
        {
        parent::__construct();
		 $this->load->model('Dashboard_Model', '', true);	
       }
		
    
	
	 
	 
	public function index()
	{   
            
    $this->load->view('login/login'); 
    }
    
     public function verificarLogin()
    {

        header('Access-Control-Allow-Origin: ' . base_url());
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        header('Access-Control-Max-Age: 1000');
        header('Access-Control-Allow-Headers: Content-Type');

            $email = $this->input->post('email');
            $password = $this->input->post('senha');
	     $this->load->model('Dashboard_Model');
            $user = $this->Dashboard_Model->check_credentials($email);
               if ($user) {
                if (password_verify($password, $user->senha)) {
                    $session_data = array('nome' => $user->nome, 'email' => $user->email, 'id' => $user->idUsuarios, 'logado' => true);
                    $this->session->set_userdata($session_data);
                    $response = array("success" => true);
                    echo json_encode($response);        
                } else {
                    $response = array("success" => false);
                  echo json_encode($response);
                }
            }
            else{
                  $response = array("success" => false);
                  echo json_encode($response);;
	
    }}
   
    
    
        private function chk_date($data_banco)
    {

        $data_banco = new DateTime($data_banco);
        $data_hoje = new DateTime("now");

        return $data_banco < $data_hoje;
    }
    
    
        public function sair()
    {
        session_destroy();
        redirect('login');
    }

}