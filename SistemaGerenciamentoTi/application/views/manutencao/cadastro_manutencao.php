<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
         CADASTRO DE MANUTENÇÃO
</h3>
    </div>
    <div class="col-md-12">
        <form action="<?= base_url()?>manutencao/cadastrar" method="post">
            <div class="form-group">
                <label for="descricao_manutencao">Descrição da manutenção:</label>
                <input class="form-control" id="descricao_manutencao" name="descricao_manutencao" placeholder="" required="" type="text">
                   <div class="row">
                 <div class="col-xs-4 ">
                    <label for="equipamento">Equipamento:</label>
                    <select class="form-control" id="equipamento" name="equipamento" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($equipamentos as $equip) {?>
                        <option value="<?= $equip->idEquipamento?>"> <?= $equip->descricao?> </option>
                        <?php } ?>
             </select>
     </div>
     <div class="col-xs-4">
                <div class="form-group">
                 <label for="departamento">Departamento:</label>
              <input class="form-control" id="departamento" name="departamento" placeholder="" required="" type="text">
            </div>
   </div>
      <div class="col-xs-4">
      <label for="situacao">Situação:</label>
                    <select class="form-control" id="situacao" name="situacao" required="">
                        <option value="0"> --- </option>
                        <option value="1">A fazer </option>
                        <option value="2">Em Andamento</option>
                        <option value="3">Realizada </option>
                    </select>
             </div>
        </div>
<div class="row">
    <div class="col-xs-4">
                    <label for="servico">Tipo de Serviço: </label>
                    <select class="form-control" id="servico" name="servico" required="">
                        <option value="0"> --- </option>
                        <?php foreach ($servicos as $servico) {?>
                        <option value="<?=$servico->idServico?>"> <?= $servico->descricao_servico?></option>
                        <?php } ?>
                    </select>
                </div>
   <div class="col-xs-4">
      <label for="tipo_manutencao">Tipo de Manutenção:</label>
                    <select class="form-control" id="tipo_manutencao" name="tipo_manutencao" required="">
                        <option value="0"> --- </option>
                        <option value="1">Interna </option>
                        <option value="2">Externa</option>
                  </select>
            </div>
        
<div class="col-xs-4">
    <label for="data_manutencao">Data da Manutenção:</label>
         <div class="form-group">
            <div class="col-xs-12">
                  <div class="row">
                  <div class="input-group date">
                       <input type="date" class="form-control" id="data_manutencao" name="data_manutencao" required="">
                       <div class="input-group-addon">
                   <span class="fa fa-calendar" aria-hidden="true"></span>
               </div>
           </div>
       </div>
      </div>
  </div>
</div>

      <div class="col-md-12">
                 <div class="form-group">
                    <label for="observacoes">Observações:</label>
                    <textarea class="form-control" rows="5" id="observacoes" name="observacoes" required="" type="text"></textarea>
            </div>
         </div>              
     </div>
  </div>
</div>
</div>
       <div style="text-align: right;">
                <button class="btn btn-success" type="submit">Enviar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
        </form>
    </div>
</div>

	





      