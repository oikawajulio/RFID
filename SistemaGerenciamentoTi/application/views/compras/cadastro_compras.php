
<div class="col-xs-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <h3 class="page-header">
            CADASTRO DE COMPRAS
        </h3>
    </div>
    <div class="form-group row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <form action="<?= base_url()?>compras/cadastrar" method="post">
                <div class="form-group">
                    <div class="col-xs-10 col-sm-10 col-md-10">
                        <label for="produto">Produto:</label>
                        <select class="form-control" id="produto" name="produto" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($produtos as $prod) {?>
                        <option value="<?= $prod->idProduto?>"> <?=$prod->descricao?></option>
                        <?php } ?>
                 </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 " style="padding-top: 20px">
                    <div class="form-group">
                        <input type="button" class="btn btn-default btn-primary" value="Cadastrar Produto" data-toggle="modal" data-target="#myModal">
                    </div>
                </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-2 col-md-4">
        <label for="fornecedor">Fornecedor:</label>
        <select class="form-control" id="fornecedor" name="fornecedor" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($fornecedor as $fornec) {?>
                        <option value="<?= $fornec->idFornecedor?>"> <?=$fornec->razaoSocial?> </option>
                        <?php } ?>

                    </select>
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2">
        <label for="quantidade">Quantidade:</label>
        <input class="form-control" id="quantidade" name="quantidade" placeholder="" required="" type="text">
    </div>
    <div class="col-xs-12 col-sm-2 col-md-2">
        <div class="form-group">
            <label>Preço unitário:</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa" aria-hidden="true">R$</i>
                 </span>
                <input type="text" class="form-control" name="valor_unitario" id="valor_unitario" required>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-2 col-md-2">
        <div class="form-group">
            <label>Valor Total da Nota:</label>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa" aria-hidden="true">R$</i>
                 </span>
                <input type="text" class="form-control" name="valor_total" id="valor_total" required>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-sm-2 col-md-2">
        <label for="nota_fiscal">Nº Nota Fiscal:</label>
        <input class="form-control" id="nota_fiscal" name="nota_fiscal" required="" type="text" />
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="emissao_notas">Emissão da Nota:</label>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="row">
                    <div class="input-group date">
                        <input type="date" class="form-control" id="emissao_nota" name="emissao_nota" required="">
                        <div class="input-group-addon">
                            <span class="fa fa-calendar" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4">
        <label for="recebimento">Recebimento:</label>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="row">
                    <div class="input-group date">
                        <input type="date" class="form-control" id="recebimento" name="recebimento" required="">
                        <div class="input-group-addon">
                            <span class="fa fa-calendar" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-3 col-md-4">
        <label for="data_compras">Data da Compra:</label>
        <div class="form-group">
            <div class="col-xs-12">
                <div class="row">
                    <div class="input-group date">
                        <input type="date" class="form-control" id="data_compra" name="data_compra" required="">
                        <div class="input-group-addon">
                            <span class="fa fa-calendar" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div style="text-align: right;">
    <button class="btn btn-success" type="submit">Enviar</button>
    <button class="btn btn-danger" type="reset">Cancelar</button>
    </form>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form action="<?= base_url()?>compras/cadastrarNovoProduto" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cadastrar Produto</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <input class="form-control" id="descricao" name="descricao" required="" type="text">
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <div class="row">
                                <div class="form-group">
                                    <label>Preço:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                            <i class="fa" aria-hidden="true">R$</i>
                         </span>
                                        <input type="text" class="form-control " name="preco" id="preco" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="marca">Marca:</label>
                                <input class="form-control" id="marca" name="marca" required="" type="text">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo:</label>
                                    <input class="form-control" id="modelo" name="modelo" required="" type="text">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="qtd_estoque">Qtd em Estoque:</label>
                                    <input class="form-control" id="qtd_estoque" name="qtd_estoque" required="" type="text">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="estoque_minimo">Estoque Minimo:</label>
                                    <input class="form-control" id="estoque_minimo" name="estoque_minimo" required="" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success" type="submit">Enviar</button>
                    <button type="button danger" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </form>
    </div>
</div>




