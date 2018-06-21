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

 function  get_produtos_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao',$termo);
     return $this->db->get('tblcomputadores')->result();
     }



public function get_faturas()
{
    $this->db->select('faturas.numero, faturas.valor, faturas.status, cliente.nome, cliente.sobrenome');
    $this->db->from('faturas');
    $this->db->join('cliente', 'faturas.id_cliente = cliente.id');
    $query = $this->db->get();
    $result = $query->result();

    return $result;
  }
 }
?>