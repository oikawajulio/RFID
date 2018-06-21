<?php 
 class Baixa_model extends CI_Model{
     function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblbaixa_estoque',$data));
        
    }
     public function excluir($id=null){
     
       $this->db->where('idbaixa_estoque',$id);
       return($this->db->delete('tblbaixa_estoque'));
      
   }
   
	  
}

 
 

?>