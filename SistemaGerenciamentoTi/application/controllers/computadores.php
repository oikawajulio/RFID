<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Computadores extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
            $dados['computadores'] = $this->db->get('tblcomputadores')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('ativos/ativos',$dados);
          
 }
 
        
    public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('computadores/ativos');
          
 }

 public function cadastrar() {
        $this->verificar_sessao();
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
         $data['departamento'] = $this->input->post('departamento');
        $data['hd'] = $this->input->post('hd');
        $data['memoria'] = $this->input->post('memoria');
        $data['pacote_office'] = $this->input->post('pacote_office');


        $this->load->model('computadores_model','computadores');
        if ($this->computadores->cadastrar($data)) {
            redirect('ativos/1');
       }else{
             redirect('ativos/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idComputador',$id);
       if($this->db->delete('tblcomputadores')){
          redirect('computadores/3');
       }
       else{
           redirect('computadores/4');
       }
   }
    public function listar_computadores($value=null){
      $this->load->model('computadores_model','computador');
      $dados['computadores'] = $this->computador->get_computadores();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
       $this->load->view('controle_ativos/listar_computadores',$dados);
       } 
      
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idComputador',$id);
       $data['computadores'] = $this->db->get('tblcomputadores')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
           $this->load->view('computadores/editar_computadores',$data);
           
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idComputador');
	   $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['modelo'] = $this->input->post('modelo');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['departamento'] = $this->input->post('departamento');
        $data['hd'] = $this->input->post('hd');
        $data['memoria'] = $this->input->post('memoria');
        $data['pacote_office'] = $this->input->post('pacote_office');
        $this ->db->where('idComputador',$id);
		if ($this->db->update('tblcomputadores',$data)) {
            redirect('computadores/5');
            
        }else{
             redirect('computadores/6');
        }
      
     }
      public function Pesquisar($value=null){
         $this->load->model('computadores_model','computadores');
         $dados['computadores'] = $this->produtos->get_produtos_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('computadores/listar_computadores',$dados);
        

     }
    }