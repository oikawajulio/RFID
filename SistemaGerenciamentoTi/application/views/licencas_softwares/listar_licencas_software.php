<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-md-10">
         <h3 class="page-header"><i class="fa fa-newspaper-o" aria-hidden="true"></i> LICENÇAS DE SOFTWARES</h3>
        </div>
        <div class=" col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>licencas/cadastro"><span class="fa fa-plus" aria-hidden="true"></span>  Nova Licença </a>
    </div>
   
        <div class="col-md-12" style="padding-bottom: 10px">
     
            <form action="<?=base_url()?>licencas/pesquisar" method="post">
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
						Lista de Licenças
					</h3>
				</div>
 <table class="table table-striped table-hover">
 <tr>
           
            <th>Descrição</th>
            <th>Empresa</th>
            <th>Chave Serial</th>
            <th>Data Expiração</th>
            <th></th>
            <th></th>
 </tr>
        <?php foreach ($licencas as $lic) { ?>
       <tr>
           
            <td><?=$lic->descricao_software;?></td>
            <td><?=$lic->empresa;?></td>
            <td><?=$lic->chave;?></td>
			 <td><?= $data_compra = date(('d/m/Y'),strtotime($lic->data_expiracao));?></td>
           
            
          
 <td>
 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> <span class="fa fa-eye" aria-hidden="true"></span></button>
 <a href="<?= base_url('licencas/atualizar/'.$lic->idlicenca)?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil"></span></a>
 <a href="<?= base_url('licencas/excluir/' .$lic->idlicenca) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
 </td>
 </tr>
 <?php } ?>
 </table>
   </div>
                  </div>
             </div>
		</div>
	</div>
</div