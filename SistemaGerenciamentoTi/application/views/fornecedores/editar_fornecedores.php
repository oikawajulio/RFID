<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
            ATUALIZAR FORNECEDOR
</h3>
    </div>

<div class="col-md-12">
        <form action="<?= base_url()?>fornecedores/salvar_atualizacao" method="post">
		  <input type="hidden"  id="idFornecedor" name="idFornecedor" value="<?= $fornecedores[0]->idFornecedor;?>">
            <div class="form-group">
               <div class="form-group">
                 <div class="form-group">
                <label for="razaoSocial">Razão Social:</label>
                <input class="form-control" id="razaoSocial" name="razaoSocial" value="<?= $fornecedores[0]->razaoSocial; ?>" required="" type="text">
           <div class="form-group">
                <label for="nome_fantasia">Nome Fantasia:</label>
                <input class="form-control" id="nome_fantasia" name="nome_fantasia"  value="<?= $fornecedores[0]->nome_fantasia; ?>" required="" type="text">
            </div>
           <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnpj">CNPJ:</label>
                        <input class="form-control" id="cnpj" name="cnpj"  value="<?= $fornecedores[0]->cnpj; ?>" required="" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="inscricao_estadual">Inscrição Estadual:</label>
                        <input class="form-control" id="inscricao_estadual" name="inscricao_estadual"  value="<?= $fornecedores[0]->inscricaoEstadual; ?>" required="" type="text">
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input class="form-control" id="endereco" name="endereco" value="<?= $fornecedores[0]->endereco; ?>" required="" type="text"/>
                    </div>
                </div>
              
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" id="telefone" name="telefone"  value="<?= $fornecedores[0]->telefone; ?>" required="" type="text">
                    </div>
                </div>
            
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Bairro:</label>
                        <input class="form-control" id="bairro" name="bairro" value="<?= $fornecedores[0]->bairro; ?>" required="" type="text">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="logradouro">Logradouro: </label>
                        <input class="form-control" id="logradouro" name="logradouro"  value="<?= $fornecedores[0]->logradouro; ?>" required="" type="text">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="complemento">Complemento: </label>
                        <input class="form-control" id="complemento" name="complemento"  value="<?= $fornecedores[0]->complemento; ?>" required="" type="text">
                    </div>
                </div>
                
                 <div class="row">
            <div class="col-md-4">
                    <label for="cidade">Cidade: </label>
                    <select class="form-control" id="cidade" name="cidade" required="">
                        <option value="0"> --- </option>
                        <?php 
						foreach ($cidades as $cidade){
                        if($cidade->idcidade ==$fornecedores[0]->cidade){
						   ?>
						  <option value="<?=$cidade->idcidade?>" selected> <?=$cidade->nome?> </option>
						
						<?php } else{ ?>
						
						<option value="<?=$cidade->idcidade?>"> <?=$cidade->nome?> </option>
                       	
						<?php }
						
						}?>

                    </select>
                </div>
                   <div class="col-md-2">
                 <label for="estado">UF: </label>
                    <select class="form-control" id="estado" name="estado" required="">
                        <option value="0"> --- </option>
                         <?php 
						foreach ($estados as $estado) {
                        if($estado->idestado==$fornecedores[0]->estado){
						   ?>
						  <option value="<?=$estado->idestado?>" selected> <?=$estado->nome?> </option>
						<?php } else{ ?>
						<option value="<?=$estado->idestado?>"> <?=$estado->nome?> </option>
                       	<?php }
						}?>
						</select>
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


	 



