<?php 
 class Compras_model extends CI_Model{
       function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblcompras',$data));
    }
    public function atualiza_estoque(){
        $this->db->query('call entrada_estoque()');
    }
     public function excluir(){
      $this->db->where('idCompras',$id);
       return($this->db->delete('tblcompras'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblcompras',$data));
         
    }
   
 function  get_compras_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
	  $this->db->join('tblprodutos', 'tblcompras.produto = tblprodutos.idProduto');
      $this->db->join('tblfornecedores', 'tblcompras.fornecedor = tblfornecedores.idFornecedor');
      $this->db->like('produto',$termo);
      $this->db->group_by('produto');
      return $this->db->get('tblcompras')->result();
     }


}
 
 
 

?>