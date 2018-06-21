<!DOCTYPE html>
 <link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
</div>
<div class="col-md-12">
 <h4 class="page-header">Relatório de Compras</h4>
 </div>
  
</div>
<hr>

<div class="col-md-12">
   <table id="customers">
      <tr>
            <th>ID</th>
			<th>Produto</th>
			<th>Quantidade</th>
			<th>Valor Unitário</th>
			<th>Data da Compra</th>
			<th>Fornecedor</th>
    </tr>
                
 <?php foreach ($compras as $comp) { ?>
 <tr>
 <td><?= $comp->idCompras;?></td>
 <td><?= $comp->descricao;?></td>
 <td><?= $comp->quantidade;?></td>
 <td><?= $comp->valor_unitario;?></td>
<td><?= $data_compra = date(('d/m/Y'),strtotime($comp->data_compra));?></td>
 <td><?= $comp->razaoSocial;?></td>
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
<h5 style="text-align: right">Data do Relatório: <?php echo date('d/m/Y');?></h5>
