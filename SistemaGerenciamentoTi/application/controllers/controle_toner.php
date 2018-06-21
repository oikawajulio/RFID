<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Controle_toner extends CI_Controller {
 
 
  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null)
     {      $this->verificar_sessao();
            $this->db->select('*');
            $this->db->join('tblimpressoras','impressora = idImpressora','inner');
            $dados['controle'] = $this->db->get('tblcontrole_toner')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $dados['impressora'] = $this->db->get('tblimpressoras')->result();
       }
        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('controle_toner/cadastro_controle_toner');
           
 }


    public function cadastrar() {
        $this->verificar_sessao();
        $data['impressora'] = $this->input->post('impressora');
        $data['departamento'] = $this->input->post('departamento');
        $data['data_inicio'] = $this->input->post('data_inicio');
        $data['data_termino'] = $this->input->post('data_termino');
        $data['status'] = $this->input->post('status');
       $this->load->model('controle_toner_model','controle_toner');
        if ($this->controle_toner->cadastrar($data)) {
            redirect('controle_toner/1');
            
        }else{
             redirect('controle_toner/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idcontrole',$id);
       if($this->db->delete('tblcontrole_toner')){
          redirect('controle_toner/3');
       }
       else{
           redirect('controle_toner/4');
       }
   }
   public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
      $data['tblImpressoras'] = $this->db->get('idImpressora')->result(); 
	   $this->db->where('idImpressora',$id);
       $data['controle_toner'] = $this->db->get('tblImpressoras')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('controle_toner/editar_fornecedores',$data);
          
   }
   
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idcontrole_toner');
	    $data['razaoSocial'] = $this->input->post('razaoSocial');
        $data['impressora'] = $this->input->post('impressora');
        $data['departamento'] = $this->input->post('departamento');
        $data['data_inicio'] = $this->input->post('data_inicio');
        $data['data_termino'] = $this->input->post('data_termino');
        $data['status'] = $this->input->post('status');
        $this ->db->where('idcontrole_toner',$id);
		if ($this->db->update('tblcontrole_toner',$data)) {
            redirect('controle_toner/5');
            
        }else{
             redirect('controle_toner/6');
        }
    }
	  
        public function Pesquisar($value=null){
         $this->load->model('controle_toner_model','controle_toner');
         $dados['controle_toner'] = $this->controle_toner->get_controle_toner_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('controle_toner/listar_controle_toner',$dados);
         
    }
}
?>



