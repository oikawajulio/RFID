<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-10">
        <h3 class="page-header"><i class="fa fa-wrench" aria-hidden="true"></i> MANUTENCÃO</h3>
    </div>
    <div class=" col-md-2">
        <a class="btn btn-primary btn-block" href="<?= base_url()?>manutencao/cadastro"><i class="fa fa-plus" aria-hidden="true"></i> Nova Manutenção </a>
    </div>
    <div class="col-md-12" style="padding-bottom: 10px">

        <form action="<?=base_url()?>manutencao/pesquisar" method="post">
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
                            Lista de Manutenções
                        </h3>
                    </div>
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Descrição</th>
                            <th>Equipamento</th>
                            <th>Data Manutenção</th>
                            <th>Descrição do Serviço</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php foreach($manutencao as $man) { ?>
                        <tr>
                            
                            <td>
                                <?=$man->descricao_manutencao;?>
                            </td>
                            <td>
                                <?=$man->descricao;?>
                            </td>
                            <td>
                               <?= $data_compra = date(('d/m/Y'),strtotime($man->data_manutencao));?>
                            </td>
                            <td>
                                <?=$man->descricao_servico;?>
                            </td>

                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php $man->idManutencao?>"> <span class="fa fa-eye" aria-hidden="true"></span></button>
                                <a href="<?= base_url('manutencao/atualizar/'.$man->idManutencao)?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="<?= base_url('manutencao/excluir/' .$man->idManutencao) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o usuário?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
     
	 <!-- Modal -->
    <div id="myModal<?php $man->idManutencao;?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detalhes da Manutenção</h4>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="text-align: right; width: 30%"><strong>Descrição</strong></td>
                                <td>
                                    <?= $man->descricao_manutencao;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong> Tipo de Serviço</strong></td>
                                <td>
                                    <?= $man->servico;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Equipamento</strong></td>
                                <td>
                                    <?= $man->equipamento;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Departamento</strong></td>
                                <td>
                                    <?= $man->departamento;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Data da Manutenção</strong></td>
                                <td>
                                    <?= $man->data_manutencao;?>
                                </td>
                            </tr>
                             <tr>
                                <td style="text-align: right"><strong>Tipo de Manutenção</strong></td>
                                <td>
                                    <?= $man->tipo_manutencao;?>
                                </td>
                            </tr>
                             <tr>
                                <td style="text-align: right"><strong>Situação</strong></td>
                                <td>
                                    <?= $man->situacao;?>n
                                </td>
                            </tr>
                                <tr>
                                <td style="text-align: right"><strong>Observações</strong></td>
                                <td>
                                    <?= $man->observacoes;?>
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