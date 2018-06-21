<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-print" aria-hidden="true"></i> Relatórios de Manutenções
        </h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <h5 class="list-group-item active">Todas Manutenções</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_manutencao" method="post">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-wrench  fa-2x" aria-hidden="true"></span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </td>
                                        </h4>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-group">
                                    <h5 class="list-group-item active">Descrição da Manutenção</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/pesquisar_descricao_manutencao" method="post">
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="pesquisar" name="pesquisar" placeholder="Pesquisar..." required="">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-search" aria-hidden="true"></span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <h5 class="list-group-item active">Período de Manutenção</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/manutencoes_periodos" method="post">
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="">Data de:</label>
                                                        <input type="date" id="dataInicial " name="dataInicial" required="" class="form-control" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Até:</label>
                                                        <input type="date" id="dataFinal" name="dataFinal" required="" class="form-control" />

                                                    </div>
                                                    &nbsp

                                                    <div class="span12" style="margin-left: 0; text-align: center">
                                                        <input type="reset" class="btn btn-danger" value="Limpar" />
                                                        <button class="btn btn-success" target="_blank">Imprimir</button>
                                                    </div>
                                            </form>

                                        </td>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="list-group">
                                    <h5 class="list-group-item active">Pesquisa Customizada</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/compras_periodo" method="post">
                                                <div class="row">
                                                   <center>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Tipo de Serviço</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Tipo de Manutenção</label>
                                                    <label class="checkbox-inline"><input type="checkbox" value="">Situação</label>
                                                    </center>
                                                </div>
                                                &nbsp

                                                <div class="span12" style="margin-left: 0; text-align: center">
                                                    <input type="reset" class="btn btn-danger" value="Limpar" />
                                                    <button class="btn btn-success" target="_blank">Imprimir</button>
                                                </div>
                                            </form>

                                        </td>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>