<?php 
 class Equipamento_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblequipamentos',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idEquipamento',$id);
       return($this->db->delete('tblequipamentos'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblequipamentos',$data));
         
    }

 function  get_equipamentos_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao',$termo);
    return $this->db->get('tblequipamentos')->result();
     }
 }

?>