<?php 
 class Relatorio_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
  function  get_usuarios_likes(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('nome',$termo);
       return $this->db->get('tblusuario')->result();
     }
 }

?>