<!DOCTYPE html>
 <link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
 <div class="col-md-12">
 <h4 class="page-header"> Relatório de Agendamentos</h4>
 </div>
  
</div>
<hr>

<div class="col-md-12">
   <table id="customers">
     <tr>
               <th> ID</th>
                <th>descrição do Agendamentos</th>
                <th>Equipamento</th>
                <th>Data de Início</th>
                <th>Data Final</th>
                 
        </tr>
                
        <?php foreach ($agendar as $agenda) { ?>
        <tr>   
        <td><?=$agenda->idAgendar; ?></td>
        <td><?= $agenda->title;?></td>
        <td><?= $agenda->description;?></td>
        <td><?= $inicio = date(('d/m/Y'),strtotime($agenda->start));?></td> 
       <td><?= $final = date(('d/m/Y'),strtotime($agenda->end));?></td> 
      
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
