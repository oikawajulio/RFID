<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Relatório de Licenças de Softwares</h4>
    </div>

</div>
<hr>

<div class="col-md-12">
    <table id="customers">

        <tr>
            <th> ID</th>
            <th>descrição do Software</th>
            <th> Empresa</th>
            <th>Chave Serial</th>
             <th>Data de Expiração</th>
            <th>Situacão</th>
            <th>Observações</th>
        </tr>
 <?php foreach ($licencas as $lic) { ?>
       <tr>
            <td><?=$lic->idlicenca;?></td>
            <td><?=$lic->descricao_software;?></td>
            <td><?=$lic->empresa;?></td>
            <td><?=$lic->chave;?></td>
            <td><?= $data_compra = date(('d/m/Y'),strtotime($lic->data_expiracao));?></td>
            <td><?=$lic->situacao;?></td>
            <td><?=$lic->observacoes;?></td>
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