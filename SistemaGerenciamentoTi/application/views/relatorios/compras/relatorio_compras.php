<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-print" aria-hidden="true"></i> Relatórios de Compras
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
                                    <h5 class="list-group-item active">Todas Compras</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_compras" method="post">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-shopping-cart fa-2x" aria-hidden="true"></span></button>
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
                                    <h5 class="list-group-item active">Compras por Periodo</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/compras_periodo" method="post">
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
                                                        <button type="submit" class="btn btn-success"  target="_blank">Imprimir</button>
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
                                        <h5 class="list-group-item active">Busca por produto</h5>
                                        <div class="list-group-item">
                                            <h4 class="list-group-item-heading">
                                                <td>
                                                    <form action="<?=base_url()?>relatorio/pesquisa_Produto" method="post">
                                                        <div class="row">
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="pesquisar" name="pesquisar" placeholder="Pesquisar..." required="">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-search" aria-hidden="true"></span></button>
                                                            </div>
                                                        </div>
                                                 </div>
                                          </form>


                                        </td>
                                        </h4>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="list-group">
                                        <h5 class="list-group-item active">Busca por preço</h5>
                                        <div class="list-group-item">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/compras_por_valor" method="post">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <label for="">De R$:</label>
                                                            <input type="text" name="valorInicial" class="form-control" />
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Até R$:</label>
                                                            <input type="text" name="valorFinal" class="form-control" />

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