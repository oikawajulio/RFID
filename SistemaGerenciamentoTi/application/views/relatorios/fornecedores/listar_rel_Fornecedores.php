<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-md-9">
                <h3 class="page-header"> Lista de Fornecedores</h3>
        </div>
        <div class="col-md-3">
                <a href="<?= base_url('relatorio/imprimir_relatorio_fornecedores')?>" class="btn btn-primary btn-group" target="_blank"><span class="fa fa-print" aria-hidden="true"></span>PDF</button></a>
                <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
        </div>
        <div class="col-md-12">
               
        <table class="table table-striped table-hover" id="tblExport">
                       
        <tr>
            <th>ID</th>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
            <th>Inscrição Estadual</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Logradouro</th>
            <th>Complemento</th>
            <th>Cidade</th>
            <th>Estado</th>
    </tr>
        <?php foreach ($relatorios as $forn) { ?>
        <tr>
            <td>
                <?= $forn->idFornecedor; ?>
            </td>

            <td>
                <?= $forn->razaoSocial;?>
            </td>
            <td>
                <?= $forn->nome_fantasia; ?>
            </td>
            <td>
                <?= $forn->cnpj;?>
            </td>
            <td>
                <?= $forn->inscricaoEstadual; ?>
            </td>
            <td>
                <?= $forn->telefone;?>
            </td>
            <td>
                <?= $forn->endereco;?>
            </td>
            <td>
                <?= $forn->bairro; ?>
            </td>
            <td>
                <?= $forn->logradouro; ?>
            </td>
            <td>
                <?= $forn->complemento; ?>
            </td>
            <td>
                <?= $forn->nome;?>
            </td>
            <td>
                <?= $forn->nome; ?>
            </td>


        </tr>
        <?php } ?>
    </table>
        </div>
        </nav>
</div>
</div>
</div>


<script src="<?=base_url();?>assets/js/jquery.btechco.excelexport.js"></script>
<script src="<?=base_url();?>assets/js/jquery.base64.js"></script>
<script>
    $(document).ready(function () {
        $("#btnExport").click(function () {
            $("#tblExport").btechco_excelexport({
                containerid: "tblExport"
                , datatype: $datatype.Table
                , filename: 'Planilha Lista de Fornecedores'
            });
        });
    });

</script>