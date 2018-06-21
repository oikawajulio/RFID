<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Relatório de Equipamentos </h4>
    </div>

</div>
<hr>

<div class="col-md-12">
    <table id="customers">

        <tr>
            <th> ID</th>
            <th>Nome do Equipamento</th>
            <th> Marca</th>
            <th> Modelo</th>
            <th> Departamento</th>
            <th> Situação</th>
        </tr>

        <?php foreach ($equipamentos as $equi) { ?>
        <tr>
            <td>
                <?= $equi->idEquipamento;?>
            </td>
            <td>
                <?= $equi->descricao;?>
            </td>
            <td>
                <?= $equi->marca;?>
            </td>
            <td>
                <?= $equi->modelo;?>
            </td>
            <td>
                <?= $equi->departamento;?>
            </td>
            <td>
                <?= $equi->situacao == 1 ? 'Ativo' : 'Inativo'; ?>
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