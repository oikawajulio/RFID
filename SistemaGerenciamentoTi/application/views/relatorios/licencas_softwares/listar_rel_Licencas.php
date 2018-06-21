<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-9">
        <h3 class="page-header"> Lista de Licenças de Softwares</h3>
    </div>
    <div class="col-md-3">
        <a href="<?= base_url('relatorio/imprimir_relatorio_licencas') ?>" class="btn btn-primary btn-group" target="_blank"><span class="fa fa-print" aria-hidden="true"></span> PDF</button></a>
        <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
    </div>
    <div class="col-md-12">

        <tr>
         
       <table class="table table-striped table-hover" id="tblExport">

                <tr>
                    <th>ID</th>
                    <th>descrição do Software</th>
                    <th>Empresa</th>
                    <th>Chave Serial</th>
                    <th>Data de Expiração</th>
                    <th>Situacão</th>
                   
                </tr>
                <?php foreach ($relatorios as $lic) { ?>
                <tr>
                    <td>
                        <?=$lic->idlicenca;?>
                    </td>
                    <td>
                        <?=$lic->descricao_software;?>
                    </td>
                    <td>
                        <?=$lic->empresa;?>
                    </td>
                    <td>
                        <?=$lic->chave;?>
                    </td>
                    <td>
                       <?= $data_compra = date(('d/m/Y'),strtotime($lic->data_expiracao));?>
                    </td>
                    <td>
                        <?=$lic->situacao;?>
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
                , filename: 'Planilha Lista de Equipamentos'
            });
        });
    });

</script>