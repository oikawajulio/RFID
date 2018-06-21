<?php 
 class Manutencao_model extends CI_Model{
     function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblManutencao',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idManutencao',$id);
       return($this->db->delete('tblManutencao'));
      
   }
   
	   function  get_Manutencao_like(){
      $termo = $this->input->post('pesquisar');
       $this->db->select('*');
			        $this->db->join('tblservico','servico = idServico','inner');
              $this->db->join('tblequipamentos','equipamento = idEquipamento','inner');
      $this->db->like('descricao_manutencao',$termo);
      return $this->db->get('tblManutencao')->result();
     }
}

 
 

?>