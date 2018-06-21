<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
   <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Relatório de Manutenções</h4>
    </div>

</div>
<hr>

<div class="col-md-12">
    <table id="customers">

       <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Equipamento</th>
            <th>Data Manutenção</th>
            <th>Descrição do Serviço</th>

        </tr>
        <?php foreach ($manutencao as $man) { ?>
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
                <?= $data_compra = date(('d/m/Y'),strtotime($man->data_manutencao));?>
            </td>
            <td>
                <?=$man->descricao_servico;?>
            </td>

        </tr>
        <?php } ?>
    </table>
</div>

</div>
</div>
<nav>
    </div>
    </div>
    </div>
    <h5 style="text-align: right">Data do Relatório:
        <?php echo date('d/m/Y');?>
    </h5>