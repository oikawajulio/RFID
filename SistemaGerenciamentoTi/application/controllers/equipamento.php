<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Equipamento extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {    
         $this->verificar_sessao();
            $this->db->select('*');
            $dados['equipamentos'] = $this->db->get('tblequipamentos')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Equipamento cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);  
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar o equipamento.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Equipamento excluído com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir o usuário.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Equipamento atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar o equipamento.";
                $this->load->view('includes/msg_erro',$data);
            }
            $this->load->view('equipamentos/listar_equipamento',$dados);
          
 }
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('equipamentos/cadastro_equipamento');
          
            
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['descricao'] = $this->input->post('descricao');
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['departamento'] = $this->input->post('departamento');
        $data['situacao'] = $this->input->post('situacao');
          $this->load->model('equipamento_model','equipamento');
        if ($this->equipamento->cadastrar($data)) {
            redirect('equipamento/1');
            
        }else{
             redirect('equipamento/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idEquipamento',$id);
       if($this->db->delete('tblEquipamentos')){
          redirect('equipamento/3');
       }
       else{
           redirect('equipamento/4');
       }
   }
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idEquipamento',$id);
       $data['equipamento'] = $this->db->get('tblEquipamentos')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
         	$this->load->view('equipamentos/editar_equipamento',$data);
          
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idEquipamento');
		$data['descricao'] = $this->input->post('descricao');
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['codigo_patrimonio'] = $this->input->post('codigo_patrimonio');
        $data['departamento'] = $this->input->post('departamento');
        $data['situacao'] = $this->input->post('situacao');
        $this ->db->where('idEquipamento',$id);
		if ($this->db->update('tblEquipamentos',$data)) {
            redirect('equipamento/5');
            
        }else{
             redirect('equipamento/6');
        }
    }
	 
	     public function Pesquisar($value=null){
         $this->load->model('equipamento_model','equipamento');
         $dados['equipamentos'] = $this->equipamento->get_equipamentos_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          
          $this->load->view('equipamentos/listar_equipamento',$dados);
        
  }
     
    
    
}

?>



