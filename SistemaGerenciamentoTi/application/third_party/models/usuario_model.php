<?php 
 class Usuario_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblusuario',$data));
    }
     public function excluir($id=null){
     
       $this->db->where('idusuario',$id);
       return($this->db->delete('tblusuario'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblusuario',$data));
         
    }

 function  get_usuarios_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('nome',$termo);
    return $this->db->get('tblusuario')->result();
     }
 }

?>