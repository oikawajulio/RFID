<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Licencas extends CI_Controller
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
     {      $this->verificar_sessao();
            $this->db->select('*');
		    $dados['licencas'] = $this->db->get('tbllicencasoftware')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Licença de Software cadastrada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar a Licença Software.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Licençao excluída com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir a Licença.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Licença atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar a Licença.";
                $this->load->view('includes/msg_erro',$data);
            }
           $this->load->view("licencas_softwares/listar_licencas_software",$dados);
            
 }
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('licencas_softwares/cadastro_licencas_softwares');
            
           
 }
  public function cadastrar() {
        $this->verificar_sessao();
        $data['descricao_software'] = $this->input->post('descricao_software');
        $data['empresa'] = $this->input->post('empresa');
        $data['chave'] = $this->input->post('chave');
        $data['data_expiracao'] = $this->input->post('data_expiracao');
        $data['situacao'] = $this->input->post('situacao');
        $data['observacoes'] = $this->input->post('observacoes');
        $this->load->model('licencas_model','licenca');
        if ($this->licenca->cadastrar($data)) {
            redirect('licencas/1');
            
        }else{
             redirect('licencas/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idlicenca',$id);
       if($this->db->delete('tbllicencasoftware')){
           redirect('licencas/3');
       }
       else{
           redirect('licencas/4');
       }
   }
   public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idlicenca',$id);
       $data['licencas'] = $this->db->get('tbllicencasoftware')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('licencas_softwares/editar_licencas',$data);
          
   }
   
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idlicenca');
	    $data['descricao_software'] = $this->input->post('descricao_software');
        $data['empresa'] = $this->input->post('empresa');
        $data['chave'] = $this->input->post('chave');
        $data['data_expiracao'] = $this->input->post('data_expiracao');
        $data['situacao'] = $this->input->post('situacao');
        $data['observacoes'] = $this->input->post('observacoes');
        $this->load->model('licencas_model','licenca');
        $this ->db->where('idlicenca',$id);
		if ($this->db->update('tbllicencasoftware',$data)) {
            redirect('licencas/5');
            
        }else{
             redirect('licencas/6');
        }
    }
	  
        public function Pesquisar($value=null){
         $this->load->model('licencas_model','licenca');
         $dados['licencas'] = $this->licenca->get_Lincencas_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('licencas_softwares/listar_licencas',$dados);
         
    }



    
}
