<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ativos extends CI_Controller
{

     public function __construct() {
        Parent::__construct();
      
    }
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
     public function index($indice=null)
     {    
           $this->load->view("controle_ativos/controle_ativos");
            $this->load->view("includes/html_header");
            $this->load->view("includes/menu");
              if($indice==1){
                $data['msg'] = "Computador cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
              
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar o computador.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Impressora cadastrada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível cadastrar a impressora.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==6){
                $data['msg'] = "Controle de toner cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==7){
                $data['msg'] = "Não foi possível cadastrar o controle de toner.";
                $this->load->view('includes/msg_erro',$data);
            
               }else if($indice==8){
                $data['msg'] = "Área remota cadastrada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
           
            }else if($indice==9){
                $data['msg'] = "Não foi possível cadastrar área remota.";
                $this->load->view('includes/msg_erro',$data);
            
            }else if($indice==10){
                $data['msg'] = "Conexões de rede cadastrada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==11){
                $data['msg'] = "Não foi possível cadastrar conexões de rede.";
                $this->load->view('includes/msg_erro',$data);
            
             }else if($indice==12){
                $data['msg'] = "Emails cadastrada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==13){
                $data['msg'] = "Não foi possível cadastrar Emails.";
                $this->load->view('includes/msg_erro',$data);
            }
            
     }
} 