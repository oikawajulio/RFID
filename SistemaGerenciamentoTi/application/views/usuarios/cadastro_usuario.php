<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
        CADASTRO DE USUÁRIO
         </h3>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>usuario/cadastrar" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input class="form-control" id="nome" name="nome"  required="" type="text">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input class="form-control" id="cpf" name="cpf"  required="" type="text">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input class="form-control" id="endereco" name="endereco"  required="" type="text">
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="nivel">Nível: </label>
                    <select class="form-control" id="nivel" name="nivel" required="">
                        <option value="0"> --- </option>
                        <option value="1"> Administrador </option>
                        <option value="2"> Usuário </option>

                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" id="email" name="email"  required="" type="email">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input class="form-control" id="senha" name="senha"  required="" type="password">
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="status">Status: </label>
                    <select class="form-control" id="status" name="status" required="">
                        <option value="0"> --- </option>
                        <option value="1"> Ativo </option>
                        <option value="2"> Inativo </option>

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
    $(document).ready(function () { 
        var $seuCampoCnpj = $("#cpf");
        $seuCampoCnpj.mask('000.000.000-00', {reverse: true});
    });
</script>