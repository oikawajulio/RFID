<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
       <div class="col-md-10">
 <h4 class="page-header">Relatório de Produtos</h4>
 </div>
  <hr>
</div>
<div class="col-md-12">
<table id="customers">
             <tr>
             <th>ID</th>
             <th>Descrição</th>
             <th>Preço</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Qtd em estoque</th>
            <th>Estoque mínimo</th>
           
             
             </tr>
             
     <?php foreach ($produtos as $p) { ?>
     <tr>
     <td><?= $p->idProduto;?></td>
     <td><?= $p->descricao;?></td>
    <td><?= number_format($p->preco,2, ',', '.');?></td>
     <td><?= $p->marca;?></td>
     <td><?= $p->modelo;?></td>
     <td><?= $p->qtd_estoque;?></td>
     <td><?= $p->estoque_minimo;?></td>

</tr>
<?php } ?>
</table>
</div>
     <h5 style="text-align: right">Data do Relatório: <?php echo date('d/m/Y');?></h5>
    </div>
</div>
 <nav>
     </div>
    </div>
</div>