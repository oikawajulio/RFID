<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Impressoras extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
            $dados['impressoras'] = $this->db->get('tblImpressoras')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('ativos/ativos',$dados);
     }
 
        
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('impressoras/ativos');
          
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['departamento'] = $this->input->post('departamento');
        $data['status'] = $this->input->post('status');
       


        $this->load->model('impressoras_model','impressoras');
        if ($this->impressoras->cadastrar($data)) {
            redirect('ativos/1');
       }else{
             redirect('ativos/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idImpressora',$id);
       if($this->db->delete('tblImpressoras')){
          redirect('impressoras/3');
       }
       else{
           redirect('impressoras/4');
       }
   }
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idImpressoras',$id);
       $data['impressoras'] = $this->db->get('tblImpressoras')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
           $this->load->view('impressoras/editar_impressoras',$data);
           
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idImpressora');
	    $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['departamento'] = $this->input->post('departamento');
        $data['status'] = $this->input->post('status');
        $this ->db->where('idImpressora',$id);
		if ($this->db->update('tblImpressora',$data)) {
            redirect('impressoras/5');
            
        }else{
             redirect('impressoras/6');
        }
      
     }
     public function listar_impressoras($value=null){
      $this->load->model('impressoras_model','impressora');
      $dados['impressoras'] = $this->impressora->get_Impressoras();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
       $this->load->view('controle_ativos/listar_impressoras',$dados);
       } 
      public function Pesquisar($value=null){
         $this->load->model('Impressoras_model','impressoras');
         $dados['impressoras'] = $this->impressora->get_Impressoras();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('impressoras/listar_computadores',$dados);
        

     }
    }