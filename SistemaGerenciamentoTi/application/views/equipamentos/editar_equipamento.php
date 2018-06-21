<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="col-md-12">
        <h3 class="page-header">
          ATUALIZAR EQUIPAMENTO
       </h3>
    </div>
    
	<div class="col-md-12">
        <form action="<?= base_url()?>equipamento/salvar_atualizacao" method="post">
		   <input type="hidden"  id="idEquipamento" name="idEquipamento" value="<?= $equipamento[0]->idEquipamento;?>">
            <div class="form-group">
                     <label for="descricao">Descrição:</label>
                <input class="form-control" id="descricao" name="descricao"  value="<?= $equipamento[0]->descricao;?>" required="" type="text">
       <div class="row">
           <div class="col-xs-3">
                <label for="marca">Marca:</label>
                <input class="form-control" id="marca" name="marca" value="<?= $equipamento[0]->marca;?>" required="" type="text">
                </div>
      <div class="col-xs-3">
        <label for="modelo">Modelo:</label>
        <input class="form-control" id="modelo" name="modelo" value="<?= $equipamento[0]->modelo;?>" required="" type="text">
      </div>
       <div class="col-xs-6">
                <label for="codigo_patrimonio">Código de Patrimônio :</label>
                <input class="form-control" id="codigo_patrimonio" name="codigo_patrimonio" value="<?= $equipamento[0]->codigo_patrimonio;?>" required="" type="text">
        </div>
             <div class="col-xs-6">
                    <div class="form-group">
                        <label for="departamento">Departamento:</label>
                        <input class="form-control" id="departamento" name="departamento" value="<?= $equipamento[0]->departamento;?>" required="" type="text">
                    </div>
                </div>
                <div class="col-xs-6">
                    <label for="situacao">Situação: </label>
                    <select class="form-control" id="situacao" name="situacao" required="">
                        <option value="0"> --- </option>
                        <option value="1"> Ativo </option>
                        <option value="2"> Inativo </option>
                   </select>
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
</div>


	 



