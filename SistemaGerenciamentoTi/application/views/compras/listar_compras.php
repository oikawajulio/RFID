<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
 <div class="col-md-10">
 <h3 class="page-header">
   <i class="fa fa-shopping-cart" aria-hidden="true"></i> COMPRAS</h3>
 </div>
 <div class=" col-md-2">
 <a class = "btn btn-primary btn-block" href = "<?= base_url()?>compras/cadastro" ><i class="fa fa-plus " aria-hidden="true"></i>  Nova Compra </a>
 </div>
  <div class="col-md-12" style="padding-bottom: 10px">
    <form action="<?=base_url()?>compras/pesquisar" method="post">
     <div class="input-group">
   <input type="text" class="form-control" placeholder="Pesquisar..." id="pesquisa"/>
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
						Lista de Compras
					</h3>
				</div>
 <table class="table table-striped table-hover">
 <tr>
 
 <th>Produto</th>
 <th>Quantidade</th>
 <th>Valor Unitário</th>
 <th>Data da Compra</th>
 <th>Fornecedor</th>
 <th></th>
 <th></th>
 </tr>
 <?php foreach ($compras as $comp) { ?>
 <tr>
 
 <td><?= $comp->descricao;?></td>
 <td><?= $comp->quantidade;?></td>
 <td><?= number_format($comp->valor_unitario,2, ',', '.');?></td>
 <td><?= $data_compra = date(('d/m/Y'),strtotime($comp->data_compra));?></td>
 <td><?= $comp->razaoSocial;?></td>


<td>
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> <span class="fa fa-eye" aria-hidden="true"></span></button>
 <a href="<?= base_url('compras/atualizar/'.$comp->idCompras)?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil"></span></a>
 <a href="<?= base_url('compras/excluir/' .$comp->idCompras) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir os dados da Compra?');"><span class="fa fa-trash" aria-hidden="true"></span></a>

 
 </td>
 </tr>
 <?php } ?>
 </table>
</div>
 <nav>

 </div>
</div>
</div>
		</div>
	</div>
</div>
