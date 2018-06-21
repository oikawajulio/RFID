<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
            CADASTRO DE PRODUTOS
        </h3>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>produtos/cadastrar" method="post">
            <div class="form-group">
                <label for="razaoSocial">Descrição:</label>
                <input class="form-control" id="descricao" name="descricao"  required="" type="text">
                <div class="col-xs-12 col-sm-2 col-md-2">
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


                <div class="col-md-3">
                    <div class="form-group">
                        <label for="endereco">Marca:</label>
                        <input class="form-control" id="marca" name="marca"  required="" type="text">
                    </div>
                </div>
               
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="telefone">Modelo:</label>
                            <input class="form-control" id="modelo" name="modelo"  required="" type="text">
                        </div>
                      </div>
                  <div class ="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="qtd_estoque">Qtd em Estoque:</label>
                            <input class="form-control" id="qtd_estoque" name="qtd_estoque" required="" type="text">
                        </div>
                    </div>
                
               
                <div class="col-md-2">
                        <div class="form-group">
                            <label for="estoque_minimo">Estoque Minimo:</label>
                            <input class="form-control" id="estoque_minimo" name="estoque_minimo" required="" type="text">
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
<script type="text/javascript">
        $(function(){
            $("#preco").maskMoney();
        })
        </script>