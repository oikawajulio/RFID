<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Compras extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

    public function index($indice = null) {
        $this->verificar_sessao();
        $this->db->select('*');
        $this->db->join('tblprodutos', 'produto = idProduto', 'inner');
        $this->db->join('tblfornecedores', 'fornecedor = idFornecedor', 'inner');
        $dados['compras'] = $this->db->get('tblcompras')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        if ($indice == 1) {
            $data['msg'] = "Compra cadastrada com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Não foi possível cadastrar os dados da compra.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Compra excluído com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível excluir os dados da compra.";
            $this->load->view('includes/msg_erro', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Dados da compra atualizado com sucesso.";
            $this->load->view('includes/msg_sucesso', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível atualizar os dados da compra.";
            $this->load->view('includes/msg_erro', $data);
        }
        $this->load->view('compras/listar_compras', $dados);
    }

    public function cadastro() {
        $dados['produtos'] = $this->db->get('tblprodutos')->result();
        $dados['fornecedor'] = $this->db->get('tblfornecedores')->result();
        $this->verificar_sessao();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('compras/cadastro_compras', $dados);
    }

    public function cadastrar() {
        $this->verificar_sessao();
        $data['produto'] = $this->input->post('produto');
        $data['quantidade'] = $this->input->post('quantidade');
        $data['valor_unitario'] = $this->input->post('valor_unitario');
        $data['data_compra'] = date('Y-m-d', strtotime($data['data_compra']));
        $data['fornecedor'] = $this->input->post('fornecedor');
        $data['recebimento'] = date('Y-m-d', strtotime($data['recebimento']));
        $data['emissao_nota'] =date('Y-m-d', strtotime($data['emissão_nota']));
        $data['nota_fiscal'] = date('Y-m-d', strtotime($data['nota_fiscal']));
        $data['valor_total'] = $this->input->post('valor_total');
        $this->load->model('compras_model', 'compras');
        if ($this->compras->cadastrar($data)) {
            redirect('compras/1');
        } else {
            redirect('compras/2');
        }
    }

 public function cadastrarNovoProduto(){
      $this->verificar_sessao();
        $data['descricao'] = $this->input->post('descricao');
        $data['preco'] = $this->input->post('preco');
        $data['marca'] = $this->input->post('marca');
        $data['modelo'] = $this->input->post('modelo');
        $data['qtd_estoque'] = $this->input->post('qtd_estoque');
        $data['estoque_minimo'] = $this->input->post('estoque_minimo');
      $this->load->model('produto_model','produtos');
      if ($this->produtos->cadastrar($data)) {
       redirect('compras/cadastro/');
        } 
 }

    public function excluir($id = null) {
        $this->verificar_sessao();
        $this->db->where('idCompras', $id);
        if ($this->db->delete('tblcompras')) {
            redirect('compras/3');
        } else {
            redirect('compras/4');
        }
    }

    public function atualizar($id = null, $indice = null) {
        $this->verificar_sessao();
        $data['produtos'] = $this->db->get('tblprodutos')->result();
        $data['fornecedores'] = $this->db->get('tblfornecedores')->result();
        $this->db->where('idCompras', $id);
        $data['compras'] = $this->db->get('tblcompras')->result();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('compras/editar_compras', $data);
    }

    public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idCompras');
        $data['produto'] = $this->input->post('produto');
        $data['quantidade'] = $this->input->post('quantidade');
        $data['valor_unitario'] = $this->input->post('valor_unitario');
        $data['data_compra'] = $this->input->post('data_compra');
        $data['fornecedor'] = $this->input->post('fornecedor');
        $data['recebimento'] = $this->input->post('recebimento');
        $data['emissao_nota'] = $this->input->post('emissao_nota');
        $data['nota_fiscal'] = $this->input->post('nota_fiscal');
        $data['valor_total'] = $this->input->post('valor_total');
        $this->db->where('idCompras', $id);
        if ($this->db->update('tblcompras', $data)) {
            redirect('compras/5');
        } else {
            redirect('compras/6');
        }
    }

    public function Pesquisar($value = null) {

        $this->load->model('compras_model', 'compras');
        $dados['compras'] = $this->compras->get_compras_like();
        $this->load->view('includes/html_header');
        $this->load->view('includes/menu');
        $this->load->view('compras/listar_compras', $dados);
    }
 

}
?>



