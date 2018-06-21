<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {
     
       function __construct() 
        { 
        parent::__construct(); 
       
        $this->load->helper('string'); 
        }
      public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
      }
    public function index() {
        $this->verificar_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('dashboard');
    
      
    }

 public function login(){
        $this->load->view('includes/html_header');
        $this->load->view('login');
        $this->load->view('includes/html_footer');
    }
    public function logar(){
        $email = $this->input->post('email');
        $senha = ($this->input->post('senha'));
        $this->db->where('senha',$senha);
        $this->db->where('email',$email);
        $this->db->where('status',1);
        $data['usuario'] = $this->db->get('tblusuario')->result();
        if(count($data['usuario'])==1){
            $dados['nome'] = $data['usuario'][0]->nome;
            $dados['id'] = $data['usuario'][0]->idusuario;
            $dados['logado'] = true;
            $this->session->set_userdata($dados);
            redirect('dashboard');
           
        }
        else{
            redirect('dashboard/login');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('dashboard');
    }
      
    function getdata(){
        $this->load->model('produto_model','produtos'); 
		$data=$this->produtos->get_produtos_like();
        print_r(json_encode($data, true));
    } 
  }




