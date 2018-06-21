<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h2 class="page-header">
            ATUALIZAR COMPRA
        </h2>
        <div class="col-md-12">
            <form action="<?= base_url()?>compras/salvar_atualizacao" method="post">
                <input type="hidden" id="idCompras" name="idCompras" value="<?= $compras[0]->idCompras;?>">
                <div class="form-group row">
                    <div class="col-xs-12 col-sm-2 col-md-12">
                        <form action="<?= base_url()?>compras/cadastrar" method="post">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <label for="produto">Produto:</label>
                                    <select class="form-control" id="produto" name="produto" required="">
                          <option value="0"> --- </option>
                          <?php foreach ($produtos as $prod) {
                             
                             if($prod->idProduto ==$compras[0]->produto){
                                ?>
                               <option value="<?=$prod->idProduto?>" selected> <?=$prod->descricao?> </option>
                             
                             <?php } else{ ?>
                             
                             <option value="<?=$prod->idProduto?>"> <?=$prod->descricao?> </option>
                                
                             <?php }
                             
                             }?>
                   </select>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-2 col-md-4">
                    <label for="fornecedor">Fornecedores : </label>
                    <select class="form-control" id="fornecedor" name="fornecedor" required="">
          <option value="0"> --- </option>
          <?php 
          foreach ($fornecedores as $forn){
          if($forn->idFornecedor ==$compras[0]->fornecedor){
             ?>
            <option value="<?=$forn->idFornecedor?>" selected> <?=$forn->razaoSocial?> </option>
          
          <?php } else{ ?>
          
          <option value="<?=$forn->idFornecedor?>"> <?=$forn->razaoSocial?> </option>
             
          <?php }
          
          }?>

      </select>
            </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="quantidade">Quantidade:</label>
                    <input class="form-control" id="quantidade" name="quantidade" value="<?= $compras[0]->quantidade; ?>" required="" type="text"/>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2">
                    <div class="form-group">
                        <label>Preço unitário:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                      <i class="fa" aria-hidden="true">R$</i>
                   </span>
                            <input type="text" class="form-control" name="valor_unitario" id="valor_unitario" value="<?= $compras[0] ->valor_unitario; ?>"
                                required="" type="text" />
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
                            <input type="text" class="form-control" name="valor_total" id="valor_total" value="<?= $compras[0] ->valor_total; ?>" required=""
                                type="text" />
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-2 col-md-2">
                    <label for="numero_nota">Nota Fiscal:</label>
                    <input class="form-control" id="nota_fiscal" name="nota_fiscal" required="" value="<?= $compras[0] ->nota_fiscal; ?>" required=""
                        type="text" />
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <label for="emissao_notas">Emissão da Nota:</label>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div class="row">
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="emissao_nota" name="emissao_nota" value="<?= $compras[0] ->emissao_nota; ?>"
                                        required="" type="text" />
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
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div class="row">
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="recebimento" name="recebimento" value="<?= $compras[0] ->recebimento; ?>" required=""
                                        type="text" />
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-3 col-md-4">
                    <label for="data_compras">Data da Compra:</label>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <div class="row">
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="data_compra" name="data_compra" value="<?= $compras[0] ->data_compra; ?>" required=""
                                        type="text" />
                                    <div class="input-group-addon">
                                        <span class="fa fa-calendar" aria-hidden="true"></span>
                                    </div>
                                </div>
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
</div>
</form>
</div>
</div>