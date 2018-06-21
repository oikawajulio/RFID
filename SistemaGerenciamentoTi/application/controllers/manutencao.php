<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Manutencao extends CI_Controller {
 
 
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
			$this->db->join('tblservico','servico = idServico','inner');
            $this->db->join('tblequipamentos','equipamento = idEquipamento','inner');
            $dados['manutencao'] = $this->db->get('tblmanutencao')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Manutenção cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar a manutenção.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Manutenção excluída com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir a manutenção.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Manutenção atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar a manutenção.";
                $this->load->view('includes/msg_erro',$data);
            }
            $this->load->view('manutencao/listar_manutencao',$dados);
            
 }
        public function cadastro()
 {          $dados['servicos'] = $this->db->get('tblservico')->result();
            $dados['equipamentos'] = $this->db->get('tblequipamentos')->result();
            $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('manutencao/cadastro_manutencao',$dados);
           
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['descricao_manutencao'] = $this->input->post('descricao_manutencao');
        $data['servico'] = $this->input->post('servico');
        $data['equipamento'] = $this->input->post('equipamento');
        $data['data_manutencao'] = $this->input->post('data_manutencao');
        $data['departamento'] = $this->input->post('departamento');
        $data['situacao'] = $this->input->post('situacao');
        $data['tipo_manutencao'] = $this->input->post('tipo_manuencao');
        $data['observacoes'] = $this->input->post('observacoes');
        $this->load->model('manutencao_model','manutencao');
        if ($this->manutencao->cadastrar($data)) {
            redirect('manutencao/1');
            
        }else{
             redirect('manutencao/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idManutencao',$id);
       if($this->db->delete('tblManutencao')){
          redirect('manutencao/3');
       }
       else{
           redirect('manutencao/4');
       }
   }
   public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $data['servicos'] = $this->db->get('tblservico')->result(); 
	   $data['equipamentos'] = $this->db->get('tblequipamentos')->result(); 
	   $this->db->where('idManutencao',$id);
       $data['manutencao'] = $this->db->get('tblmanutencao')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('manutencao/editar_manutencao',$data);
          
   }
   
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idManutencao');
	    $data['descricao_manutencao'] = $this->input->post('descricao_manutencao');
        $data['servico'] = $this->input->post('servico');
        $data['equipamento'] = $this->input->post('equipamento');
        $data['departamento'] = $this->input->post('departamento');
        $data['situacao'] = $this->input->post('situacao');
        $data['tipo_manutencao'] = $this->input->post('tipo_manuencao');
        $data['data_manutencao'] = $this->input->post('data_manutencao');
        $data['observacoes'] = $this->input->post('observacoes');
        $this ->db->where('idManutencao',$id);
		if ($this->db->update('tblManutencao',$data)) {
            redirect('manutencao/5');
            
        }else{
             redirect('manutencao/6');
        }
    }
	  
        public function Pesquisar($value=null){
         $this->load->model('manutencao_model','manutencao');
         $dados['manutencao'] = $this->manutencao->get_Manutencao_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('manutencao/listar_manutencao',$dados);
         
    }

     public function dExcel(){
		$this->load->library('export_excel');
		 $this->load->model('manutencao_model','manutencao');
        $result=$this->manutencao->get_Manutencao_like();
		$this->export_excel->to_excel($result, 'lista_de_manutencoes');
	}
}
?>



