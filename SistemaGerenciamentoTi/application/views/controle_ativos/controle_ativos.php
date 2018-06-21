<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<div class="col-md-10">
		<h3 class="page-header">
			<i class="fa fa-check-square-o  " aria-hidden="true"></i>ATIVOS DE TI
		</h3>
	</div>
	<div class=" col-md-2">
  <div class="dropdown">
  <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown"><strong>Leituras RFID</strong>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href ="<?= base_url()?>computadores/listar_computadores">Computadores </a></li>
    <li><a href="<?= base_url()?>impressoras/listar_impressoras">Impressoras</a></li>
   
  </ul>
</div> 
 
 </div>
 <div class="col-md-12">
	<!--Menu Tabs com os módulos -->
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li role="presentation" class="active">
			<a class="nav-link active" data-toggle="tab" href="#computadores" role="tab" aria-controls="computadores">COMPUTADORES</a>
		</li>
		<li role="presentation">
			<a class="nav-link" data-toggle="tab" href="#impressora" role="tab" aria-controls="impressora">IMPRESSORAS</a>
		</li>
		<li role="presentation">
			<a class="nav-link" data-toggle="tab" href="#controle_toner" role="tab" aria-controls="controle_toner">CONTROLE DE TONER</a>
		</li>
		<li role="presentation">
			<a class="nav-link" data-toggle="tab" href="#area_remota" role="tab" aria-controls="area_remota">ÁREA REMOTA</a>
		</li>
		<li role="presentation">
			<a class="nav-link" data-toggle="tab" href="#conexao" role="tab" aria-controls="conexao">CONEXÕES DE REDE</a>
		</li>

		<li role="presentation">
			<a class="nav-link" data-toggle="tab" href="#email" role="tab" aria-controls="emails">E-MAILS</a>
		</li>
	</ul>
	<!--Menu Tabs do módulo computadores -->
	<div class="tab-content">
		<div class="tab-pane active" id="computadores" role="tabpanel">
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active">
					<form action="<?= base_url()?>computadores/cadastrar" method="post">
						<div class="form-group">
							<label for="marca">Marca:</label>
							<input class="form-control" id="marca" name="marca" required="" type="text">
							<div class="row">
								<div class="col-xs-3">
									<label for="modelo">Modelo:</label>
									<input class="form-control" id="modelo" name="modelo" required="" type="text">
								</div>
								<div class="col-xs-3">
									<label for="codigo_patrimonio">Código de Patrimônio:</label>
									<input class="form-control" id="codigo_patrimonio" name="codigo_patrimonio" required="" type="text">
								</div>
								<div class="col-xs-3">
									<label for="nome_usuario">Usuário :</label>
									<input class="form-control" id="nome_usuario" name="nome_usuario" required="" type="text">
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="departamento">Departamento:</label>
										<input class="form-control" id="departamento" name="departamento" required="" type="text">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="hd">HD:</label>
										<input class="form-control" id="hd" name="hd" required="" type="text">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="processador">Processador:</label>
										<input class="form-control" id="processador" name="processador" required="" type="text">
									</div>
								</div>
								<div class="col-xs-3">
									<div class="form-group">
										<label for="memoria">Memória RAM:</label>
										<input class="form-control" id="memoria" name="memoria" required="" type="text">
									</div>
								</div>
								<div class="col-xs-3">
									<label for="pacote_office">Pacote Office: </label>
									<select class="form-control" id="pacote_office" name="pacote_office" required="">
										<option value="0"> --- </option>
										<option value="1">Microsoft Office 2013 Home And Business </option>
										<option value="2">Microsoft Office 2016 Home And Business </option>
										<option value="3">Libre Office</option>
                                  </select>
								</div>
							</div>
						</div>
				</div>
			</div>

			<div style="text-align: right;">
				<button class="btn btn-danger" type="reset">Cancelar</button>
				<button class="btn btn-success" type="submit">Enviar</button>
				
				</div>
			</form>

		
		</div>
		<!--Menu Tabs do módulo Impressoras -->
		<div class="tab-pane" id="impressora" role="tabpanel">
			<form action="<?= base_url()?>impressoras/cadastrar" method="post">
				<div class="row">
					<div class="col-xs-4">
						<label for="marca">Marca:</label>
						<input class="form-control" id="marca" name="marca" required="" type="text">
					</div>
					<div class="col-xs-4">
						<label for="modelo">Modelo:</label>
						<input class="form-control" id="modelo" name="modelo" required="" type="text">
					</div>
					<div class="col-xs-4">
						<label for="codigo_patrimonio">Código de Patrimônio:</label>
						<input class="form-control" id="codigo_patrimonio" name="codigo_patrimonio" required="" type="text">
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							<label for="nome_usuario">Usuário:</label>
							<input class="form-control" id="nome_usuario" name="nome_usuario" required="" type="text">
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group">
							<label for="departamento">Departamento:</label>
							<input class="form-control" id="departamento" name="departamento" required="" type="text">
						</div>
					</div>
					<div class="col-xs-4">
						<label for="status">Status: </label>
						<select class="form-control" id="status" name="status" required="">
										<option value="0"> --- </option>
										<option value="1"> Ativa </option>
										<option value="2">Inativa </option>
					</select>
					</div>
					
					<div style="text-align: right; padding: 10px;">
						<button class="btn btn-success" type="submit">Enviar</button>
						<button class="btn btn-danger" type="reset">Cancelar</button>
					</div>
			</form>
			</div>
		</div>
		<div class="tab-pane" id="controle_toner" role="tabpanel">
			<!--Menu Tabs do módulo controle de toner -->
			<div class="tab-pane" id="profile" role="tabpanel">
				<div class="row">
					<form action="<?= base_url()?>controle_toner/cadastrar" method="post">
						<div class="col-xs-12 col-sm-3 col-md-3">
							<label for="impressora">Impressoras: </label>
							<select class="form-control" id="impressora" name="impressora" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($impressora as $impre) {?>
                        <option value="<?=$impre->idImpressora?>"> <?=$impre->marca?> </option>
                        <?php } ?>

                    </select>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Departamento:</label>
								<input type="text" class="form-control" name="departamento" id="departamento">
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-2">
							<label for="data_inicio">Data da Início:</label>
							<div class="form-group">
								<div class="col-xs-12">
									<div class="row">
										<div class="input-group date">
											<input type="date" class="form-control" id="data_inicio" name="data_inicio" required="">
											<div class="input-group-addon">
												<span class="fa fa-calendar" aria-hidden="true"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-2 col-md-2">
							<label for="data_termino">Data Término:</label>
							<div class="form-group">
								<div class="col-xs-12">
									<div class="row">
										<div class="input-group date">
											<input type="date" class="form-control" id="data_termino" name="data_termino" required="">
											<div class="input-group-addon">
												<span class="fa fa-calendar" aria-hidden="true"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-xs-2">
							<label for="status">Status: </label>
							<select class="form-control" id="status" name="status" required="">
								<option value="0"> --- </option>
								<option value="1"> Novo </option>
								<option value="2">Carregado</option>
								<option value="3">Vazio</option>
				        </select>
						</div>
				</div>
			</div>
			<div style="text-align: right;">
				<button class="btn btn-success" type="submit">Enviar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			</form>
		</div>
		<!--Menu Tabs do módulo Área remota-->
		<div class="tab-pane" id="area_remota" role="tabpanel">
			<div class="tab-pane" id="profile" role="tabpanel">
				<div class="row">
					<form action="http://localhost/SistemaGerenciamentoTi/area_remota/cadastrar" method="post">
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">
								<label>Login:</label>
								<div class="form-group">
									<input type="text" class="form-control" name="login" id="login" required>
								</div>
							</div>
						</div>
							<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">
								<label>Senha:</label>
								<div class="form-group">
									<input type="password" class="form-control" name="senha" id="senha" required>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">
								<label>Usuário:</label>
								<input type="text" class="form-control" name="usuario" id="usuario" required>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3">
							<div class="form-group">
								<label>Departamento:</label>
								<div class="form-group">
									<input type="text" class="form-control" name="departamento" id="departamento" required>
								</div>
							</div>
						</div>
				</div>
			</div>
			<div style="text-align: right;">
				<button class="btn btn-success" type="submit">Enviar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			</form>
		</div>
		<!--Menu Tabs do módulo controle de Emails -->
		<div class="tab-pane" id="email" role="tabpanel">
			<div class="tab-pane" id="profile" role="tabpanel">
				<div class="row">
					<form action="http://localhost/SistemaGerenciamentoTi/equipamento/cadastrar" method="post">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<label>Email:</label>
								<div class="form-group">
									<input type="text" class="form-control codigo-produto-mask" name="id" id="codigoProduto" required>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<label>Usuário</label>
								<input type="text" class="form-control" name="id" id="descricaoProduto">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="form-group">
								<label>Senha:</label>
								<input type="text" class="form-control" name="id" id="descricaoProduto">
							</div>
						</div>
				</div>
			</div>
			<div style="text-align: right;">
				<button class="btn btn-success" type="submit">Enviar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>
			</form>
		</div>
		
		<!--Menu Tabs do módulo conexões -->
		<div class="tab-pane" id="conexao" role="tabpanel">
			<div class="tab-pane" id="profile" role="tabpanel">
				<div class="row">
					<form action="http://localhost/SistemaGerenciamentoTi/conexao/cadastrar" method="post">
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Empresa:</label>
								<div class="form-group">
									<input type="text" class="form-control codigo-produto-mask" name="id" id="codigoProduto" required>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-2 col-md-2">
							<div class="form-group">
								<label>Quantidade de Banda</label>
								<input type="text" class="form-control" name="id" id="descricaoProduto">
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Velocidade Download:</label>
								<div class="form-group">
									<input type="text" class="form-control mask-money" name="precoUnitario" id="precoUnitarioProduto" required>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Velocidade Upload:</label>
								<div class="form-group">
									<input type="text" class="form-control mask-money" name="precoUnitario" id="precoUnitarioProduto" required>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>IP:</label>
								<div class="form-group">
									<input type="text" class="form-control mask-money" name="precoUnitario" id="precoUnitarioProduto" required>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Mascara:</label>
								<div class="form-group">
									<input type="text" class="form-control mask-money" name="precoUnitario" id="precoUnitarioProduto" required>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-3 col-md-3">
							<div class="form-group">
								<label>Gateway:</label>
								<div class="form-group">
									<input type="text" class="form-control mask-money" name="precoUnitario" id="precoUnitarioProduto" required>
								</div>
							</div>
						</div>
				</div>
				<div style="text-align: right;">
					<button class="btn btn-success" type="submit">Enviar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>
				</form>
			</div>
			
		</div>
		
	</div>
</div>



<script>
	$(function () {
		$('#myTab a:last').tab('show')
	})

</script>

	

			
