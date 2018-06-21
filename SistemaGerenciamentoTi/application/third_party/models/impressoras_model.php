<?php 
 class Impressoras_model extends CI_Model{

      
    function _contruct(){
      parent::_construct();    
    }   
 
       
   public function cadastrar($data) {
       
        return ($this->db->insert('tblImpressoras',$data));
    }
     
     public function excluir($id=null){
      $this->db->where('idImpressoras',$id);
       return($this->db->delete('tblImpressoras'));
      
   }
    public function salvar_atualizacao($data,$id) {
     
		return($this->db->update('tblImpressoras',$data));
         
    }

 function  get_Impressoras_like(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao',$termo);
     return $this->db->get('tblImpressoras')->result();
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