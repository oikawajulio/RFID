<!DOCTYPE html>
<link href="<?=base_url();?>assets/css/customers.css" rel="stylesheet">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div id="image2">
     <img src="<?=base_url();?>assets/img/LogoMarca2.png"/>
  </div>
    <div class="col-md-12">
        <h4 class="page-header"> Relatório de Fornecedores </h4>
    </div>

</div>
<hr>

<div class="col-md-12">
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Razão Social</th>
            <th>Nome Fantasia</th>
            <th>CNPJ</th>
            <th>Inscrição Estadual</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Logradouro</th>
            <th>Complemento</th>
            <th>Cidade</th>
            <th>Estado</th>
    </tr>
        <?php foreach ($fornecedores as $forn) { ?>
        <tr>
            <td>
                <?= $forn->idFornecedor; ?>
            </td>

            <td>
                <?= $forn->razaoSocial;?>
            </td>
            <td>
                <?= $forn->nome_fantasia; ?>
            </td>
            <td>
                <?= $forn->cnpj;?>
            </td>
            <td>
                <?= $forn->inscricaoEstadual; ?>
            </td>
            <td>
                <?= $forn->telefone;?>
            </td>
            <td>
                <?= $forn->endereco;?>
            </td>
            <td>
                <?= $forn->bairro; ?>
            </td>
            <td>
                <?= $forn->logradouro; ?>
            </td>
            <td>
                <?= $forn->complemento; ?>
            </td>
            <td>
                <?= $forn->nome;?>
            </td>
            <td>
                <?= $forn->nome; ?>
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