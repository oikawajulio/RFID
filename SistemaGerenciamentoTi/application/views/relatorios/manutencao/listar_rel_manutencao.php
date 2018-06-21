<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-9">
        <h3 class="page-header"> Lista de Manutencões</h3>
    </div>
    <div class="col-md-3">
        <a href="<?= base_url('relatorio/imprimir_relatorio_manutencao') ?>" class="btn btn-primary btn-group" target="_blank"><span class="fa fa-print" aria-hidden="true"></span> PDF</button></a>
        <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
    </div>
    <div class="col-md-12">

        <table class="table table-striped table-hover" id="tblExport">
            <tr>
                <th>Código</th>
                <th>Descrição</th>
                <th>Equipamento</th>
                <th>Data Manutenção</th>
                <th>Descrição do Serviço</th>

            </tr>
            <?php foreach ($relatorios as $man) { ?>
            <tr>
                <td>
                    <?=$man->idManutencao;?>
                </td>
                <td>
                    <?=$man->descricao_manutencao;?>
                </td>
                <td>
                    <?=$man->descricao;?>
                </td>
                <td>
                    <?=$man->data_manutencao;?>
                </td>
                <td>
                    <?=$man->descricao_servico;?>
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
                , filename: 'Planilha Lista de Manutenção'
            });
        });
    });

</script>