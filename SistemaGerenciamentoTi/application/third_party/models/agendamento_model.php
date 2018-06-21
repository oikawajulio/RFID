<?php 
 class Agendamento_model extends CI_Model{
     function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblagendarmanutencao',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idAgendar',$id);
       return($this->db->delete('tblagendarmanutencao'));
      
   }
   
	 
}

 
 

?>