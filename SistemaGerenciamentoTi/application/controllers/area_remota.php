<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Area_Remota extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
            $dados['area_remota'] = $this->db->get('tblAreaRemota')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('ativos/ativos',$dados);
          
 }
 
        
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('area_remota/ativos');
          
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['login'] = $this->input->post('login');
        $data['senha'] = $this->input->post('senha');
        $data['nome_usuario'] = $this->input->post('nome_usuario');
        $data['departamento'] = $this->input->post('departamento');
        $this->load->model('remota_model','remota');
        if ($this->remota->cadastrar($data)) {
            redirect('ativos/8');
       }else{
             redirect('ativos/9');
             
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idAreaRemota',$id);
       if($this->db->delete('tblAreaRemota')){
          redirect('ativos/3');
       }
       else{
           redirect('ativos/4');
       }
   }
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idAreaRemota',$id);
       $data['area_remota'] = $this->db->get('tblAreaRemota')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
           $this->load->view('computadores/editar_arearemota',$data);
           
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idComputador');
	    $data['login'] = $this->input->post('login');
        $data['senha'] = $this->input->post('senha');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['modelo'] = $this->input->post('modelo');
       
        $this ->db->where('idAreaRemota',$id);
		if ($this->db->update('tblAreaRemota',$data)) {
            redirect('ativos/5');
            
        }else{
             redirect('ativos/6');
        }
      
     }
      public function Pesquisar($value=null){
         $this->load->model('remota_model','remota');
         $dados['remora'] = $this->remota->get_arearemota_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('arearemota/listar_arearemota',$dados);
        

     }
    }