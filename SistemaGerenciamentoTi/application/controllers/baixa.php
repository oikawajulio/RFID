<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Baixa extends CI_Controller {
 
 
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
			$this->db->join('tblprodutos','produto = idProduto','inner');
            $dados['baixas'] = $this->db->get('tblbaixa_estoque')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
         
         $this->load->view('produtos/listar_produtos',$dados);
     }
        public function cadastro()
 {          $dados['produtos'] = $this->db->get('tblprodutos')->result();
            $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('baixa_estoque/baixa_estoque',$dados);
           
 }
  public function cadastrar() {
        $this->verificar_sessao();
        $data['produto'] = $this->input->post('produto');
        $data['data_baixa'] = $this->input->post('data_baixa');
        $data['quantidade'] = $this->input->post('quantidade');
         $this->load->model('baixa_model','baixa');
        if ($this->baixa->cadastrar($data)) {
            redirect('produtos/7');
            
        }else{
             redirect('produtos/8');
        }
    }
    
}
?>



