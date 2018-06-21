<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-print" aria-hidden="true"></i> Relatórios de Produtos
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
                                    <h5 class="list-group-item active">Todos Produtos</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_produtos" method="post">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-shopping-basket fa-2x" aria-hidden="true"></span></button>
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
                                    <h5 class="list-group-item active">Descrição do Produto</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/pesquisa_Descricao_Produto" method="post">
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
                                    <h5 class="list-group-item active">Marca / Modelo </h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/pesquisa_marca_modelo" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Marca</label>
                                                        <input type="text" name="marca" class="form-control" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Modelo:</label>
                                                        <input type="text" name="modelo" class="form-control" />
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
                                    <h5 class="list-group-item active">Qtd no estoque / Qtd. Mínima </h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/pesquisa_qtd" method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Qtd. em Estoque:</label>
                                                        <input type="text" name="qtd_estoque" class="form-control" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Qtd. Mínima:</label>
                                                        <input type="text" name="qtd_minima" class="form-control" />

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


</div>
</div>
</div>
</div>
</div>