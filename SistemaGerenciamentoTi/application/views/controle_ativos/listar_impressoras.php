<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Lista de Impressoras </h4>
    </div>


<hr>
<body onload="setTimeout('Atualizar(),500000')">
  <table id="customers">

        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Código de Patrimônio</th>
            <th>Nome de Usuário</th>
            <th>Departamento</th>
            <th>Status</th>
            

        </tr>

        <?php foreach ($impressoras as $imp) { ?>
        <tr>
            <td>
                <?= $imp->idImpressora;?>
            </td>
            <td>
                <?= $imp->marca;?>
            </td>
            <td>
                <?= $imp->modelo;?>
            </td>
            <td>
                <?= $imp->codigo_patrimonio;?>
            </td>
            <td>
                <?= $imp->nome_usuario;?>
            </td>
            <td>
                <?= $imp->departamento;?>
            </td>
          
           <td>
           <?= $imp->status == 1 ? 'Ativo' : 'Inativo';?>
           </td>


        </tr>
        <?php } ?>
    </table>
</div>

</div>
</div>

    </div>
    </div>
    </body>
   <script type = "text/javascript">
       function Atualizar(){
       
       window.location.reload();
       
       }
   </script>