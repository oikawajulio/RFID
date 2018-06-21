<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="col-md-12">
		<h3 class="page-header">
			<i class="fa fa-cubes" aria-hidden="true"></i>  BAIXA DE ESTOQUE
		</h3>
	</div>
<div class="row">
        <form action="<?= base_url()?>baixa/cadastrar" method="post">
                <div class="form-group">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <label for="produto">Produto:</label>
                        <select class="form-control" id="produto" name="produto" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($produtos as $prod) {?>
                        <option value="<?= $prod->idProduto?>"> <?=$prod->descricao?></option>
                        <?php } ?>
                 </select>
                    </div>
                </div>
        <div class="col-xs-12 col-sm-2 col-md-2">
            <div class="form-group">
                <label>Quantidade:</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade">
            </div>
        </div>
         <div class="col-xs-12 col-sm-3 col-md-4">
        <label for="data_baixa">Data da Baixa:</label>
        <div class="form-group">
            <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="row">
                    <div class="input-group date">
                        <input type="text" class="form-control" id="data_baixa" name="data_baixa" required="">
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
   
</div>

</div>
</div>
 </form>
   <script type="text/javascript">
            $('#data_baixa').datepicker({
                format: "yyyy-mm-dd",
                language: "pt-BR",

            });
  </script>