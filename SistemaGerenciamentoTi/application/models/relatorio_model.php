<?php 
 class Relatorio_model extends CI_Model{
   function _contruct(){
      parent::_construct();    
    }   
	//Função que retorna dados da tabela usuario com campo de pesquisa
  function  get_usuarios_likes(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('nome',$termo);
       return $this->db->get('tblusuario')->result();

     }
	 //Função que retorna em ordem alfabetica dados da tabela usuario
    public function relatorio_users(){
        $this->db->order_by('nome','asc');
        return $this->db->get('tblusuario')->result();
   }
//Função que retorna dados da tabela produtos com campo de pesquisa
     function get_produtos_likes(){
      $termo = $this->input->post('pesquisar');
      $this->db->select('*');
      $this->db->like('descricao',$termo);
       return $this->db->get('tblprodutos')->result();
     }
      
   
 //Função que retorna em ordem alfabetica dados da tabela usuario
      public function relatorio_produtos(){
        $this->db->order_by('descricao','asc');
        return $this->db->get('tblprodutos')->result();
   }
   
    //Função que retorna dados da tabela compras com campo de pesquisa
  public function get_compras()

{ 
  $termo = $this->input->post('pesquisar');
  $this->db->like('descricao',$termo); 
  $this->db->select('*');    
   $this->db->from('tblcompras');
   $this->db->join('tblprodutos', 'tblcompras.produto = tblprodutos.idProduto');
   $this->db->join('tblfornecedores', 'tblcompras.fornecedor = tblfornecedores.idFornecedor');
   $this->db->distinct();
  return $this->db->get()->result();

   }
   // Função que retorna o intervalos entre as compras feitas em determinado periodo
   public function compras_periodo($dataInicial = null,$dataFinal = null){
	
         if($dataInicial == null || $dataFinal == null){
            $dataInicial = date('Y-m-d');
            $dataFinal = date('Y-m-d');
        }
        $query = "SELECT * FROM tblcompras inner join tblprodutos inner join tblfornecedores WHERE data_compra BETWEEN ? AND ? group by produto ";
        

        return $this->db->query($query, array($dataInicial,$dataFinal))->result();
      
    }

    //Função que retorna valor unitário
       function  get_compras_por_valor($valor1,$valor2){
     $query = "SELECT * FROM tblcompras inner join tblprodutos inner join tblfornecedores WHERE valor_unitario BETWEEN ? AND ? group by valor_unitario";
        
        return $this->db->query($query, array($valor1,$valor2))->result();
        
        }
            
      //Função que retorna dados da tabela agendamentos com campo de pesquisa
      public function get_agendamentos()
    {  
       return $this->db->get('tblagendar_manutencao')->result();
      
      }
      //Função que retorna dados da tabela agendamentos em ordem
        public function relatorio_agendamentos(){
        $this->db->order_by('title','asc');
        return $this->db->get('tblagendar_manutencao')->result();
   }
        // Função que retorna o intervalos entre os agendamentos feitos em determinado periodo
      public function agendamentos_periodos($dataInicial = null,$dataFinal = null){
            if($dataInicial == null || $dataFinal == null){
                $dataInicial = date('Y-m-d');
                $dataFinal = date('Y-m-d');
            }
            $query = "SELECT * FROM tblagendar_manutencao WHERE start BETWEEN ? AND ?";
            return $this->db->query($query, array($dataInicial,$dataFinal))->result();
        }
              // Função que retorna os dados da tabela fornecedores com o campo de pesquisa
           public function get_fornecedores(){
              $this->db->select('*');
			        $this->db->join('estado','estado = idestado','inner');
              $this->db->join('cidade','cidade = idcidade','inner');
		            return $this->db->get('tblfornecedores')->result();

          }
         // Função que retorna os dados da tabela fornecedores com o campo de pesquisa
           public function  get_equipamentos(){
            $termo = $this->input->post('pesquisar');
            $this->db->select('*');
            $this->db->like('descricao',$termo);
            return $this->db->get('tblequipamentos')->result();
      }

      
      // Função que retorna os dados da tabela manutenção com campos de pesquisa
            public function  get_manutencao(){
              $this->db->select('*');
              $termo = $this->input->post('pesquisar');
              $this->db->like('descricao',$termo);
			        $this->db->join('tblservico','servico = idServico','inner');
              $this->db->join('tblequipamentos','equipamento = idEquipamento','inner');
               return $this->db->get('tblmanutencao')->result();
            }
             // Função que retorna o intervalo de datas do período de manutenção
         public function manutencoes_periodos($dataInicial = null,$dataFinal = null){
            if($dataInicial == null || $dataFinal == null){
                $dataInicial = date('Y-m-d');
                $dataFinal = date('Y-m-d');
            }
            $query = "SELECT * FROM tblmanutencao inner join tblequipamentos inner join tblservico WHERE data_manutencao BETWEEN ? AND ? group by data_manutencao";
            return $this->db->query($query, array($dataInicial,$dataFinal))->result();
        }
           // Função que retorna os dados da tabela licenças de softwares
            function get_licencas(){
              $termo = $this->input->post('pesquisar');
              $this->db->select('*');
              $this->db->like('descricao_software',$termo);
              return $this->db->get('tbllicencasoftware')->result();
     }

  
       
 }
?>