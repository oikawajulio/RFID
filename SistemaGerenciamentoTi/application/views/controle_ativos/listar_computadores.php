<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Lista de Computadores </h4>
    </div>


<hr>
<body onload="setTimeout('Atualizar(),5000000')">
  <table id="customers">

        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Código de Patrimônio</th>
            <th>Nome de Usuário</th>
            <th>Departamento</th>
            <th>Memória</th>
            <th>HD</th>
            <th>Pacote Oficce</th>

        </tr>

        <?php foreach ($computadores as $comp) { ?>
        <tr>
            <td>
                <?= $comp->idComputador;?>
            </td>
            <td>
                <?= $comp->marca;?>
            </td>
            <td>
                <?= $comp->modelo;?>
            </td>
            <td>
                <?= $comp->codigo_patrimonio;?>
            </td>
            <td>
                <?= $comp->nome_usuario;?>
            </td>
            <td>
                <?= $comp->departamento;?>
            </td>
            <td>
                <?= $comp->memoria;?>
            </td>
            <td>
                <?= $comp->hd;?>
            </td>
           <td>
           <?= $comp->pacote_office == 1 ? 'Microsoft Office' : 'Libre Office';?>
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