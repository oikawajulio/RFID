<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="col-md-8">
    <h3 class="page-header"><i class="fa fa-shopping-basket" aria-hidden="true"></i> PRODUTOS </h3>
  </div>
  <div class=" col-md-4 ">
    <div>
      <a class="btn btn-primary" href="<?=base_url()?>produtos/cadastro" role="button"><i class="fa fa-plus" aria-hidden="true"></i>  Novo Produto</a>
      <a class="btn btn-info" href="<?=base_url()?>baixa/cadastro" role="button"><i class="fa fa-cubes" aria-hidden="true"></i> Baixa no Estoque</a>
    </div>

  </div>



  <div class="col-xs-12 col-sm-12 col-md-12" style="padding-bottom: 10px">

    <form action="<?=base_url()?>produtos/pesquisar" method="post">
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
              Produtos no Estoque
            </h3>

          </div>

          <table class="table table-striped table-hover">
            <tr>
              
              <th> Descrição</th>
              <th> Preço</th>
              <th> Marca</th>
              <th> Modelo</th>
              <th> Qtd. em Estoque</th>
              <th>Estoque Minimo</th>
               <th> </th>

            </tr>

            <?php foreach ($produtos as $prod) { ?>
            <tr>
             
              <td>
                <?= $prod->descricao;?>
              </td>
              <td>
              <?= number_format($prod->preco,2, ',', '.');?>
              </td>
              <td>
                <?= $prod->marca;?>
              </td>
              <td>
                <?= $prod->modelo;?>
              </td>
              <td>
                <?= $prod->qtd_estoque;?>
              </td>
              <td>
                <?= $prod->estoque_minimo;?>
              </td>

              <td>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?php $prod->idProduto?>"> <span class="fa fa-eye" aria-hidden="true"></span></button>
                <a href="<?= base_url('produtos/atualizar/' . $prod->idProduto) ?>" class="btn btn-primary btn-group"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?= base_url('produtos/excluir/' . $prod->idProduto) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o Produto?');"><span class="fa fa-trash" aria-hidden="true"></span></a>
              </td>
            </tr>
            <?php } ?>
          </table>
          
        </div>
        </nav>
       

      </div>
    </div>
  </div>
</div>
  <!-- Modal -->
    <div id="myModal<?php $prod->idProduto;?>" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detalhes do Produto</h4>
                </div>

                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td style="text-align: right; width: 30%"><strong>Descrição</strong></td>
                                <td>
                                    <?= $prod->descricao;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Preço</strong></td>
                                <td>
                                    <?= $prod->preco;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Marca</strong></td>
                                <td>
                                    <?= $prod->marca;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Modelo</strong></td>
                                <td>
                                    <?= $prod->modelo;?>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align: right"><strong>Qtd. em Estoque</strong></td>
                                <td>
                                    <?= $prod->qtd_estoque;?>
                                </td>
                            </tr>
                              <tr>
                                <td style="text-align: right"><strong>Estoque Minimo</strong></td>
                                <td>
                                    <?= $prod->estoque_minimo;?>
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

        	<script type="text/javascript">
			$('#data_baixa').datepicker({	
				format: "yyyy-mm-dd",	
				language: "pt-BR",
				
			});
		</script>