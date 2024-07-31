<h1 class="text-center">editar Produto</h1>

<?php 
    $sql = "SELECT * FROM produtos WHERE id_produto = " . $_REQUEST['id'];
     
    $conn = new Conexao();

    $result = $conn->getConexao()->query($sql);

    $row = $result->fetch(PDO::FETCH_LAZY);
?>

<form class="row g-3" action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">

    <input type="hidden" name="id" value="<?php $row->id_produto  ?>">

  <div class="col-md-6">
    <label for="input-desc" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="input-desc" value="<?php $row->descricao ?>">
  </div>
  <div class="col-md-6">
    <label for="input-tipo" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control" id="input-tipo" value="<?php $row->tipo ?>">
  </div>
  
<div class="col-md-4">
                <label for="inputState" class="form-label">Unidade de Medida</label>
                <select id="inputState" name="unidade_medida" class="form-select">
                    <option selected value="<?php $row->unidade_medida ?>"></option>
                    <option value="<?php if($row->unidade_medida=="und"){echo "selected";} ?>> und </option>
                    <option value="<?php if($row->unidade_medida=="saco"){echo "selected";} ?>> saco </option>
                    <option>pacote</option>
                    <option>metro</option>
                    <option>kg</option>
                </select>
            </div>
  
  <div class="col-md-4">
    <label for="" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control">
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Valor</label>
    <input type="number" name="valor" class="form-control">
  </div>

  <div class="col-md-2 ">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>


