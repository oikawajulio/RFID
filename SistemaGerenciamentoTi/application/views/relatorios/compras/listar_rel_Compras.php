<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="col-md-9">
                <h1 class="page-header"> Lista de Compras </h1>
        </div>
        <div class="col-md-3">
                <a href="<?= base_url('relatorio/imprimir_relatorio_compras')?>" class="btn btn-primary btn-group" target="_blank"><span class="fa fa-print" aria-hidden="true"></span> PDF</button></a>
                <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
        </div>
        <div class="col-md-12">
                <table class="table table-striped table-hover" id="tblExport">
                        <tr>
                                <th>ID</th>
                                <th>Produto</th>
                                <th>Fornecedor</th>
                                <th>Quantidade</th>
                                <th>Preço Unitário</th>
                                <th>Valor total da Nota</th>
                                <th>Data da Compra</th>
                                <th>Nº Nota Fiscal</th>
                                <th>Emissão da Nota</th>
                                <th>Recebimento</th>
                          
                        </tr>

                        <?php foreach ($r as $comp) { ?>
                        <tr>
                                <td>
                                        <?= $comp->idCompras; ?>
                                </td>
                                <td>
                                        <?= $comp->descricao;?>
                                </td>
                                 <td>
                                        <?= $comp->razaoSocial;?>
                                </td>

                                <td>
                                        <?= $comp->quantidade;?>
                                </td>
                                 <td>
                                        <?= number_format($comp->valor_total,2, ',', '.');?>
                                </td>
                                  <td>
                                        <?= number_format($comp->valor_unitario,2, ',', '.');?>
                                </td>
                               
                                <td>
                                        <?= $data_compra = date(('d/m/Y'),strtotime($comp->data_compra));?>
                                </td>
                                 <td>
                                        <?= $comp->nota_fiscal;?>
                                </td>
                                
                                <td>
                                        <?= $emissao_nota = date(('d/m/Y'),strtotime($comp->emissao_nota));?>

                                </td>
                                
                                 <td>
                                        <?= $recebimento = date(('d/m/Y'),strtotime($comp->recebimento));?>
                                </td>
                                
                        </tr>
                        <?php } ?>
                </table>
        </div>
        <nav>
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
                                , filename: 'Planilha Lista de Compras'
                        });
                });
        });

</script>