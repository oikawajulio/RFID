<?php 
 class Licencas_model extends CI_Model{
      
      
    function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tbllicencasoftware',$data));
    }
     public function excluir($id=null){
     $this->db->where('idlicenca',$id);
       return($this->db->delete('tbllicencasoftware'));
      
   }
   
	

     function  get_Licencas_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao_software',$termo);
      return $this->db->get('tbllicencasoftware')->result();
     }
}

 
 

?>