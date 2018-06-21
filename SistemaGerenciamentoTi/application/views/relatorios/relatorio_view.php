<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="col-md-12">
		<h2 class="page-header">
	<i class="fa fa-print" aria-hidden="true"></i>   Relatórios
		</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
				<h4>Relatórios do Sistema</h4>
				</div>
				<div class="panel-body">
				<div class="container-fluid">
		<div class="row">
		
			<div class="col-md-6">
				<p>
					<a href="<?= base_url('relatorio/relatorio_usuario')?>" title="Relatório de Usuário" data-toggle="popover" data-trigger="hover" data-content="Veja a Lista de Usuários com seus respectivos detalhes" class="btn btn-sq btn-info">
						<i class="fa fa-user fa-5x"></i><br/>Usuários
					</a>
					 Detalhes dos Usuários
				</p>
			
			</div>
			<div class="col-md-5 col-md-offset-1">
				<p>
					<a href="<?= base_url('relatorio/relatorio_produto')?>" title="Relatórios de Produtos" data-toggle="popover" data-trigger="hover" data-content="Gere Relatórios detalhados de todos produtos." class="btn btn-sq btn-info">
						<i class="fa fa-shopping-basket fa-5x"></i><br/> Produtos
					</a>
						Detalhes dos Produtos
			</div>
			<div class="col-md-6">
				<p>
					<a href="<?= base_url('relatorio/relatorio_fornecedores')?>" title="Relatórios de Fornecedores" data-toggle="popover" data-trigger="hover" data-content="Visualize os dados de seus fornecedores" class="btn btn-sq btn-info">
						<i class="fa fa-users fa-5x"></i><br/> Fornecedores
					</a>
							 Detalhes dos Fornecedores
				</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<p>
					<a href="<?= base_url('relatorio/relatorio_compras')?>" title="Relatórios de Compras" data-toggle="popover" data-trigger="hover" data-content="Visualize dados das Compras" class="btn btn-sq btn-info">
						<i class="fa fa-shopping-cart fa-5x"></i><br/> Compras
					</a>
					 Detalhes das Compras
						</p>
			</div>
			<div class="col-md-6"> 
				<p>
					<a href="#"  title="Relatorio de Estoque" data-toggle="popover" data-trigger="hover" data-content="Consulte as informações sobre o estoque " class="btn btn-sq btn-info">
						<i class="fa fa-cubes fa-5x"></i><br/> Estoque
					</a>
								Detalhes do Estoque
				</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<p>
					<a href="<?= base_url('relatorio/relatorio_manutencao')?>" title="Relatórios de manutenções" data-toggle="popover" data-trigger="hover" data-content="Verifique os detalhes de todas manutenções" class="btn btn-sq btn-info">
						<i class="fa fa-wrench fa-5x"></i><br/> Manutenções
					</a>
			 Detalhes Manutenções
					
			</div>
			<div class="col-md-6">
				<p>
					<a href="<?= base_url('relatorio/relatorio_agendamentos')?>" title="Relatório de Agendamentos" data-toggle="popover" data-trigger="hover" data-content="Confira os detalhes dos agendamentos de manutenções." class="btn btn-sq btn-info">
						<i class="fa fa-calendar fa-5x"></i><br/> Agenda Manutenções
					</a>
							 Detalhes dos Agendamentos
				</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<p>
					<a href="<?= base_url('relatorio/relatorio_equipamentos')?>" title="Relatórios de Equipamentos" data-toggle="popover" data-trigger="hover" data-content="Confira os detalhes dos equipamentos" class="btn btn-sq btn-info ">
						<i class="fa fa-desktop fa-5x"></i><br/> Equipamentos
					</a>
					Detalhes dos Equipamentos
			</div>
			<div class="col-md-6">
				<p>
					<a href="#" title="Relatório de Ativos de TI" data-toggle="popover" data-trigger="hover" data-content="Confira detalhadamente o ativos de TI"  class="btn btn-sq btn-info">
						<i class="fa fa-check-square-o fa-5x"></i><br/> Controle de Ativos
					</a>
					 Detalhes de Ativos TI
				</p>
			</div>
			<div class="col-md-5 col-md-offset-1">
				<p>
					<a href="<?= base_url('relatorio/relatorio_licencas')?>"  title="Relatório de Licenças de Software" data-toggle="popover" data-trigger="hover" data-content="Acompanhe o controle de Licenças de Software" class="btn btn-sq btn-info">
						<i class="fa fa-newspaper-o fa-5x"></i><br/> Licenças de Softwares
					</a>
							 Detalhes das Licenças 
			</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


		<script>
     $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>