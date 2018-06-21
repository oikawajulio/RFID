<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-9">
        <h3 class="page-header"> Lista de Agendamentos</h3>
    </div>
    <div class="col-md-3">
        <a href="<?= base_url('relatorio/imprimir_relatorio_agendamentos')?>" class="btn btn-primary btn-group" target="_blank"> <span class="fa fa-print" aria-hidden="true"></span> PDF</button></a>
        <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
    </div>
        <div class="col-md-12">
            <table class="table table-striped table-hover" id="tblExport">
                <tr>
                    <th> ID</th>
                    <th>descrição do Agendamentos</th>
                    <th>Equipamento</th>
                    <th>Data de Início</th>
                    <th>Data Final</th>

                </tr>

                <?php foreach ($agendar as $agenda) { ?>
                <tr>
                    <td>
                        <?=$agenda->idAgendar; ?>
                    </td>
                    <td>
                        <?= $agenda->title;?>
                    </td>
                    <td>
                        <?= $agenda->description;?>
                    </td>
                    <td>
                        <?= $inicio = date(('d/m/Y'),strtotime($agenda->start));?>
                    </td>
                    <td>
                        <?= $final = date(('d/m/Y'),strtotime($agenda->end));?>
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
                , filename: 'Planilha Lista de Agendamentos'
            });
        });
    });

</script>