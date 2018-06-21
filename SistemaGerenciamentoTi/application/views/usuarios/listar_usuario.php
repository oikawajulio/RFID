<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header"><i class="fa fa-user-circle-o" aria-hidden="true"></i> USUÁRIOS</h3>
    </div>

    <div class=" col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>usuario/cadastro"><span class="fa fa-user-plus" aria-hidden="true"></span>  Novo Usuário </a>
    </div>
  <div class="col-md-12" style="padding-bottom: 10px">
    <form action="<?=base_url()?>usuario/pesquisar" method="post">
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
                            Lista de Usuários
                        </h3>
                    </div>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th> ID</th>
                            <th> Nome</th>
                            <th> Email</th>
                            <th> Nivel</th>
                            <th> Status</th>
                            <th> </th>
                            <th> </th>
                        </tr>
 
                        <?php foreach ($usuarios as $usu) { ?>
                        <tr>
                            <td>
                                <?= $usu->idusuario;?>
                            </td>
                            <td>
                                <?= $usu->nome;?>
                            </td>
                            <td>
                                <?= $usu->email;?>
                            </td>
                            <td>
                                <?= $usu->nivel == 1 ? 'Administrador' : 'Usuário'; ?>
                            </td>
                            <td>
                                <?= $usu->status == 1 ? 'Ativo' : 'Inativo'; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-eye" aria-hidden="true"></span></button>
                                <a href="<?= base_url('usuario/atualizar/' . $usu->idusuario) ?>" class="btn btn-primary btn-group"> <span class="fa fa-pencil" aria-hidden="true"></span></a>
                                <a href="<?= base_url('usuario/excluir/' . $usu->idusuario) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
                                <?php } ?>
                            </td>
                        </tr>
	
                    </table>
              
                </div>
                     
         <!-- <?php //echo $this->pagination->create_links(); ?>-->

            </div>
        </div>
    </div>


    <!-- Modal -->
    
    <div id="myModal<?php $usu->idusuario;?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detalhes do Usuário</h4>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="text-align: right; width: 30%"><strong>Nome</strong></td>
                                <td>
                                    <?= $usu->nome;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>CPF</strong></td>
                                <td>
                                    <?= $usu->cpf;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Endereço</strong></td>
                                <td>
                                    <?= $usu->endereco;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Nivel</strong></td>
                                <td>
                                    <?= $usu->nivel;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Email</strong></td>
                                <td>
                                    <?= $usu->email;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Senha</strong></td>
                                <td>
                                    <?= $usu->senha;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Status</strong></td>
                                <td>
                                    <?= $usu->status;?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>
</div>