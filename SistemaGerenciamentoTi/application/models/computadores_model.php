<?php 
 class Computadores_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblcomputadores',$data));
    }
     
     public function excluir($id=null){
      $this->db->where('idComputador',$id);
       return($this->db->delete('tblcomputadores'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblcomputadores',$data));
         
    }

 function  get_computadores(){
     
   return $this->db->get('tblcomputadores')->result();
     }

 }
?>