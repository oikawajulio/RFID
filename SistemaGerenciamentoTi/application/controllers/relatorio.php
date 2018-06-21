<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Relatorio extends CI_Controller {

  public function verificar_sessao(){
          if($this->session->userdata('logado')==false){
                redirect('dashboard/login');
          }
  }     
  
  
   public function index($indice=null)
     {    
            $this->verificar_sessao();
            $this->load->view('includes/html_header');
            $this->load->view('includes/menu');
            $this->load->view('relatorios/relatorio_view');
           }
         //Listar Usuário
     public function listar_Usuarios($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_usuarios_likes();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('relatorios/usuarios/listar_rel_Usuarios',$dados);
        }
        // Pesquisar usuário pelo nome
    
    public function pesquisar_Nome_Usuario($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_usuarios_likes();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('relatorios/usuarios/listar_rel_Usuarios',$dados);
   }
   // Carrega a view relatorio usuário
   public function relatorio_usuario($value=null)
   { $this->load->model('relatorio_model','relatorio');
     $this->load->view('includes/html_header');
    $this->load->view('includes/menu');
    $this->load->view('relatorios/usuarios/relatorio_usuario');
   }
   
   // Imprime relatório de usuário
   public function imprimir_relatorio_usuario(){
    $this->load->model('relatorio_model','relatorio');
    $data['usuarios'] = $this->relatorio->relatorio_users();
    $this->load->helper('mpdf');
    $html = $this->load->view('imprimir/imprimir_Usuarios', $data, true);
    pdf_create($html, 'relatorio_user' . date('d/m/y'), TRUE);
   }
      
      //Dados Relatórios de Produtos
   public function listar_produtos($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['relatorios'] = $this->relatorio->get_produtos_likes();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
       $this->load->view('relatorios/produtos/listar_rel_produtos',$dados);
       }
	   //Função que pesquisa o produto por descrição
     public function pesquisa_Descricao_Produto($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['relatorios'] = $this->relatorio->get_produtos_likes();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
      $this->load->view('relatorios/produtos/listar_rel_produtos',$dados);
      }

      // Função que busca quantidade máxima e mínima em estoque
    public function pesquisa_qtd(){
        $qtd_estoque = $this->input->post('qtd_estoque');
        $qtd_minima = $this->input->post('qtd_minima');
        $this->load->model('relatorio_model','relatorio');
        $data['produtos'] = $this->relatorio->get_qtd_produtos( $qtd_estoque, $qtd_minima);
         $this->load->helper('mpdf');
        $html = $this->load->view('imprimir/imprimir_Compras', $data, true);
        pdf_create($html, 'relatorio_Produtos' . date('d/m/y'), TRUE);
    
    }
      //Função que visualiza relatorio de produtos
      public function relatorio_produto($value=null)
      { $this->load->model('relatorio_model','relatorio');
        $this->load->view('includes/html_header');
       $this->load->view('includes/menu');
       $this->load->view('relatorios/produtos/relatorio_produto');
      }
     //Função que imprime em pdf relatorio de produtos
     public function imprimir_relatorio_produto(){
      $this->load->model('relatorio_model','relatorio');
      $data['produtos'] = $this->relatorio->relatorio_produtos();
      $this->load->helper('mpdf');
     $html = $this->load->view('imprimir/imprimir_Produtos', $data, true);
    pdf_create($html, 'relatorio_Produto' . date('d/m/y'), TRUE);
      
    }

          //Função que lista as compras
   public function listar_compras($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['r'] = $this->relatorio->get_compras();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
       $this->load->view('relatorios/compras/listar_rel_compras',$dados);
       }
	    //Função que pesquisa o produto por descrição
     public function pesquisa_Descricao_Compras($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['relatorios'] = $this->relatorio->get_compras_likes();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
      $this->load->view('relatorios/compras/listar_rel_compras',$dados);
      }
        //Função que pesquisa o produto por descrição
     public function pesquisa_Produto($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['r'] = $this->relatorio->get_compras();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
      $this->load->view('relatorios/compras/listar_rel_compras',$dados);
      }
   //Função que pesquisa dados da compras por determinado período
    public function compras_periodo(){
        $dataInicial = $this->input->post('dataInicial');
        $dataFinal = $this->input->post('dataFinal');
        $this->load->model('relatorio_model','relatorio');
        $data['compras'] = $this->relatorio->compras_periodo($dataInicial,$dataFinal);
         $this->load->helper('mpdf');
        $html = $this->load->view('imprimir/imprimir_Compras', $data, true);
        pdf_create($html, 'Relatorio_Compras' . date('d/m/y'), TRUE);
    
    }
      //Função que pesquisa dados da compras por valor do produto
    public function compras_por_valor(){
        $valorInicial = $this->input->post('valorInicial');
        $valorFinal = $this->input->post('valorFinal');
        $this->load->model('relatorio_model','relatorio');
        $data['compras'] = $this->relatorio->get_compras_por_valor( $valorInicial, $valorFinal);
         $this->load->helper('mpdf');
        $html = $this->load->view('imprimir/imprimir_Compras', $data, true);
        pdf_create($html, 'relatorio_Compras' . date('d/m/y'), TRUE);
    
    }
        //Função que lista as compras
      public function relatorio_compras($value=null)
      { $this->load->model('relatorio_model','relatorio');
        $this->load->view('includes/html_header');
       $this->load->view('includes/menu');
       $this->load->view('relatorios/compras/relatorio_compras');
      }
       //Função que imprime em pdf dados da compras
     public function imprimir_relatorio_compras(){
      $this->load->model('relatorio_model','relatorio');
      $data['compras'] = $this->relatorio->get_compras();
      $this->load->helper('mpdf');
     $html = $this->load->view('imprimir/imprimir_compras', $data, true);
    pdf_create($html, 'relatorio_Compras' . date('d/m/y'), TRUE);
      
    }

 //Função que lista dados dos agendamentos
   public function listar_agendamentos($value=null){
      $this->load->model('relatorio_model','relatorio');
      $dados['agendar'] = $this->relatorio->get_agendamentos();
      $this->load->view('includes/html_header');
      $this->load->view('includes/menu');
       $this->load->view('relatorios/agendamentos/listar_rel_Agendamentos',$dados);
       }

              //Função que lista dados dos agendamentos por determinado período
    public function agendamentos_periodos(){
        $dataInicial = $this->input->post('dataInicial');
        $dataFinal = $this->input->post('dataFinal');
        $this->load->model('relatorio_model','relatorio');
        $data['agendar'] = $this->relatorio->agendamentos_periodos($dataInicial,$dataFinal);
         $this->load->helper('mpdf');
        $html = $this->load->view('imprimir/imprimir_Agendamentos', $data, true);
        pdf_create($html, 'relatorio_Agendamentos' . date('d/m/y'), TRUE);
    
    }
      //Função que lista relatorio dos agendamentos
      public function relatorio_agendamentos($value=null)
      { $this->load->model('relatorio_model','relatorio');
        $this->load->view('includes/html_header');
       $this->load->view('includes/menu');
       $this->load->view('relatorios/agendamentos/relatorio_agendamentos');
      }
     //Função que imprime em pdf dos agendamentos
     public function imprimir_relatorio_agendamentos(){
      $this->load->model('relatorio_model','relatorio');
      $data['agendar'] = $this->relatorio->relatorio_agendamentos();
      $this->load->helper('mpdf');
     $html = $this->load->view('imprimir/imprimir_agendamentos', $data, true);
    pdf_create($html, 'relatorio_Agendamentos' . date('d/m/y'), TRUE);
      
    }

             //Função que lista os dados dos fornecedores
		public function listar_fornecedores($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_fornecedores();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('relatorios/fornecedores/listar_rel_Fornecedores',$dados);
        }
        // Função que Pesquisar usuário pelo nome
    
    public function pesquisar_nome($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_fornecedores_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('relatorios/fornecedores/listar_rel_Fornecedores',$dados);
   }
   // Função Carrega a view relatorio fornecedores
   public function relatorio_fornecedores($value=null)
   { $this->load->model('relatorio_model','relatorio');
     $this->load->view('includes/html_header');
    $this->load->view('includes/menu');
    $this->load->view('relatorios/fornecedores/relatorio_fornecedores');
   }
   
   // Função que Imprime relatório de fornecedores em pdf
   public function imprimir_relatorio_fornecedores(){
    $this->load->model('relatorio_model','relatorio');
    $data['fornecedores'] = $this->relatorio->get_fornecedores();
    $this->load->helper('mpdf');
    $html = $this->load->view('imprimir/imprimir_Fornecedores', $data, true);
    pdf_create($html, 'relatorio_fornecedores' . date('d/m/y'), TRUE);
   }
// Função que Lista dados dos Equipamentos

public function listar_equipamentos($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_equipamentos();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('relatorios/equipamentos/listar_rel_Equipamentos',$dados);
        }
        // Função que Pesquisar equipamento pelo nome
    
    public function pesquisar_descricao_equipamento($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_equipamentos_like();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('relatorios/equipamentos/listar_rel_Equipamentos',$dados);
   }
   // Função que Carrega a view relatorio fornecedores
   public function relatorio_equipamentos($value=null)
   { $this->load->model('relatorio_model','relatorio');
     $this->load->view('includes/html_header');
    $this->load->view('includes/menu');
    $this->load->view('relatorios/equipamentos/relatorio_equipamentos');
   }
   
   // Função que Imprime relatório de equipamentos em pdf
   public function imprimir_relatorio_equipamentos(){
    $this->load->model('relatorio_model','relatorio');
    $data['equipamentos'] = $this->relatorio->get_equipamentos();
    $this->load->helper('mpdf');
    $html = $this->load->view('imprimir/imprimir_Equipamentos', $data, true);
    pdf_create($html, 'relatorio_equipamentos' . date('d/m/y'), TRUE);
   }
//Função que Lista as  Manutenções

public function listar_manutencao($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_manutencao();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('relatorios/manutencao/listar_rel_Manutencao',$dados);
        }
 public function pesquisar_descricao_manutencao($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['manutencao'] = $this->relatorio->get_manutencao();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('relatorios/manutencao/listar_rel_Manutencao',$dados);
   }
   public function manutencoes_periodos(){
       $dataInicial = $this->input->post('dataInicial');
        $dataFinal = $this->input->post('dataFinal');
        $this->load->model('relatorio_model','relatorio');
        $data['manutencao'] = $this->relatorio->manutencoes_periodos($dataInicial,$dataFinal);
         $this->load->helper('mpdf');
        $html = $this->load->view('imprimir/imprimir_Manutencao', $data, true);
        pdf_create($html, 'Relatorio_Manutencao' . date('d/m/y'), TRUE);
    
    }
      
    // Função que Carrega a view relatorio manutencao
   public function relatorio_manutencao($value=null)
   { $this->load->model('relatorio_model','relatorio');
     $this->load->view('includes/html_header');
    $this->load->view('includes/menu');
    $this->load->view('relatorios/manutencao/relatorio_manutencao');
   }
   
   // Função que Imprime relatório de manutecncao
   public function imprimir_relatorio_manutencao(){
    $this->load->model('relatorio_model','relatorio');
    $data['manutencao'] = $this->relatorio->get_manutencao();
    $this->load->helper('mpdf');
    $html = $this->load->view('imprimir/imprimir_Manutencao', $data, true);
    pdf_create($html, 'relatorio_manutencao' . date('d/m/y'), TRUE);
   }
           //Função que Lista as Licenças de Softwares
public function listar_licencas($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_licencas();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
          $this->load->view('relatorios/licencas_softwares/listar_rel_Licencas',$dados);
        }
        //Função que  Pesquisar licencas de Software por descrição
    
    public function pesquisar_descricao_software($value=null){
         $this->load->model('relatorio_model','relatorio');
         $dados['relatorios'] = $this->relatorio->get_licencas();
         $this->load->view('includes/html_header');
         $this->load->view('includes/menu');
         $this->load->view('relatorios/licencas_softwares/listar_rel_Licencas',$dados);
   }
   // Função Carrega a view relatorio licenças de softwares
   public function relatorio_licencas($value=null)
   { $this->load->model('relatorio_model','relatorio');
     $this->load->view('includes/html_header');
    $this->load->view('includes/menu');
    $this->load->view('relatorios/licencas_softwares/relatorio_licencas');
   }
   
   // Função Imprime relatório de Licenças de Softwares
   public function imprimir_relatorio_licencas(){
    $this->load->model('relatorio_model','relatorio');
    $data['licencas'] = $this->relatorio->get_licencas();
    $this->load->helper('mpdf');
    $html = $this->load->view('imprimir/imprimir_Licencas', $data, true);
    pdf_create($html, 'relatorio_Licenças' . date('d/m/y'), TRUE);
   }
}
    
?>