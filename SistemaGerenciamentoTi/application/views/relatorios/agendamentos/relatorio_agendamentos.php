<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            <i class="fa fa-print" aria-hidden="true"></i> Relatórios de Agendamentos
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
                                    <h5 class="list-group-item active">Todas Agendamentos</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_agendamentos" method="post">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <button type="submit" class="btn btn-success btn-block" target="_blank"><span class="fa fa-calendar fa-2x" aria-hidden="true"></span></button>
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
                                    <h5 class="list-group-item active">Agendamentos por Periodo</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/agendamentos_periodos" method="post">
                                                <div class="row">
                                               
                                                    <div class="col-md-6">
                                                        <label for="">Data de:</label>
                                                        <input type="date" name="dataInicial" class="form-control" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Até:</label>
                                                        <input type="date" name="dataFinal" class="form-control" />
                                                       
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
                          <div class="row">
                            <div class="col-md-6">
                                <div class="list-group">
                                    <h5 class="list-group-item active">Busca por Agendamentos</h5>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">
                                            <td>
                                                <form action="<?=base_url()?>relatorio/listar_compras" method="post">
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
                                    <h5 class="list-group-item active">Valor</h5>
                                    <div class="list-group-item">
                                        <td>
                                            <form action="<?=base_url()?>relatorio/compras_periodo" method="post">
                                                <div class="row">
                                               
                                                <div class="col-md-6">
                                                        <label for="">R$:</label>
                                                        <input type="date" name="dataInicial" class="form-control" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Até:</label>
                                                        <input type="date" name="dataFinal" class="form-control" />
                                                       
                                                    </div>  

                                                     <center><div class="col-md-10">
                                                     
                                                         <button class="btn btn-success" target="_blank"><i class="icon-print icon-white" target="_blank"></i> Imprimir</button>
                                                    </div>
                                                    </center>
                                                   
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