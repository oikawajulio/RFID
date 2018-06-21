<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-print" aria-hidden="true"></i> Relatórios de Equipamentos
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
                                    <h5 class="list-group-item active">Todos Equipamentos</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_equipamentos" method="post">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-desktop  fa-2x" aria-hidden="true"></span></button>
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
                                    <h5 class="list-group-item active">Descrição do Equipamento</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/pesquisar_descricao_equipamento" method="post">
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



