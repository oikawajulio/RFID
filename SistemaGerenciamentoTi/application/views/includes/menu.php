<?php session_start()?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="<?=base_url();?>assets/img/logoMarca.png">
        </div>
          
        <div id="navbar" class="navbar-collapse collapse">
       
            <ul class="nav navbar-nav navbar-right">
             <li><small><?php echo "<strong>Usuário</strong>: ".$this->session->userdata('nome')?></li></small>
             <li><a href="#">SOBRE</a></li>
             <li><a href="<?= base_url()?>dashboard/logout"><i class="fa fa-sign-out" style="font-size:15px"></i>SAIR</a></li>
             </ul>
            
        </div>
    </div>
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="<?= base_url();?>"><i class="fa fa-home fa-2x" aria-hidden="true"></i> HOME<span class="sr-only">(current)</span></a></li>
                <li><a href="<?=base_url();?>usuario"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i> CONTROLE DE USUÁRIOS</a></li>
                <li><a href="<?=base_url();?>produtos"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i> PRODUTOS</a></li>
                <li><a href="<?=base_url();?>fornecedores"><i class="fa fa-users fa-2x" aria-hidden="true"></i> FORNECEDORES</a></li>
                <li><a href="<?=base_url();?>compras"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i> COMPRAS</a></li>
                <li><a href="<?=base_url();?>equipamento"><i class="fa fa-desktop fa-2x" aria-hidden="true"></i> EQUIPAMENTOS</a></li>
                <li><a href="<?=base_url();?>manutencao"><i class="fa fa-wrench fa-2x" aria-hidden="true"></i> MANUTENÇÃO</a></li>
           <li><a href="<?=base_url();?>calendar"><i class="fa fa-calendar fa-2x" aria-hidden="true">
        </i> AGENDAR MANUTENÇÃO</a></li>

                <li><a href="<?=base_url();?>ativos"><i class="fa fa-check-square-o fa-2x" aria-hidden="true">

        </i> ATIVOS DE TI</a></li>

                <li><a href="<?=base_url();?>licencas"><i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i> LICENÇAS DE SOFTWARES</a></li>

                <li>
                    <a href="<?=base_url();?>relatorio"> <i class="fa fa-print fa-2x"></i>   RELATÓRIOS
                  </a>
                </li>
        </div>
    </div>
</div>