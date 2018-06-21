<?php 
 class Fornecedor_model extends CI_Model{
      
      
    function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblfornecedores',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idFornecedor',$id);
       return($this->db->delete('tblfornecedores'));
      
   }
   
	

     function  get_fornecedores_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('razaoSocial',$termo);
      return $this->db->get('tblfornecedores')->result();
     }
}

 
 

?>