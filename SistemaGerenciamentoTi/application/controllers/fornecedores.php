<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Fornecedores extends CI_Controller {
 
 
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
			$this->db->join('estado','estado = idestado','inner');
            $this->db->join('cidade','cidade = idcidade','inner');
		    $dados['fornecedores'] = $this->db->get('tblfornecedores')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Fornecedor cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar o fornecedor.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Fornecedor excluído com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir o fornecedor.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Fornecedor atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar o usuário.";
                $this->load->view('includes/msg_erro',$data);
            }
            $this->load->view('fornecedores/listar_fornecedores',$dados);
            
 }
        public function cadastro()
 {          $dados['cidades'] = $this->db->get('cidade')->result();
            $dados['estados'] = $this->db->get('estado')->result();
            $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('fornecedores/cadastro_fornecedores',$dados);
           
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['razaoSocial'] = $this->input->post('razaoSocial');
        $data['nome_fantasia'] = $this->input->post('nome_fantasia');
        $data['inscricaoEstadual'] = $this->input->post('inscricaoEstadual');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['endereco'] = $this->input->post('endereco');
        $data['telefone'] = $this->input->post('telefone');
        $data['logradouro'] = $this->input->post('logradouro');
        $data['bairro'] = $this->input->post('bairro');
        $data['complemento'] = $this->input->post('complemento');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $this->load->model('fornecedor_model','fornecedores');
        if ($this->fornecedores->cadastrar($data)) {
            redirect('fornecedores/1');
            
        }else{
             redirect('fornecedores/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idFornecedor',$id);
       if($this->db->delete('tblfornecedores')){
          redirect('fornecedores/3');
       }
       else{
           redirect('fornecedores/4');
       }
   }
   public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $data['cidades'] = $this->db->get('cidade')->result(); 
	   $data['estados'] = $this->db->get('estado')->result(); 
	   $this->db->where('idFornecedor',$id);
       $data['fornecedores'] = $this->db->get('tblfornecedores')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('fornecedores/editar_fornecedores',$data);
          
   }
   
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idFornecedor');
	    $data['razaoSocial'] = $this->input->post('razaoSocial');
       $data['nome_fantasia'] = $this->input->post('nome_fantasia');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['inscricaoEstadual'] = $this->input->post('inscricaoEstadual');
        $data['telefone'] = $this->input->post('telefone');
        $data['endereco'] = $this->input->post('endereco');
        $data['logradouro'] = $this->input->post('logradouro');
        $data['complemento'] = $this->input->post('complemento');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $this ->db->where('idFornecedor',$id);
		if ($this->db->update('tblfornecedores',$data)) {
            redirect('fornecedores/5');
            
        }else{
             redirect('fornecedores/6');
        }
    }
	  
        public function Pesquisar($value=null){
         $this->load->model('fornecedor_model','fornecedores');
         $dados['fornecedores'] = $this->fornecedores->get_fornecedores_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('fornecedores/listar_fornecedores',$dados);
         
    }

      	public function dExcel(){
		$this->load->library('export_excel');
		$this->load->model('fornecedor_model','fornecedores');
        $result =$this->fornecedores->get_fornecedores_like();
		$this->export_excel->to_excel($result, 'lista_de_fornecedores');
	}
}
?>



