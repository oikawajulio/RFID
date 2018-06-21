<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <div class="col-md-10">
 <h3 class="page-header"><i class="fa fa-desktop " aria-hidden="true"></i> EQUIPAMENTOS </h3>
 </div>

 <div class=" col-md-2">
 <a class = "btn btn-primary btn-block" href = "<?= base_url()?>equipamento/cadastro"><span class="fa fa-plus" aria-hidden="true"></span>  Novo Equipamento </a>
 </div>
  <div class="col-md-12" style="padding-bottom: 10px">
    <form action="<?=base_url()?>equipamento/pesquisar" method="post">
      <div class="input-group">
            <input type="text" class="form-control" placeholder="Pesquisar..." id="pesquisar" name="pesquisar" />
            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-search"></span>
        </button>
            </div>
  </div>
  </form>
  </div>

 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">
						Lista de Equipamentos
					</h3>
				</div>
	 <table class="table table-striped table-hover">
	 <tr>
	 <th>Cód. de Patrimônio</th>
	 <th>Nome do Equipamento</th>
	 <th> Marca</th>
	 <th> Modelo</th>
	 <th>Departamento</th>
	 <th>Situação</th>
	 <th> </th>
	 <th> </th>
	 

 </tr>
 
 <?php foreach ($equipamentos as $equi) { ?>
 <tr>
 <td><?= $equi->codigo_patrimonio;?></td>
 <td><?= $equi->descricao;?></td>
 <td><?= $equi->marca;?></td>
 <td><?= $equi->modelo;?></td>
 <td><?= $equi->departamento;?></td>
 <td><?= $equi->situacao == 1 ? 'Ativo' : 'Inativo'; ?></td>
 
 <td>
 
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> <span class="fa fa-eye" aria-hidden="true"></span></button>
 <a href="<?= base_url('equipamento/atualizar/' . $equi->idEquipamento) ?>" class="btn btn-primary btn-group">   <span class="glyphicon glyphicon-pencil"></span></a>
 <a href="<?= base_url('equipamento/excluir/' . $equi->idEquipamento) ?>" class="btn btn-danger btn-group"  onclick="return confirm('Deseja realmente os dados do equipamento?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
 
 </td>
 </tr>
 <?php } ?>
 </table>
</div>


 </div>
</div>
</div>
		</div>
	</div>
</div>





