<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
           ATUALIZAR MANUTENÇÃO
</h3>
    </div>
<div class="col-md-12">
        <form action="<?= base_url()?>manutencao/salvar_atualizacao" method="post">
		  <input type="hidden"  id="idManutencao" name="idManutencao" value="<?= $manutencao[0]->idManutencao;?>">
            
            <div class="form-group">
                <label for="descricao_manutencao">Descricão</label>
                <input class="form-control" id="descricao_manutencao" name="descricao_manutencao" placeholder="Informe a Descrição..." value="<?= $manutencao[0]->descricao_manutencao;?> "required="" type="text">
            </div>
                   <div class="row">
                 <div class="col-md-3">
                    <label for="servico">Tipo do Serviço:</label>
                    <select class="form-control" id="servico" name="servico" required="">
                        <option value="0"> --- </option>
                        <?php 
						foreach ($servicos as $servico){
                        if($servico->idservico ==$manutencao[0]->servico){
						   ?>
						  <option value="<?=$servico->idServico?>" selected> <?=$servico->descricao_servico?> </option>
						
						<?php } else{ ?>
						
						<option value="<?=$servico->idServico?>"> <?=$servico->descricao_servico?> </option>
                       	
						<?php }
						
						}?>

                    </select>
                </div>
                 <div class="col-md-3">
                    <label for="equipamento">Equipamento : </label>
                    <select class="form-control" id="equipamento" name="equipamento" required="">
                        <option value="0"> --- </option>
                        <?php 
						foreach ($equipamentos as $equipamento){
                        if($equipamento->idEquipamento ==$manutencao[0]->equipamento){
						   ?>
						  <option value="<?=$equipamento->idEquipamento?>" selected> <?=$equipamento->descricao?> </option>
						
						<?php } else{ ?>
						
						<option value="<?=$equipamento->idEquipamento?>"> <?=$equipamento->descricao?> </option>
                       	
						<?php }
						
						}?>

                    </select>
                </div>
                    <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="observacoes">Observações:</label>
                        <input class="form-control" id="observacoes" name="observacoes"  value="<?= $manutencao[0] ->observacoes; ?>" required="" type="text">
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


	 



