<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Usuario extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }
      public function index($indice=null){
           $this->verificar_sessao();
            $this->db->select('*');
            $dados['usuarios'] = $this->db->get('tblusuario')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            if($indice==1){
                $data['msg'] = "Usuário cadastrado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);  
            }else if($indice==2){
                $data['msg'] = "Não foi possível cadastrar o usuário.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==3){
                $data['msg'] = "Usuário excluído com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==4){
                $data['msg'] = "Não foi possível excluir o usuário.";
                $this->load->view('includes/msg_erro',$data);
            }else if($indice==5){
                $data['msg'] = "Usuário atualizado com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==6){
                $data['msg'] = "Não foi possível atualizar o usuário.";
                $this->load->view('includes/msg_erro',$data);
            }
          $this->load->view('usuarios/listar_usuario',$dados);
          }
       
	   
	   /*public function gerenciar(){

        $this->load->model('usuario_model');

		$config = array(
			"base_url" => base_url('usuario/'),
			"per_page" => 3,
			"num_links" => 3,
			"uri_segment" => 3,
			"total_rows" => $this->usuario_model->CountAll(),
			"full_tag_open" => "<ul class='pagination'>",
			"full_tag_close" => "</ul>",
			"first_link" => FALSE,
			"last_link" => FALSE,
			"first_tag_open" => "<li>",
			"first_tag_close" => "</li>",
			"prev_link" => "Anterior",
			"prev_tag_open" => "<li class='prev'>",
			"prev_tag_close" => "</li>",
			"next_link" => "Próxima",
			"next_tag_open" => "<li class='next'>",
			"next_tag_close" => "</li>",
			"last_tag_open" => "<li>",
			"last_tag_close" => "</li>",
			"cur_tag_open" => "<li class='active'><a href='#'>",
			"cur_tag_close" => "</a></li>",
			"num_tag_open" => "<li>",
			"num_tag_close" => "</li>"
           
		);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
       $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['usuario'] = $this->usuario_model->GetAll('nome','asc',$config['per_page'],$offset);
         
       }*/

        public function cadastro()
 {          $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('usuarios/cadastro_usuario');
          
            
 }

   public function cadastrar() {
        $this->verificar_sessao();
        $data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['endereco'] = $this->input->post('endereco');
        $data['email'] = $this->input->post('email');
        $data['senha'] = $this->input->post('senha');
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('nivel');
        $this->load->model('usuario_model','usuario');
        if ($this->usuario->cadastrar($data)) {
            redirect('usuario/1');
            
        }else{
             redirect('usuario/2');
        }
    }
     public function excluir($id=null){
       $this->verificar_sessao();
       $this->db->where('idusuario',$id);
       if($this->db->delete('tblusuario')){
          redirect('usuario/3');
       }
       else{
           redirect('usuario/4');
       }
   }
      public function atualizar($id=null,$indice=null){
       $this->verificar_sessao();
       $this->db->where('idusuario',$id);
       $data['usuario'] = $this->db->get('tblusuario')->result();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
             if($indice==1){
                $data['msg'] = "Senha atualizada com sucesso.";
                $this->load->view('includes/msg_sucesso',$data);
            }else if($indice==2){
                $data['msg'] = "Não foi possível atualizar a senha do usuário.";
                $this->load->view('includes/msg_erro',$data);
            }
			$this->load->view('usuarios/editar_usuario',$data);
          
   }
     public function salvar_atualizacao() {
        $this->verificar_sessao();
        $id = $this->input->post('idusuario');
		$data['nome'] = $this->input->post('nome');
        $data['cpf'] = $this->input->post('cpf');
        $data['endereco'] = $this->input->post('endereco');
        $data['email'] = $this->input->post('email');
        $data['status'] = $this->input->post('status');
        $data['nivel'] = $this->input->post('nivel');
        $this ->db->where('idusuario',$id);
		if ($this->db->update('tblusuario',$data)) {
            redirect('usuario/5');
            
        }else{
             redirect('usuario/6');
        }
    }
	  public function salvar_senha(){
	   $this->verificar_sessao();
	   $id = $this->input->post('idusuario');
	   
	   $senha_antiga =md5($this->input->post('senha_antiga'));
	   $senha_nova = md5($this->input->post('senha_nova'));
	   
	   $this->db->select('senha');
	   $this->db->where('idusuario',$id);
	   
	   $data['senha'] = $this->db->get('tblusuario')->result();
	   $dados['senha'] = $senha_nova;
	   
	   if($data['senha'][0]->senha==$senha_antiga){
	     $this->db->where('idusuario',$id);
		 $this->db->update('tblusuario',$dados);
		  redirect('atualizar/'.$id.'/1');
	   }
	   else{
	   redirect('atualizar/'.$id.'/2');
	   
	   }
	  
	  }
        public function Pesquisar($value=null){
         $this->load->model('usuario_model','usuario');
         $dados['usuarios'] = $this->usuario->get_usuarios_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('usuarios/listar_usuario',$dados);
        
  }
  

	
    
    
}

?>

































