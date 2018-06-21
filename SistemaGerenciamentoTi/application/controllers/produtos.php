<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Produtos extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
            $dados['produtos'] = $this->db->get('tblprodutos')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Produto cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar o produto.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Produto excluído com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir o Produto.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Produto atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar o Produto.";
                $this->load->view('includes/msg_erro',$data);
            
               }else if($indice==7){
                $data['msg'] = "Baixa do produto efetuada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==8){
                $data['msg'] = "Não foi possível efetuar a baixa do produto.";
                $this->load->view('includes/msg_erro',$data);
            }
            
            $this->load->view('produtos/listar_Produtos',$dados);
          
 }
        
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('produtos/cadastro_produtos');
          
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['descricao'] = $this->input->post('descricao');
        $data['preco'] = $this->input->post('preco');
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['qtd_estoque'] = $this->input->post('qtd_estoque');
        $data['estoque_minimo'] = $this->input->post('estoque_minimo');
        $this->load->model('produto_model','produtos');
        if ($this->produtos->cadastrar($data)) {
            redirect('produtos/1');
            
        }else{
             redirect('produtos/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idProduto',$id);
       if($this->db->delete('tblprodutos')){
          redirect('produtos/3');
       }
       else{
           redirect('produtos/4');
       }
   }
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idProduto',$id);
       $data['produtos'] = $this->db->get('tblprodutos')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
           $this->load->view('produtos/editar_produtos',$data);
           
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idProduto');
	    $data['descricao'] = $this->input->post('descricao');
        $data['preco'] = $this->input->post('preco');
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['qtd_estoque'] = $this->input->post('qtd_estoque');
        $data['estoque_minimo'] = $this->input->post('estoque_minimo');
        $this ->db->where('idProduto',$id);
		if ($this->db->update('tblprodutos',$data)) {
            redirect('produtos/5');
            
        }else{
             redirect('produtos/6');
        }
      
     }
      public function Pesquisar($value=null){
         $this->load->model('produto_model','produtos');
         $dados['produtos'] = $this->produtos->get_produtos_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('produtos/listar_produtos',$dados);
        }
        
     
    }