<?php 
 class Impressoras_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblImpressoras',$data));
    }
     
     public function excluir($id=null){
      $this->db->where('idImpressoras',$id);
       return($this->db->delete('tblImpressoras'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblImpressoras',$data));
         
    }

 function  get_Impressoras(){
    
     return $this->db->get('tblImpressoras')->result();
     }
}
?>