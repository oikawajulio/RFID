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
 public function relatorio_users(){
        $this->db->order_by('nome','asc');
        return $this->db->get('tblusuario')->result();
   }
   function  get_produtos_likes(){
    $termo = $this->input->post('pesquisar');
    $this->db->select('*');
    $this->db->like('descricao',$termo);
     return $this->db->get('tblprodutos')->result();
   }
      public function relatorio_produtos(){
      $this->db->order_by('descricao','asc');
      return $this->db->get('tblprodutos')->result();
 }

 }


 
?>