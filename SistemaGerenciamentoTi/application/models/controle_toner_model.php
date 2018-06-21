<?php 
 class Controle_toner_model extends CI_Model{
     function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblcontrole_toner',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idcontrole',$id);
       return($this->db->delete('tblcontrole_toner'));
      
   }
 
	   function  get_Manutencao_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('marca',$termo);
      return $this->db->get('tblcontrole_toner')->result();
     }
          
}

 
 

?>