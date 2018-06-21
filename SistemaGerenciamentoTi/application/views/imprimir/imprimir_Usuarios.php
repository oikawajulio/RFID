<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
<div class="col-md-12">
   <h4 class="page-header"> Relatório de Usuários </h4>
  </div>
</div>
<hr>

   <div class="col-md-12">
   <table id="customers">
         <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Nivel</th>
            <th>Status</th>
        </tr>
                
 <?php foreach ($usuarios as $usu) { ?>
 <tr>  
         <td><?= $usu->idusuario;?></td>
         <td><?= $usu->nome;?></td>
         <td><?= $usu->email;?></td>
         <td><?= $usu->nivel == 1 ? 'Administrador' : 'Usuário'; ?></td>
        <td><?= $usu->status == 1 ? 'Ativo' : 'Inativo'; ?></td>
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
