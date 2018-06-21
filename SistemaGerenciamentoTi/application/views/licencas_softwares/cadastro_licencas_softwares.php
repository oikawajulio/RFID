<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
            <i class="fa fa-newspaper-o " aria-hidden="true"></i> LICENÇAS DE SOFTWARES
        </h3>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>licencas/cadastrar" method="post">
            <div class="form-group">
                <label for="descricao_software">Descrição do Software:</label>
                <input class="form-control" id="descricao_software" name="descricao_software" placeholder="" required="" type="text">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="empresa">Empresa:</label>
                            <input class="form-control" id="empresa" name="empresa" placeholder="" required="" type="text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="chave">Chave Serial:</label>
                            <input class="form-control" id="chave" name="chave" placeholder="" required="" type="text">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="data_expiracao">Data Expiração do Software:</label>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="input-group date">
                                        <input type="date" class="form-control" id="data_expiracao" name="data_expiracao" required="">
                                        <div class="input-group-addon">
                                            <span class="fa fa-calendar" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="situacao">Situação: </label>
                        <select class="form-control" id="situacao" name="situacao" required="">
                        <option value="0"> --- </option>
                        <option value="1"> Ativo </option>
                        <option value="2"> Inativo </option>
                   </select>
                    </div>
            <div class="col-md-12">
                        <div class="form-group">
                            <label for="observacoes">Observações:</label>
                            <textarea class="form-control" rows="5" id="observacoes" name="observacoes" required="" type="text"></textarea>
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