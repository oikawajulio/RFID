
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
            CADASTRO DE FORNECEDORES
        </h3>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>fornecedores/cadastrar" method="post">
            <div class="form-group">
                <label for="razaoSocial">Razão Social:</label>
                <input class="form-control" id="razaoSocial" name="razaoSocial"  required="" type="text">
           <div class="form-group">
                <label for="nome_fantasia">Nome Fantasia:</label>
                <input class="form-control" id="nome_fantasia" name="nome_fantasia"  required="" type="text">
            </div>
           <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="cnpj">CNPJ:</label>
                        <input class="form-control" id="cnpj" name="cnpj"  required="" type="text">
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="form-group">
                        <label for="inscricao_estadual">Inscrição Estadual:</label>
                        <input class="form-control" id="inscricao_estadual" name="inscricao_estadual"  required="" type="text">
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input class="form-control" id="endereco" name="endereco" required="" type="text">
                    </div>
                </div>
              
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input class="form-control" id="telefone" name="telefone"  required="" type="text">
                    </div>
                </div>
            
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Bairro:</label>
                        <input class="form-control" id="bairro" name="bairro" required="" type="text">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="logradouro">Logradouro: </label>
                        <input class="form-control" id="logradouro" name="logradouro"  required="" type="text">
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="form-group">
                        <label for="complemento">Complemento: </label>
                        <input class="form-control" id="complemento" name="complemento"  required="" type="text">
                    </div>
                </div>
                
                 <div class="row">
            <div class="col-md-4">
                    <label for="cidade">Cidade </label>
                    <select class="form-control" id="cidade" name="cidade" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($cidades as $cidade) {?>
                        <option value="<?= $cidade->idcidade?>"> <?= $cidade->nome?> </option>
                        <?php } ?>

                    </select>
                </div>
                   <div class="col-md-2">
                    <label for="status">Estado: </label>
                    <select class="form-control" id="estado" name="estado" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($estados as $estado) {?>
                        <option value="<?= $estado->idestado?>"> <?= $estado->uf?> </option>
                        <?php } ?>

                    </select>
                </div>
                
        </div>
                   
                 
               
            <div style="text-align: right;">
                <button class="btn btn-success" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </form>
    </div>
</div>



<script>
jQuery("#telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {  
            var target, phone, element;  
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
            phone = target.value.replace(/\D/g, '');
            element = $(target);  
            element.unmask();  
            if(phone.length > 10) {  
                element.mask("(99) 99999-999?9");  
            } else {  
                element.mask("(99) 9999-9999?9");  
            }  
        });
        </script>

		
		<script type="text/javascript">
		$(document).ready(function()
		{	$("#cnpj").mask("99.999.999/9999-99");});
		</script>