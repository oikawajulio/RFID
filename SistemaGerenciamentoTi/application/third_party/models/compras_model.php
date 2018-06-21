<?php 
 class Compras_model extends CI_Model{
       function _contruct(){
      parent::_construct();    
    }  
       
       public function cadastrar($data) {
       
        return ($this->db->insert('tblcompras',$data));
    }
     public function excluir(){
      $this->db->where('idCompras',$id);
       return($this->db->delete('tblcompras'));
      
   }
   
 function  get_compras_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('produto',$termo);
      return $this->db->get('tblcompras')->result();
     }

public function get_faturas()
{   $this->db->select('faturas.numero, faturas.valor, faturas.status, cliente.nome, cliente.sobrenome');
    $this->db->from('faturas');
    $this->db->join('cliente', 'faturas.id_cliente = cliente.id');
    $query = $this->db->get();
    $result = $query->result();
    return $result;
   }
}
 
 
 

?>