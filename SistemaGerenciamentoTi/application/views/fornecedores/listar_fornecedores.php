<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header"><i class="fa fa-users" aria-hidden="true"></i> FORNECEDORES</h3>
    </div>
    <div class=" col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>fornecedores/cadastro"><i class="fa fa-plus" aria-hidden="true"></i>  Novo Fornecedor </a>
    </div>
    <div class="col-md-12" style="padding-bottom: 10px">

        <form action="<?=base_url()?>fornecedores/pesquisar" method="post">
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
                            Lista de Fornecedores
                        </h3>
                    </div>
                    <table class="table table-striped table-hover" >
                        <tr>
                            <th>Razão Social</th>
                            <th>CNPJ</th>
                            <th>Telefone</th>
                            <th>Endereço</th>
							<th>Cidade</th>
                           
                            
                            <th> </th>
                            <th> </th>
                        </tr>
                        <?php foreach ($fornecedores as $forn) { ?>
                        <tr>
                           
                            <td>
                                <?= $forn->razaoSocial;?>
                            </td>
                            <td>
                                <?= $forn->cnpj;?>
                            </td>
                            <td>
                                <?= $forn->telefone;?>
                            </td>
                            <td>
                                <?= $forn->endereco;?>
                            </td>
							<td>
                                <?= $forn->nome;?>
                            </td>
                          

                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"> <span class="fa fa-eye" aria-hidden="true"></span></button>
                                <a href="<?= base_url('fornecedores/atualizar/'.$forn->idFornecedor)?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="<?= base_url('fornecedores/excluir/' .$forn->idFornecedor) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
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

