<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-9">
        <h3 class="page-header"> Lista de Produtos</h3>
    </div>
    <div class="col-md-3">
        <a href="<?= base_url('relatorio/imprimir_relatorio_produto') ?>" class="btn btn-primary btn-group" target="_blank"><span class="fa fa-print" aria-hidden="true"></span> PDF</button></a>
        <a id="btnExport" class="btn btn-success btn-group"><span class="fa fa-print" aria-hidden="true"></span> Excel</a>
    </div>

    <div class="col-md-12">

    <table class="table table-striped table-hover" id="tblExport" >
            <tr>
                <th> ID</th>
                <th> Descrição</th>
                <th> Preço</th>
                <th> Marca</th>
                <th> Modelo</th>
                <th> Quantidade</th>
                <th>Quantidade Mínima</th>
              
            </tr>

            <?php foreach ($relatorios as $prod) { ?>
                <tr>
                    <td><?= $prod->idProduto; ?></td>
                    <td><?= $prod->descricao; ?></td>
                     <td><?= number_format($prod->preco,2, ',', '.');?></td>
                    <td><?= $prod->marca; ?></td>
                    <td><?= $prod->modelo; ?></td>
                    <td><?= $prod->qtd_estoque; ?></td>
                    <td><?= $prod->estoque_minimo; ?></td>

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
               , filename: 'Planilha Lista de Produtos'
            });
        });
    });
</script>