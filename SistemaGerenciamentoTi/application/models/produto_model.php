<?php 
 class Produto_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblprodutos',$data));
    }
     
     public function excluir($id=null){
      $this->db->where('idProduto',$id);
       return($this->db->delete('tblprodutos'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblprodutos',$data));
         
    }

 function  get_produtos_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao',$termo);
     return $this->db->get('tblprodutos')->result();
     $this->db->group_by('descricao');
     }




 

 }
?>